# セットアップ
cp backend/.env.example backend/.env

docker-compose up -d

docker exec -it laravel_app composer install --no-dev --optimize-autoloader

- APP_KEY生成
docker exec -it laravel_app php artisan key:generate

localhost:3000 へアクセス
