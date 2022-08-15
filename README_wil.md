chmod -R 775 /var/www/html/
chown user:www-data /var/www/html/
chown -R user:www-data /var/www/html/



$ php artisan key:generate

$ php artisan doctrine:migrations:diff
$ php artisan doctrine:migrations:migrate
$ php artisan doctrine:generate:proxies





