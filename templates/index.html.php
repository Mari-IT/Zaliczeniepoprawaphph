<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
</head>
<body>

<form action="/secret.php" method="post">
    <input type="text" name="login" placeholder="login">
    <input type="password" name="pass" placeholder="password">
    <button type="submit">Log in</button>
</form>

</body>
</html>

</head>
<body>

<form action="/products" method="post">
    <input type="text" name="login" placeholder="login">
    <input type="password" name="pass" placeholder="password">
    <button type="submit">Log in</button>
<!--<form action="/products" method="post">-->
<!--    <input type="text" name="login" placeholder="login">-->
<!--    <input type="password" name="pass" placeholder="password">-->
<!--    <button type="submit">Log in</button>-->
<!---->
<!--</form>-->

<!--<a href="/resend">-->
<!--    <button>Resend Pass</button></a>-->
<?php if ($success == true): ?>
    <div class="success">Thank you! all data correct!</div>
<?php endif ?>
<form action="" method="post">
    Text: <input type="text" name="form[text]"><br>
    Grade: <input type="text" name="form[grade]"><br>
    <input type="submit" value="Submit">
</form>

<<a href="/resend">
    <button>Resend Pass</button></a>

</body>
</html>
