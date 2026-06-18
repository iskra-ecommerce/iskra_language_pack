<?php
namespace Opencart\Admin\Controller\Extension\IskraLanguagePack\Language;
class IskraLanguagePack extends \Opencart\System\Engine\Controller
{
    private array $languages = [
        'ru-ru' => ['name' => 'Russian', 'locale' => 'ru-ru', 'sort_order' => 1],
        'uk-ua' => ['name' => 'Ukrainian', 'locale' => 'uk-UA,uk', 'sort_order' => 2],
        'kk-kz' => ['name' => 'Kazakh', 'locale' => 'kk-KZ,kk', 'sort_order' => 3],
        'be-by' => ['name' => 'Belarusian', 'locale' => 'be-BY,be', 'sort_order' => 4],
        'ro-ro' => ['name' => 'Romanian', 'locale' => 'ro-RO,ro', 'sort_order' => 5],
    ];

    public function index(): void
    {
        $this->load->language('extension/iskra_language_pack/language/iskra_language_pack');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=language')
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/iskra_language_pack/language/iskra_language_pack', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['save'] = $this->url->link('extension/iskra_language_pack/language/iskra_language_pack.save', 'user_token=' . $this->session->data['user_token']);
        $data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=language');

        $data['language_iskra_language_pack_status'] = $this->config->get('language_iskra_language_pack_status');

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/iskra_language_pack/language/iskra_language_pack', $data));
    }

    public function save(): void
    {
        $this->load->language('extension/iskra_language_pack/language/iskra_language_pack');

        $json = [];

        if (!$this->user->hasPermission('modify', 'extension/iskra_language_pack/language/iskra_language_pack')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (!$json) {
            $this->load->model('setting/setting');
            $this->model_setting_setting->editSetting('language_iskra_language_pack', $this->request->post);
            $json['success'] = $this->language->get('text_success');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function install(): void
    {
        if ($this->user->hasPermission('modify', 'extension/language')) {
            $this->load->model('localisation/language');

            foreach ($this->languages as $code => $lang) {
                $language_info = $this->model_localisation_language->getLanguageByCode($code);

                $language_data = [
                    'name'       => $lang['name'],
                    'code'       => $code,
                    'locale'     => $lang['locale'],
                    'extension'  => 'iskra_language_pack',
                    'status'     => 1,
                    'sort_order' => $lang['sort_order']
                ];

                if (!$language_info) {
                    $this->model_localisation_language->addLanguage($language_data);
                } else {
                    $this->model_localisation_language->editLanguage($language_info['language_id'], $language_data);
                }
            }
        }
    }

    public function uninstall(): void
    {
        if ($this->user->hasPermission('modify', 'extension/language')) {
            $this->load->model('localisation/language');

            foreach ($this->languages as $code => $lang) {
                $language_info = $this->model_localisation_language->getLanguageByCode($code);
                if ($language_info) {
                    $this->model_localisation_language->deleteLanguage($language_info['language_id']);
                }
            }
        }
    }
}
