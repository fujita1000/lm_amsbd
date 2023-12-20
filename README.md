laravel setup
composer create-project --prefer-dist laravel/laravel プロジェクト名

開発ローカルサーバー
php artisan serve

tailwindcss変換監視
yarn dev

mysql起動
net start mysql80

mysqlログイン
mysql --user=root --password

mysqlログアウト
exit;

mysql停止
net stop mysql80

databaseの作成
CREATE DATABASE lm_amsbd;

mysqlに登録されているデータベース一覧を確認
SHOW DATABASES;

使いたいデータベースを確認
USE lm_amsbd;

今現在選択しているデータベースを確認
SELECT DATABASE();

現在のテーブル一覧
SHOW TABLES;

選択しているテーブルの中身を閲覧
SELECT * FROM threads;
SELECT * FROM comments;
SELECT * FROM migrations;

ユーザー権限設定
CREATE USER 'your_user'@'localhost' IDENTIFIED BY 'your_password';
GRANT ALL PRIVILEGES ON lm_amsbd.* TO 'your_user'@'localhost';

設定リロード
FLUSH PRIVILEGES;

threadテーブルの中の最新四つすべて削除する
DELETE FROM threads
ORDER BY created_at DESC
LIMIT 4;
