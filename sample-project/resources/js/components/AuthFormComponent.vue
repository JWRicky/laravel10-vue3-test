<template>
  <div class="container contact-container">
    <h1>CONTACT<span>お問い合わせ</span></h1>
    <form action="/confirm" method="post">

      <!-- csrfトークンを追加 -->
      <input type="hidden" name="_token" :value="csrf">

      <dl class="dl-flex">
        <!-- お名前 -->
        <dt class="top-btn-pint">お名前<span>必須</span></dt>
        <dd>
          <label for="name_field">姓名</label>
          <input id="name_field" type="text" name="name" value="" size="40" class="input-style" placeholder="例）山田太郎">
          <label for="kana_field">フリガナ</label>
          <input id="kana_field" type="text" name="kana" value="" class="input-style" placeholder="例）ヤマダタロウ">
        </dd>
        <dt>ご連絡先<span>必須</span><span>いづれか1つ</span></dt>
        <dd>
          <label for="email_field">メールアドレス</label>
          <input id="email_field" type="email" name="email" value="" class="input-style"
            placeholder="例）your-email@example.com">
          <label for="tel">電話番号</label>
          <input id="tel" type="tel" name="tel" value="" class="input-style" placeholder="例）03-1234-5678">
        </dd>
        <dt>お問い合わせ項目</dt>
        <dd><span class="radio-width">
            <label class="radio-minwidth">
              <input type="radio" name="item" value="estimate">
              ご依頼の見積もり・相談</label>
          </span> <span class="radio-width">
            <label class="radio-minwidth">
              <input type="radio" name="item" value="recruit">
              採用について</label>
          </span> <span class="radio-width">
            <label class="radio-minwidth">
              <input type="radio" name="item" value="product">
              製品について</label>
          </span> <span class="radio-width">
            <label class="radio-minwidth">
              <input type="radio" name="item" value="other">
              その他</label>
          </span>
          <!-- <label>の中に<input>がある場合は関連付けされているので"id""for"は要らない -->
        </dd>
        <dt>
          <label for="comment">お問い合わせ内容</label>
        </dt>
        <dd>
          <textarea id="comment" name="comment" cols="40" rows="4"></textarea>
        </dd>
      </dl>

      <div class="form-item">
        <!-- <p><a href="#">個人情報の取り扱い</a>についてご確認頂き、同意されましたら「同意して送信する」をクリックしてください。</p> -->
        <p>
          <input type="submit" name="submit" value="確認画面に進む" id="submit">
        </p>
      </div>

    </form>
  </div>
</template>

  
<script>

export default {
  name: 'csrf-form',
  props: {
    csrf: {
      type: String,
      required: true,
    }
  },
  data() {
    return {
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    }
  },
};

</script>
  
  