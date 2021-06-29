<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <style>
    p {
      font-size: "16px";
    }
  </style>
</head>

<body>
  <h1>トップページ</h1>
  <table>
    <form action="/add" method="POST">
      @csrf
      <p>氏名</p>
      <input type="text" name="name">
      <p>メールアドレス
      </p>
      <input type="text" name="email">
      <p>
        <input type="submit" value="送信する">
      </p>
    </form>
  </table>
</body>

</html>