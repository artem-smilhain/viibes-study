const mix = require('laravel-mix');
let minifier = require('minifier');

//resources
const R_CLIENT_PATH = 'resources/assets/client';
const R_ADMIN_PATH = 'resources/assets/admin';
const R_APPLICANT_PATH = 'resources/assets/applicant';
//public
const P_CLIENT_PATH = 'public/assets/client';
const P_ADMIN_PATH = 'public/assets/admin';
const P_APPLICANT_PATH = 'public/assets/applicant';

mix
    //клиентская часть
    .js(R_CLIENT_PATH + '/js/main.js', P_CLIENT_PATH + '/js/main.js')//скрипты
    .copyDirectory(R_CLIENT_PATH + '/js/libraries', P_CLIENT_PATH + '/js/libraries') //сторонние JS библиотеки
    .sass(R_CLIENT_PATH + '/scss/main.scss', P_CLIENT_PATH + '/css/main.css')//стили
    .copyDirectory(R_CLIENT_PATH + '/scss/libraries', P_CLIENT_PATH + '/css/libraries')//gallery
    .copyDirectory(R_CLIENT_PATH + '/images', P_CLIENT_PATH + '/images') //картинки
    .copyDirectory(R_CLIENT_PATH + '/fonts', P_CLIENT_PATH + '/fonts') //шрифты
    .copyDirectory(R_CLIENT_PATH + '/video', P_CLIENT_PATH + '/video') //видео
    .copyDirectory(R_CLIENT_PATH + '/pdf', P_CLIENT_PATH + '/pdf') //видео

    //админ часть
    .js(R_ADMIN_PATH + '/js/main.js', P_ADMIN_PATH + '/js/main.js')
    .sass(R_ADMIN_PATH + '/scss/admin.scss', P_ADMIN_PATH + '/css/app.css')
    .copy('node_modules/admin-lte/dist/img', P_ADMIN_PATH + '/dist/img')
    .copy('node_modules/admin-lte/dist/img', P_ADMIN_PATH + '/dist/img')
    .copy('node_modules/ckeditor4/ckeditor.js', P_ADMIN_PATH + '/js/ckeditor4/ckeditor.js')
    .copy(R_ADMIN_PATH + '/js/ckeditor4/config.js', P_ADMIN_PATH + '/js/ckeditor4/config.js')
    .copy('node_modules/ckeditor4/styles.js', P_ADMIN_PATH + '/js/ckeditor4/styles.js')
    .copy('node_modules/ckeditor4/contents.css', P_ADMIN_PATH + '/js/ckeditor4/contents.css')
    .copyDirectory('node_modules/ckeditor4/skins', P_ADMIN_PATH + '/js/ckeditor4/skins')
    .copyDirectory('node_modules/ckeditor4/lang', P_ADMIN_PATH + '/js/ckeditor4/lang')
    .copyDirectory('node_modules/ckeditor4/plugins', P_ADMIN_PATH + '/js/ckeditor4/plugins')

    //кабинет абитуриента
    .sass(R_APPLICANT_PATH + '/scss/main.scss', P_APPLICANT_PATH + '/css/main.css')
    .copyDirectory(R_APPLICANT_PATH + '/images', P_APPLICANT_PATH + '/images') //картинки

    .sourceMaps();

mix.then(() => {
    minifier.minify(P_CLIENT_PATH + '/css/main.css')
});

/*
mix
    //клиентская часть
    .js(R_CLIENT_PATH + '/js/main.js', P_CLIENT_PATH + '/js/main.js') //скрипты
    .copyDirectory(R_CLIENT_PATH + '/js/libraries', P_CLIENT_PATH +  '/js/libraries') //сторонние JS библиотеки
    .sass(R_CLIENT_PATH + '/scss/main.scss', P_CLIENT_PATH + '/css/main.css') //стили
    .copyDirectory(R_CLIENT_PATH + '/images', P_CLIENT_PATH + '/images') //картинки
    .copyDirectory(R_CLIENT_PATH + '/fonts', P_CLIENT_PATH + '/fonts') //шрифты

    //админ часть
    .js(R_ADMIN_PATH + '/js/main.js', P_ADMIN_PATH + '/js/main.js')
    .sass(R_ADMIN_PATH + 'resources/scss/admin.scss', P_ADMIN_PATH + '/css/app.scss')
    .copy('node_modules/admin-lte/dist/img', P_ADMIN_PATH + '/dist/img')
    .copy('node_modules/admin-lte/dist/img', P_ADMIN_PATH + '/dist/img')
    .copy('node_modules/ckeditor4/ckeditor.js', P_ADMIN_PATH + '/js/ckeditor4/ckeditor.js')
    .copy('node_modules/ckeditor4/config.js', P_ADMIN_PATH + '/js/ckeditor4/config.js')
    .copy('node_modules/ckeditor4/styles.js', P_ADMIN_PATH + '/js/ckeditor4/styles.js')
    .copy('node_modules/ckeditor4/contents.scss', P_ADMIN_PATH + '/js/ckeditor4/contents.scss')
    .copyDirectory('node_modules/ckeditor4/skins', P_ADMIN_PATH + '/js/ckeditor4/skins')
    .copyDirectory('node_modules/ckeditor4/lang', P_ADMIN_PATH + '/js/ckeditor4/lang')
    .copyDirectory('node_modules/ckeditor4/plugins', P_ADMIN_PATH + '/js/ckeditor4/plugins')

    .sourceMaps();
*/
