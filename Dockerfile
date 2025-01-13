# Use uma imagem oficial do PHP
FROM php:7.4-apache

# Habilita o mod_rewrite (se necessário)
RUN a2enmod rewrite

# Instala dependências do sistema
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd

# Copia os arquivos do seu projeto para o container
COPY . /var/www/html/

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Exponha a porta 80 para o servidor Apache
EXPOSE 80
