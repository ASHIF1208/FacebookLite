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

 Facebook Lite with Laravel
 Step 1: Create a new Laravel project


    composer create-project --prefer-dist laravel/laravel sphere


Step 2: Configure the Database

Update the `.env` file with the following details:


    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=sphere
    DB_USERNAME=root
    DB_PASSWORD=admin123


Step 3: Create Migrations

Generate migrations for the connections and comments tables:


    php artisan make:migration create_connections_table
    php artisan make:migration create_comments_table


Define their structures and relationships in the migration files.
 Step 4: Generate Models and Controller

Generate models for Connection and Comment:


    php artisan make:model Connection
    php artisan make:model Comment


Create a controller named ConnectController:


    php artisan make:controller ConnectController


Step 5: Design Blade Views

Design Blade views for new posts, post display, and post updates. Utilize forms with CSRF protection.

Step 6: Establish Routes

In `web.php`, define routes to handle actions like adding, updating, and deleting posts.

Step 7: Implement Controller Functions

In `ConnectController.php`, implement functions for each route. Cover operations such as submitting posts, updating posts, deleting posts, displaying posts, adding comments, and finding posts by a specific user.

Step 8: Initial Setup Optimization

After the initial setup, optimize the project:


    php artisan optimize
    php artisan config:cache
    php artisan route:cache

Step 9: Serve the Project


    php artisan serve

Step 10: Integrate Jetstream (Optional)

If using Jetstream, require the package, install Livewire, handle npm dependencies, and migrate the database:
    composer require laravel/jetstream
    php artisan jetstream:install livewire
    npm install && npm run dev
    php artisan migrate

Your Facebook Lite Laravel project is now set up and ready to go! Refer to this README for guidance on project structure, features, and optimizations.
