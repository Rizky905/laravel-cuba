# This development using .htacess

# 1 set up the .htacess
- copy file .htaccess from public into root project folder
- rename file serve.php into index.php


# 2. config the livewire
- php artisan livewire:publish --config
- - Setting file in config/livewire -> 'asset_url' => env('ASSET_URL', null),
- php artisan livewire:publish --pagination

# 2. config the font-awesome
@font-face {
  font-family: 'FontAwesome';
  src: url('../fonts/fontawesome-webfont.eot?v=4.7.0');
  src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}

3. Optimize
- php artisan optimize:clear