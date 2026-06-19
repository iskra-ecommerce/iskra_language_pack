# Iskra Language Pack — Языковой пакет для OpenCart 4

[![PHP](https://img.shields.io/badge/PHP-8.1%2B-blue)](https://php.net)
[![OpenCart](https://img.shields.io/badge/OpenCart-4.x-green)](https://opencart.com)
[![Лицензия](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE)
[![Релиз](https://img.shields.io/github/v/release/iskra-ecommerce/iskra_language_pack)](https://github.com/iskra-ecommerce/iskra_language_pack/releases)

> [English](README.md) | [Русский](README.ru.md)

**Версия:** 1.0.0 | **Тип:** Языковой пакет (Language) | **Code:** `iskra_language_pack`

---

## Описание

Единый языковой пакет, содержащий **5 языков** для админ-панели и витрины OpenCart 4:

**Ключевые слова:** opencart 4 языковой пакет, opencart русский, opencart украинский, opencart казахский, opencart белорусский, opencart румынский, opencart кириллица, opencart локализация, opencart перевод, русский opencart, український opencart, қазақ тілі opencart.

| Код | Язык | Включён |
|-----|------|---------|
| ru-ru | Русский | ✅ |
| uk-ua | Українська | ✅ |
| kk-kz | Қазақ тілі | ✅ |
| be-by | Беларуская | ✅ |
| ro-ro | Română | ✅ |

Устанавливается из одного ZIP-архива через стандартный установщик OpenCart.

---

## Установка

### Через установщик OpenCart (рекомендуется)

1. **Система → Расширения → Установщик расширений**
2. Нажать **Загрузить** и выбрать `iskra_language_pack-1.0.0.ocmod.zip`
3. **Система → Расширения → Расширения**
4. В выпадающем списке выбрать **Language**
5. Найти **Iskra Language Pack** → нажать **Установить**
6. Готово: 5 языков появятся в **Система → Локализация → Языки**

### Ручная установка

1. Скопировать папку `extension/iskra_language_pack/` в корень OpenCart
2. **Система → Расширения → Расширения → Language → Iskra Language Pack → Установить**

---

## После установки

- Все 5 языков активны по умолчанию
- Чтобы отключить ненужные: **Система → Локализация → Языки** → выключить
- Язык по умолчанию настраивается в **Система → Настройки → Локаль**
- Переключение языка на витрине — через виджет в шапке (если установлен модуль Iskra Account)

---

## Удаление

**Система → Расширения → Расширения → Language → Iskra Language Pack → Удалить**

⚠ **Внимание:** Удаление расширения удалит все 5 языков из `oc_language`. Если хотя бы один язык используется — назначьте другой язык по умолчанию перед удалением.

---

## Структура расширения

```
extension/iskra_language_pack/
├── install.json                           # метаданные расширения
├── README.md
├── README.ru.md
├── CHANGELOG.md
├── LICENSE
├── admin/
│   ├── controller/language/               # контроллер (install/uninstall/save)
│   ├── model/language/                    # модель (fixSeoUrl)
│   ├── view/template/language/            # шаблон страницы настроек
│   └── language/
│       ├── en-gb/language/                # английские строки админки
│       ├── ru-ru/                         # переводы админ-панели (русский)
│       ├── uk-ua/                         # переводы админ-панели (украинский)
│       ├── kk-kz/                         # переводы админ-панели (казахский)
│       ├── be-by/                         # переводы админ-панели (белорусский)
│       └── ro-ro/                         # переводы админ-панели (румынский)
└── catalog/
    └── language/
        ├── ru-ru/                         # переводы витрины (русский)
        ├── uk-ua/                         # переводы витрины (украинский)
        ├── kk-kz/                         # переводы витрины (казахский)
        ├── be-by/                         # переводы витрины (белорусский)
        └── ro-ro/                         # переводы витрины (румынский)
```

---

## Разработка

### Сборка ZIP

```bash
cd extension/iskra_language_pack/
zip -r ../../iskra_language_pack-1.0.0.ocmod.zip install.json admin/ catalog/
```

### Зависимости

- OpenCart 4.1+
- PHP 8.1+

---

## Лицензия

MIT License. Сделано командой **Искра**.
