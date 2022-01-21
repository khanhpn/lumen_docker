# lumen_docker
Install lumen with mysql and nginx

# How to run
```
docker-compose build
docker-compose up
```

# Access
http://localhost:8088/

# How to create a table or modify column
```
docker-compose run php php artisan make:migration create_authors_table

docker-compose run php php artisan migrate
```
