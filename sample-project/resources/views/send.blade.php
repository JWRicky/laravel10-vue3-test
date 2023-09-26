<?php

session_start();

  try {


    //DB名、ユーザー名、パスワードを変数に格納
    $dsn = 'mysql:dbname=kimura;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';

    $PDO = new PDO($dsn, $user, $password); //PDOでMySQLのデータベースに接続
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //PDOのエラーレポートを表示

    //contact.htmlの値を取得
    $name_main = $_POST['name'];
    $name_sub = $_POST['kana'];
    $mail_address = $_POST['email'];
    $phone_number = $_POST['tel'];

    $content_question = $_POST['comment'];

    if ($_POST['item'] == 'estimate') {
      $category_question = 1;
      $itemTitle = 'ご依頼の見積もり・相談';
    } elseif ($_POST['item'] == 'recruit') {
      $category_question = 2;
      $itemTitle = '採用について';
    } elseif ($_POST['item'] == 'product') {
      $category_question = 3;
      $itemTitle = '製品について';
    } else {
      $category_question = 4;
      $itemTitle = 'その他';
    }

    $sql = "INSERT INTO data_contact (name_main, name_sub, mail_address, phone_number, category_question, content_question) VALUES (:name_main, :name_sub, :mail_address, :phone_number, :category_question, :content_question)"; // テーブルに登録するINSERT INTO文を変数に格納　VALUESはプレースフォルダーで空の値を入れとく（仮決め）
    $stmt = $PDO->prepare($sql); //値が空のままSQL文をセット
    $params = array(':name_main' => $name_main, ':name_sub' => $name_sub, ':mail_address' => $mail_address, ':phone_number' => $phone_number, ':category_question' => $category_question, ':content_question' => $content_question, ); // 挿入する値を配列に格納
    $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行

  } catch (PDOException $e) {
    exit('データベースに接続できませんでした。' . $e->getMessage());
  }

?>

<!doctype html>
<html>

<head>

  <!-- Blade用にcsrf-tokenを追加 -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <AuthFormComponent :csrf="{{json_encode(csrf_token())}}"></AuthFormComponent>
  @vite(['resources/css/main.css', 'resources/js/app.js'])

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="/css/main.css">
  <link rel="stylesheet" type="text/css" href="/css/test.css">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

</head>

<body>
  <main class="nav-point">
    <div class="container contact-container"><!-- コンテンツ幅指定のため -->
      <h1>COMPLETED<span>送信完了画面</span></h1>
      <p class="conpletion_message">送信完了しました</p>
    </div>
    <div class="more-btn"><a href="/">フォームに戻る</a></div>
  </main>
  <?php session_destroy(); ?>
 
</body>

</html>