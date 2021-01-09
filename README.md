# Projeto Soluti

O SQL encontra-se no diretório ./docker/db/sql/

## Comandos do docker-compose
Execute os seguintes comandos no seu host:

```sh
# Inicie os containers
$ docker-compose up --build -d

# Instale as dependências e inicie a aplicação
$ docker-compose run php bash -c "composer update && composer install && php artisan key:generate && php artisan migrate --seed && php artisan passport:install && npm install && npm run dev"

# Verifique no navegador
#
# http://localhost/
#
# Login: admin@admin.com
# Senha: password

# Exclua os containers
$ docker-compose down

# Exclua completamente os containers, imagens, volumes e networks
$ docker-compose down --rmi all --volumes

# Conecte-se a um container
$ docker-compose exec php bash
```
