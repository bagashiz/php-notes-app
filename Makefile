mysql:
	podman run -h db --name mysql-server -p 3306:3306 -e MYSQL_ROOT_PASSWORD=password -d mysql:8.0
	
createdb:
	podman exec -ti mysql-server mysql -u root -ppassword -e "CREATE DATABASE myapp"

dropdb:
	podman exec -ti mysql-server mysql -u root -ppassword -e "DROP DATABASE myapp"
