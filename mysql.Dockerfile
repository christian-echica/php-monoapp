FROM mysql:5.7.20

ENV MYSQL_ROOT_PASSWORD=mypassword
ENV MYSQL_DATABASE=usersdb
ENV MYSQL_PASSWORD=mypassword

COPY usersdb.sql /docker-entrypoint-initdb.d
