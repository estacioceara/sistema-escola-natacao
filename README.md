<<<<<<< HEAD
# metricas
Repositorio usado para a aula de métricas de software
=======
## Como usar

1. Clonar a aplicação
```shell
git clone https://github.com/digitalcollege-classes/landing-page
```

2. Entrar no diretório
```shell
cd landing-page
```

3. Subir o docker
```shell
make up
```

<<<<<<< HEAD
4. Instalar as dependencias
```shell
docker compose exec -T php composer install  
```

5. Copiar .env
```shell
docker compose exec -T php cp .env.example .env 
```

6. Gerar chaves do Laravel
```shell
docker compose exec -T php php artisan key:generate  
```

7. Atualizar o banco
```shell
docker compose exec -T php php artisan migrate 
```

8. Adicionar dados falsos no banco
```shell
docker compose exec -T php php artisan db:seed 
```


Pronto, deve estar rodando em <http://localhost:8000>
