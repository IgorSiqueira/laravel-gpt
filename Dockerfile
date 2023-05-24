# Estágio 1: Instalar dependências e gerar a pasta vendor
FROM composer:2 as composer

# Definição do diretório de trabalho para o Composer
WORKDIR /app

# Copiar apenas os arquivos necessários para instalar as dependências
COPY composer.json composer.lock /app/

# Instalar as dependências usando o Composer
RUN composer install --no-scripts --no-autoloader --ignore-platform-reqs

# Estágio 2: Imagem final com PHP para executar os testes
FROM php:8.1-cli

# Definição do diretório de trabalho
WORKDIR /app

# Copiar os arquivos do projeto da imagem intermediária
COPY . /app

# Copiar a pasta vendor do estágio intermediário
COPY --from=composer /app/vendor /app/vendor

# Instalar o PHPUnit
RUN apt-get update && apt-get install -y zip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer require --dev phpunit/phpunit

# Executar os testes usando o PHPUnit
CMD ["php", "/app/vendor/bin/phpunit"]
