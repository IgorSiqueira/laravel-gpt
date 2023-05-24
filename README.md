# Laravel-GPT

[![Licença](https://img.shields.io/badge/licença-MIT-blue.svg)](https://opensource.org/licenses/MIT)

O pacote "laravel-gpt" é projetado para simplificar a geração de classes no Laravel usando o ChatGPT, um modelo avançado de linguagem natural. O objetivo é criar classes robustas e preenchidas através da interação natural.

## Recursos

- **Geração de classes robustas**: Utilizando o ChatGPT, você pode gerar automaticamente classes no Laravel, como Models, Requests e Controllers. Essas classes podem ser preenchidas com base em interações naturais com o ChatGPT, permitindo criar estruturas sólidas para suas aplicações.

- **Modelo avançado de linguagem natural**: O ChatGPT é um modelo avançado de linguagem natural capaz de entender e gerar texto coerente e de alta qualidade. Ao aproveitar esse modelo, você pode gerar classes com base em descrições em linguagem natural, reduzindo o esforço de desenvolvimento manual.

- **Personalização**: O pacote "Integração do Laravel com ChatGPT" também oferece recursos para personalizar as interações com o ChatGPT e ajustar o estilo e formato das classes geradas. Isso permite adaptar as classes geradas de acordo com as necessidades específicas do seu projeto Laravel.


## Execução de testes isolados

Para um melhor desenvolvimento esse pacote possui um Dockerfile que vai criar um container para execução de testes sem depender  da instalação do mesmo em algum projeto Laravel.

Para utilizar basta executar o seguintes passos.

```shell
cd laravel-gpt
docker compose build
docker compose up -d
docker-compose exec laravel-gpt-app bash


## Instalação

Certifique-se de ter o Composer instalado no seu ambiente de desenvolvimento. Caso precise instalá-lo, siga as instruções em [getcomposer.org](https://getcomposer.org/).

Após instalar o Composer, você pode adicionar o pacote "laravel-chatgpt" ao seu projeto Laravel executando o seguinte comando:

```shell
composer require igorsiqueira/laravel-gpt