# Undertailwind

[![Build Status](https://travis-ci.org/Automattic/_tw.svg?branch=master)](https://travis-ci.org/Automattic/_tw)

Undertailwind is a modern, blank WordPress starter theme based on [_s (Underscores)](https://underscores.me/) and powered by **Tailwind CSS v4**. It's built for developers who want a clean slate, modern build tools, and total design freedom.

> ⚠️ This theme is meant for hacking. Don’t use it as a parent theme. Instead, turn it into the next most awesome custom WordPress theme out there.

---

## ✨ Features

- Zero bloat, ultra-minimal template structure
- Tailwind CSS v4 integrated with PostCSS
- Fast JS bundling with ESBuild (includes JSX support for Gutenberg blocks)
- `npm run dev` for live rebuilding (CSS/JS/Blocks)
- `npm run pot` for `.pot` translation file generation (WP-CLI required)
- CSS Grid-based layout samples
- WooCommerce-compatible (optional)
- RTL-ready and translation-ready
- GPLv2 or later

---

## 🚀 Requirements

- [Node.js](https://nodejs.org/) (v18+ recommended)
- [Composer](https://getcomposer.org/)
- [WP-CLI](https://wp-cli.org/) (optional, for translations)

---

## ⚡ Quick Start

1. Clone the repo and rename the theme directory.
2. Replace all `_tw` references:

   | Search                        | Replace Example               |
   |------------------------------|-------------------------------|
   | `'_tw'`                      | `'undertailwind'`             |
   | `_tw_`                       | `undertailwind_`              |
   | `Text Domain: _tw`          | `Text Domain: undertailwind`  |
   | ` _tw` (DocBlocks)          | ` Undertailwind`              |
   | `_tw-`                       | `undertailwind-`              |
   | `_TW_` (constants)          | `UNDERTAILWIND_`              |

3. Rename `languages/_tw.pot` to match your new slug.
4. Update the `style.css` header and any hardcoded footer links.

---

## 🛠 Setup

```sh
composer install
npm install
```

---

## 🔧 Scripts

### Dev
```sh
npm run dev
```
Starts concurrent watchers for:
- Tailwind CSS build
- Editor CSS
- JS + Gutenberg block bundling
- One-time `.pot` regeneration

### Build (Production)
```sh
npm run build
```
Minifies and outputs:
- CSS
- JS
- Assets

### Other useful scripts
```sh
npm run pot         # Generate languages/_tw.pot (requires WP-CLI)
npm run build:css   # Just compile CSS
npm run build:js    # Just compile JS
npm run build:assets # Copy fonts/images
```

---

## 🧰 File Structure Overview

```
undertailwind/
├── assets/
│   ├── css/          # Tailwind source files
│   ├── js/           # main.js, editor.js (blocks go here)
│   ├── fonts/
│   └── images/
├── dist/             # Compiled theme assets
├── inc/              # WP includes (template tags, WooCommerce, etc.)
├── languages/        # .pot file here
├── template-parts/   # Theme template partials
├── style.css         # Theme main stylesheet
└── functions.php
```

---

## 🎯 Goal

Make something cool. Make it yours. Hack it apart and rebuild it. Undertailwind gives you the bare bones and modern tooling to build a custom WordPress theme exactly how you want.

Good luck and happy theming ✌️
