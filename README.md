<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Installazione Laravel

```bash
cd directory_esercizi
```

```bash
composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here
```

```bash
cd cartella_progetto
```

```bash
code . -r
```

## Configurazione

```bash
composer require pacificdev/laravel_9_preset
```

```bash
php artisan preset:ui bootstrap
```

```bash
npm install
```

```bash
npm install --save @fortawesome/fontawesome-free
```

In vite.config.js aggiungere:

```json
"~@fortawesome": path.resolve(__dirname,"node_modules/@fortawesome"),
```

-   Copio dalla node_modules la cartella webfonts e la incollo nella cartella resources.

-   Nel resources/scss creo una cartella partials con un file \_variables.scss.

-   Nell'app.scss aggiungere:

```scss
@use "./partials/variables" as *;

$fa-font-path: "../fonts/font-awesome" !default;

@import "~@fortawesome/fontawesome-free/scss/fontawesome";
@import "~@fortawesome/fontawesome-free/scss/regular";
@import "~@fortawesome/fontawesome-free/scss/solid";
@import "~@fortawesome/fontawesome-free/scss/brands";

@import "~bootstrap/scss/bootstrap";
```
