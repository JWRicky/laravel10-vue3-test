
<?php

session_start();

   $name = isset($_POST["name"])? $_POST["name"] : "";
   $kana = isset($_POST["kana"])? $_POST["kana"] : "";
   $email = isset($_POST["email"])? $_POST["email"] : "";
   $tel = isset($_POST["tel"])? $_POST["tel"] : "";
   $item = isset($_POST["item"])? $_POST["item"] : "";
   $comment = isset($_POST["comment"])? $_POST["comment"] : "";

    //タグなどの禁止文字をそのまま入力されずに変換する
    $name = htmlspecialchars($name,ENT_QUOTES,"UTF-8");
    $kana = htmlspecialchars($kana,ENT_QUOTES,"UTF-8");
    $email = htmlspecialchars($email,ENT_QUOTES,"UTF-8");
    $tel = htmlspecialchars($tel,ENT_QUOTES,"UTF-8");
    $item = htmlspecialchars($item,ENT_QUOTES,"UTF-8");
    $comment = htmlspecialchars($comment,ENT_QUOTES,"UTF-8");

?>
<!doctype html>
<html>
<head>

<!-- Blade用にcsrf-tokenを追加 -->
<meta name="csrf-token" content="{{ csrf_token() }}">
@vite(['resources/css/app.css', 'resources/js/app.js'])

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<base href="/">

<link rel="stylesheet" type="text/css" href="/css/normalize.css">
<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="stylesheet" type="text/css" href="/css/test.css">


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">

</head>
<body>

<main class="nav-point"><!-- ============================== header ============================== -->
  <div class="container contact-container"><!-- コンテンツ幅指定のため -->
    <h1>CONFIRMATION<span>確認画面</span></h1>
    <form action="/send" method="post"><!-- ============================== form ============================== -->

    <!-- csrf保護のため追加 -->
    @csrf
      <input type="hidden" name="name" value = "<?php echo $name; ?>">
      <input type="hidden" name="kana" value = "<?php echo $kana; ?>">
      <input type="hidden" name="email" value = "<?php echo $email; ?>">
      <input type="hidden" name="tel" value = "<?php echo $tel; ?>">
      <input type="hidden" name="item" value = "<?php echo $item; ?>">
      <input type="hidden" name="comment" value = "<?php echo $comment; ?>">
      <dl class="dl-flex">
        <dt class="top-btn-pint">お名前<span>必須</span></dt>
        <dd>
          <span class="title-indent">姓名</span><?php echo '：' . $name; ?><br>
          <span class="title-indent">フリガナ</span><?php echo '：' . $kana; ?>
        </dd>
        <dt>ご連絡先<span>必須</span><span>いづれか1つ</span></dt>
        <dd>
          <span class="title-indent">メールアドレス</span><?php echo '：' . $email; ?><br>
          <span class="title-indent">電話番号</span><?php echo '：' . $tel; ?>
        </dd>
        <dt>お問い合わせ項目</dt>
        <dd> 
          <?php
          if($item == 'estimate'){
            echo 'ご依頼の見積もり・相談';
          } elseif ($item == 'recruit'){
            echo '採用について';
          } elseif ($item == 'product'){
            echo '製品について';
          } else {
            echo 'その他';
          }
          ?>
        </dd>
        <dt>
          <label>お問い合わせ内容</label>
        </dt>
        <dd>
        <?php echo htmlspecialchars($comment,ENT_QUOTES,"UTF-8"); ?>
        </dd>
      </dl>
      <div class="form-item">
        <p><a href="#">個人情報の取り扱い</a>についてご確認頂き、同意されましたら「同意して送信する」をクリックしてください。</p>
        <p>
          <input type="button" name="back" value="確認画面に戻る" id="back" onclick="window.history.back();">
          <input type="submit" name="send" value="同意して送信する" id="send">
        </p>
      </div>
    </form>
  </div>
</main>

</body>
</html>

