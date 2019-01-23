# PHP JavaScript Developer Test

A simple test for PHP / JavaScript Developers

## Demo

You can view a demo here: http://hidden-ridge-43678.herokuapp.com/

This is running on a free heroku plan which has a very small limit of 3,600 queries per hour. If you wish to test the CSV upload, perhaps try that on a local install.

## Installation

1. Clone this repo into a directory of your choice
```
git clone https://github.com/barrykeenan/php-js-dev-test.git catchtest
```
2. Install app dependencies
```
composer install
```
3. Set permissions
```
chmod g+w .env public/index.php public/.htaccess app/_config.php app/_config/theme.yml public/assets/ public/assets/web.config public/assets/.gitignore public/assets/.htaccess
```
4. Point your webserver to the public/ subdirectory. e.g. for apache the config would be:
```
<VirtualHost *:80>
    DocumentRoot /catchtest/public
    ServerName catchtest.localhost
    ServerAlias www.catchtest.localhost
    ErrorLog /catchtest/log/apache_error_log
    CustomLog /catchtest/log/apache_access_log common
</VirtualHost>
```
5. Check database config in .env
```
# DB credentials
SS_BASE_URL="http://catchtest.localhost"
SS_DATABASE_CLASS="MySQLPDODatabase"
SS_DATABASE_SERVER="localhost"
SS_DATABASE_NAME="catchtest"
SS_DATABASE_PASSWORD="developer"
SS_DATABASE_USERNAME="developer"
SS_ENVIRONMENT_TYPE="dev"
SS_DEFAULT_ADMIN_USERNAME='admin'
SS_DEFAULT_ADMIN_PASSWORD='admin'
```
6. Visit: 'catchtest.localhost/' which should build the DB using the config above.

## Importing contact data

1. Visit: 'catchtest.localhost/admin' using credentials:

	user: admin
	password: admin

2. Click Contacts on the left hand menu. Then click Import CSV. Chose file: 'data/customers.csv'

3. Go back to the home page 'catchtest.localhost/' and click Populate Contacts


