<?php

  require_once('../../setting/config.php');
  require_once('../../setting/functions.php');

  session_start();

  if (!empty($_SESSION['me'])) {
    header('Location: ../../');
    exit;
  }

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">

    <title>ログイン</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="/">
          Hellowork Admin Login
        </a>
      </div>

      <div class="login-box-body">
        <p class="login-box-msg">ログインしてください。</p>

        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="user_id" placeholder="user id" autofocus="autofocus">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="ログイン">
            </div>
            <div class="col-xs-4"></div>
          </div>
        </form>
      </div>
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.2.3.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

  </body>
</html>
