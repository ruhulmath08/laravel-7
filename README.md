## Learning Laravel

1. Create Laravel project:
    * composer create-project --prefer-dist laravel/laravel blog
    
2. Run Laravel project
    * php artisan serve

3. See server:
    * php artisan tinker
    * App::environment();

4. Keep Application in maintenance mode.
    * php artisan down
    
5. Keep Application in maintenance mode with message.
       * php artisan down --message"Upgrading Database"
       
6. Keep Application in up.
    * php artisan up
    
7. Keep Application running after down mode
    * php artisan up
    * php artisan serve
