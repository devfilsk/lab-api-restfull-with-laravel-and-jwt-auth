# Api RESTFULL usando Laravel e JWT-AUTH.

Projeto laravel para estudo da criação de uma API REST utilizando a tecnologia JWT para autenticação de usuários.


## Recursos utilizados:
- lib JWT-Auth https://jwt-auth.readthedocs.io/en/develop/
 - login, logout e refresh token
 - Tempo de expiração do token
 - Middleware para somente usuários autenticados pelo JWT token

## Instalação:
- Clone o repositório;
- Execute o comando composer install;
- Execute o comendo php artisan key:generate
- Edite o arquivo .env na raiz do projeto adicionando o seu banco de dados;
- Execute o comando php artisan migrate --seed para criar as tabelas no seu banco de dados e ja adicionar um usuário fake no mesmo;
- Execute o comando php artisan serve para iniciar o servidor interno do laravel. 
