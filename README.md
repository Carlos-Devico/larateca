<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<p align="center">
  <img src="logo3.png" alt="Logo Laravel" width="300" height="100">
</p>

## Sobre o Projeto
Este é um projeto desenvolvido utilizando o framework Laravel v10.

## Requisitos
- PHP >= 8.2
- Composer
- Banco de dados MySQL
- Servidor web (por exemplo, Apache, Nginx)

## Instalação
1. Clone este repositório:
   ```bash
   git clone https://github.com/Carlos-Devico/larateca.git

2. Acesse o diretório do projeto:
   ```bash
   cd larateca
3. Instale as dependências do Composer:
   ```bash
   composer install
4. Acesse o diretório do projeto::
   ```bash
   cp .env.example .env

5. Gere a chave de aplicação:
   ```bash
    php artisan key:generate

6. Configure o arquivo .env com as informações do seu banco de dados.
   
7. Execute as migrações do banco de dados:
   ```bash
   php artisan migrate
8. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
