# アプリケーション名
お問い合わせフォーム

## 環境構築
Docker
1.laravel-docker-template.gitをコピー
2.docker-compose up -d --build

Laravel
1.docker-compose exec php bash
2.composer install
3..env.exampleファイルから.envを作成し、環境変数を変更
4.php artisan key:generate
5.php artisan config:clear
6.php artisan migrate
7.view ファイルの作成
8.css ファイルの作成

## 使用技術(実行環境)
・PHP 8.3.2
・Laravel8.83.8
・MySQL 8.0

## ER図
作成できていません

## URL
- 開発環境：http://localhost/
