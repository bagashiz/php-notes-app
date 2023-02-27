mysql:
	podman run -h db --name mysql-server -p 3306:3306 -e MYSQL_ROOT_PASSWORD=password -d mysql:8.0
	
createdb:
	podman exec -ti mysql-server mysql -u root -ppassword -e "CREATE DATABASE myapp"

dropdb:
	podman exec -ti mysql-server mysql -u root -ppassword -e "DROP DATABASE myapp"

copy_script:
	podman cp ./db/notes-mini-project.sql mysql-server:/notes-mini-project.sql

migrate:
	podman exec -ti mysql-server mysql -uroot -ppassword -e "source ./notes-mini-project.sql" myapp

dev:
	php -S localhost:8000 -t public

.PHONY: mysql createdb dropdb copy_script migrate dev