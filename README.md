## Requirements

Make sure your local machine has the following installed:

- PHP 8.2
- Composer
- MySQL (or any supported database)
- Lavarel 11.2
- Git

  ## Installation
  
### After git clone, open the .env file and set up your environment variables. Make sure to configure the following:
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password :
composer install
php artisan migrate

## Then run command :
composer install
php artisan migrate
## Run the application 
Finally, run the following command to start the local development server:
php artisan serve




