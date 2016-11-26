# stours-website

TO get site as a package (https://packagist.org/packages/software-tours/site) , run this commands in your laravel app 

1. composer require software-tours/site
2. php artisan vendor:publish
3. u app\config dodati Softwaretours\Site\Providers\SiteServiceProvider::class,
4. U .env fajl dodati:
    - ACCOUNT_ID = 7
    - API_URL = http://localhost/laravel-projects/software-tours-app-new/public/api
