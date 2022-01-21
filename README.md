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
# Preview
<img width="1440" alt="Screen Shot 2022-01-21 at 12 25 14" src="https://user-images.githubusercontent.com/4946353/150470947-f7e7a5ec-95a2-4afa-ad7f-87f951aa6d31.png">

