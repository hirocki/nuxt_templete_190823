# Laravel*NUXT
## Docker環境


- 環境ビルド
docker-compose build && docker-compose up -d


- Laravelインストール
```
winpty docker exec -it api bash
```
```
laravel new
```
```
composer update
```
```
mv .env.example .env
```
```
vi .env

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=db
DB_USERNAME=user
DB_PASSWORD=pass
```
```
php artisan key:generate
```
```
php artisan migrate
```

もし、[ReflectionException]とかClass ‘HogeHoge’ not foundのようなエラーが出たら、次のコマンドでオートロードの定義を更新すればOK。
```
php artisan db:seed
```

```
http://localhost:8080  
```


- NUXTインストール
```
winpty docker-compose exec nuxt bash
```
```
create-nuxt-app [Project name]
```
```
cd [Project name]
```
```
npm run dev
```

```
http://localhost:3000
```
