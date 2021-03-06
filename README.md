# Live Match

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://live-match.s3-ap-northeast-1.amazonaws.com/live-match/w9iNJ40HEKHlvXIXFReQ9lSKF4pauYriV4r7RYy3.png" width="800"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## 概要

http://ec2-13-230-181-212.ap-northeast-1.compute.amazonaws.com

一緒にライブに行ってくれる人を探すことができるマッチングサイトです。<br>
募集したり、参加申請をしたり、プロフィールなどで気になる人がいたらメッセージを送ることができます。

## テストアカウント
下記のアカウントをご使用ください。

・メールアドレス
　test@gmail.com

・パスワード
　testuser

## 仕様
- macOS Mojava 10.14.6
- PHP 7.3.17
- Laravel Framework 8.6.0
- Bootstrap 4
- Node.js 12.16.2
- Mysql 5.7.29
- AWS (EC2,S3)

## おもな機能

### ユーザー
- ユーザー登録、ログイン、ログアウト
- ユーザー情報の編集
- プロフィール写真の設定、変更
- パスワード再設定
- 2要素認証
- ブラウザセッション
- アカウント削除
- 未ログイン時、ゲストアカウント用レイアウトの表示

### ミーティング
- 一緒にライブに行く人を募集できる
- 自身の募集内容の編集、削除、詳細表示
- 他の人の募集に参加希望申請を送れる

### メッセージ
- ユーザー間のチャット機能実装
- 参加希望申請を送ったユーザーの一覧表示
- 自身の募集に参加を希望しているユーザーの一覧表示

### 検索
- ヘッダーに検索フォームの設置
- 該当するライブ募集名、ユーザー名を表示

## 今後実装したいこと
- カレンダー機能の実装
- チャット画面の非同期通信化
