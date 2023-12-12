# FacebookLite

if 500 internal server error follow the commands

composer install
mv .env.example .env
php artisan cache:clear
composer dump-autoload
php artisan key:generate

and,

npm install 
npm run build
php artisan storage:link

change the .env file to connect the database,then

php artisan migrate

php artisan serve



