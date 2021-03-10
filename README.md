# Notes Api

A simple notes rest api built with Symfony that will read notes data from a mysql database.

Running `docker-compose up` will initialise and start the three containers: php-fpm, nginx and mysql.

You can then access the note endpoint at localhost:8080/note.

There is a file called mysql-dump.sql with mock data that can be executed after opening a mysql shell:
`docker-compose exec mysql mysql -uuser_dbo -ppassword1`

You can shell into the PHP container like:
`docker-compose exec php-fpm bash`
