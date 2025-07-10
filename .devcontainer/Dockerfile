FROM mcr.microsoft.com/devcontainers/php:8.2

# Install MySQL Server
RUN apt-get update && \
    apt-get install -y mysql-server unzip wget && \
    apt-get clean

# Set root password for MySQL
RUN service mysql start && \
    mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY ''; FLUSH PRIVILEGES;"

# Download phpMyAdmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.2.1/phpMyAdmin-5.2.1-all-languages.zip && \
    unzip phpMyAdmin-5.2.1-all-languages.zip && \
    mv phpMyAdmin-5.2.1-all-languages /phpmyadmin && \
    rm phpMyAdmin-5.2.1-all-languages.zip

# Configure phpMyAdmin
COPY config.inc.php /phpmyadmin/config.inc.php
