FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD=password \
    MYSQL_DATABASE=gradebook_db \
    MYSQL_USER=admin \
    MYSQL_PASSWORD=password

COPY sql/init.sql /docker-entrypoint-initdb.d/

EXPOSE 3306