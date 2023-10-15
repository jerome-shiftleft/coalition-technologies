# Task Manager

## Installation

- download/clone this repository
- Copy .env.example **`cp .env.example .env`**
- update .env **`APP_URL`** to match your virtual host url.<br>
This is **required** if you want to use **browsersync**
- **`composer install`**
- **`php artisan key:generate`**
- **`npm install`**
- **`npm run dev`**

## Compiling Assets (Laravel Mix)

**`npm run dev`** compiles assets for development. Generates source maps for better debugging.<br><br>
**`npm run watch`** compiles assets for development, just like **`npm run dev`** but watches files for changes.<br>
If you modify any source file, it will automatically recompile the affected assets.<br>
Useful during development to automatically compile assets as you work without needing to run the build command repeatedly.<br>
If **`BROWSER_SYNC=true`** in .env, it will automatically reloads the browser after compiling.<br><br>
**`npm run prod`** compiles assets for production. Minifies the code to reduce file size.

**NOTE**: The following files are included in .gitignore to prevent merge conflicts when compiling assets and deploying.<br>
**If you fetch updates, ensure you recompile the assets on your machine or server**.

- public/mix-manifest.json
- public/css/app.css
- public/css/app-sass.css
- public/js/app.js
- public/js/vendor.js
- public/js/manifest.js
- public/js/app.js.LICENSE.txt
- public/js/vendor.js.LICENSE.txt

## WebP
**npm run webp** to generate webp version copy of images in the public/images directory.<br><br>
WebP is a modern image format that provides superior lossless and lossy compression for images on the web.<br>
Using WebP, webmasters and web developers can create smaller, richer images that make the web faster.

## Additional Packages Installed

### Composer Packages
- [Laravel Livewire](https://laravel-livewire.com)

### NPM Packages

#### devDependencies
- [imagemin](https://www.npmjs.com/package/imagemin)
- [imagemin-webp](https://www.npmjs.com/package/imagemin-webp) - used by **`npm run webp`**

### dependencies
- [bootstrap](https://www.npmjs.com/package/bootstrap)
- [@popperjs/core](https://www.npmjs.com/package/@popperjs/core)
- [jquery](https://www.npmjs.com/package/jquery)
- [jquery-ui](https://www.npmjs.com/package/jquery-ui)
- [chart.js](https://www.npmjs.com/package/chart.js)
- [chartjs-gauge](https://www.npmjs.com/package/chartjs-gauge)
- [datatables.net-dt](https://www.npmjs.com/package/datatables.net-dt)
- [moment](https://www.npmjs.com/package/moment)
- [select2](https://www.npmjs.com/package/select2)
- [sweetalert2](https://www.npmjs.com/package/sweetalert2)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
