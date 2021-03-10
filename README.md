# Notes Api

A simple notes rest api built with Symfony that will read notes data from a mysql database.

You will need to create a local env file with the following params:
APP_ENV
APP_SECRET
DATABASE_URL
MYSQL_ROOT_PASSWORD
MYSQL_DATABASE
MYSQL_USER
MYSQL_PASSWORD

Running `docker-compose up` will initialise and start the three containers: php-fpm, nginx and mysql.

You can then access the note endpoint at localhost:8080/note.

There is a file called mysql-dump.sql with mock data that can be executed after opening a mysql shell:
`docker-compose exec mysql mysql -uDB_USER -pDB_PASSWORD`

You can shell into the PHP container like:
`docker-compose exec php-fpm bash`
