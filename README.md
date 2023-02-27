# Description

This is my simple PHP mini project. It is a simple note web application.

## Dependencies

- [PHP](https://www.php.net/) 8.1.0 or higher
- [MySQL](https://www.mysql.com/) 8.0 or higher
- [make](https://www.gnu.org/software/make/) (optional)
- [Podman](https://podman.io/) or [Docker](https://www.docker.com/) (optional)
- [MySQL 8.0 Docker image](https://hub.docker.com/_/mysql) (optional)

## Setup

### Using Podman

1. Clone this repository and go to the project directory.

    ```bash
    git clone https://github.com/bagashiz/php-notes-app.git
    cd php-notes-app
    ```

2. Run the following make commands to setup the database.

    ```bash
    make mysql
    make createdb
    make copy_script
    make migrate
    ```

3. Start the PHP server.

    ```bash
    php -S localhost:8000 -t public
    ```

4. Go to `http://localhost:8000` in your browser.

### Using Docker

1. Clone this repository and go to the project directory.

    ```bash
    git clone https://github.com/bagashiz/php-notes-app.git
    cd php-notes-app
    ```

2. Change the `podman` commands to `docker` in the Makefile, then follow the same steps as above.

## Learning and Reference Sources

- [Laracasts - PHP for Beginners](https://laracasts.com/series/php-for-beginners-2023-edition)
