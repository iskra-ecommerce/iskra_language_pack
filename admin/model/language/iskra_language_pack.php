<?php
namespace Opencart\Admin\Model\Extension\IskraLanguagePack\Language;
class IskraLanguagePack extends \Opencart\System\Engine\Controller
{
    public function fixSeoUrl(int $language_id, string $code): void
    {
        $this->db->query("UPDATE `" . DB_PREFIX . "seo_url` SET `value` = '" . $this->db->escape($code) . "', `keyword` = '" . $this->db->escape($code) . "' WHERE `language_id` = '" . (int)$language_id . "' AND `key` = 'language'");
    }
}
