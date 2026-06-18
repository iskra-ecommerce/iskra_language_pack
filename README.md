# Iskra Language Pack

> [English](README.md) | [Русский](README.ru.md)

**Version:** 1.0.0
**Type:** Language Pack
**Code:** `iskra_language_pack`
**Compatibility:** OpenCart 4.x

---

## Description

A unified language pack containing **5 languages** for the OpenCart 4 admin panel and storefront:

| Code | Language | Enabled |
|------|----------|---------|
| ru-ru | Russian | ✅ |
| uk-ua | Ukrainian | ✅ |
| kk-kz | Kazakh | ✅ |
| be-by | Belarusian | ✅ |
| ro-ro | Romanian | ✅ |

Installs as a single ZIP archive via the standard OpenCart Extension Installer.

---

## Installation

### Via OpenCart Extension Installer (recommended)

1. Go to **System → Extensions → Extension Installer**
2. Click **Upload** and select `iskra_language_pack-1.0.0.ocmod.zip`
3. Go to **System → Extensions → Extensions**
4. Select **Language** from the dropdown
5. Find **Iskra Language Pack** → click **Install**
6. Done: all 5 languages will appear in **System → Localisation → Languages**

### Manual Installation

1. Copy the folder `extension/iskra_language_pack/` to the root of your OpenCart installation
2. Go to **System → Extensions → Extensions → Language → Iskra Language Pack → Install**

---

## Post-Installation

- All 5 languages are enabled by default
- To disable unwanted languages: **System → Localisation → Languages** → disable
- Default language is configured in **System → Settings → Local**
- Storefront language switcher is available via the header widget (if the Iskra Account module is installed)

---

## Uninstallation

**System → Extensions → Extensions → Language → Iskra Language Pack → Uninstall**

⚠ **Warning:** Uninstalling this extension will remove all 5 languages from `oc_language`. If any of these languages is currently in use, assign a different default language before uninstalling.

---

## Extension Structure

```
extension/iskra_language_pack/
├── install.json                           # extension metadata
├── README.md
├── CHANGELOG.md
├── LICENSE
├── admin/
│   ├── controller/language/               # controller (install/uninstall/save)
│   ├── model/language/                    # model (fixSeoUrl)
│   ├── view/template/language/            # settings page template
│   └── language/
│       ├── en-gb/language/                # admin UI strings (English)
│       ├── ru-ru/                         # admin panel translations (Russian)
│       ├── uk-ua/                         # admin panel translations (Ukrainian)
│       ├── kk-kz/                         # admin panel translations (Kazakh)
│       ├── be-by/                         # admin panel translations (Belarusian)
│       └── ro-ro/                         # admin panel translations (Romanian)
└── catalog/
    └── language/
        ├── ru-ru/                         # storefront translations (Russian)
        ├── uk-ua/                         # storefront translations (Ukrainian)
        ├── kk-kz/                         # storefront translations (Kazakh)
        ├── be-by/                         # storefront translations (Belarusian)
        └── ro-ro/                         # storefront translations (Romanian)
```

---

## Development

### Building the ZIP

```bash
cd extension/iskra_language_pack/
zip -r ../../iskra_language_pack-1.0.0.ocmod.zip install.json admin/ catalog/
```

### Dependencies

- OpenCart 4.1+
- PHP 8.1+

---

## License

MIT License. Made by the **Iskra** team.
