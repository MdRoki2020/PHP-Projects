
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <!-- Metadata -->
  <meta charset="utf-8" />
  <meta name="author" content="Jacob Strieb" />
  <meta name="description" content="Password protect links using AES in the browser." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />

  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

  <title>Link Lock - Password-protect links</title>

  <!-- Styles -->
  <link rel="stylesheet" href="style.css" type="text/css" />

  <!-- Scripts -->
  <script type="text/javascript" src="b64.js"></script>
  <script type="text/javascript" src="api.js"></script>
  <script type="text/javascript" src="index.js"> </script>


  <style>

  body {
  width: 600px;
  margin: auto;
    margin-top: auto;
  margin-top: 43px;
  font-family: sans-serif !important;
}
input {
  padding: 11px 221px;
  margin-top: 5px;
}
#unlockbutton {
  padding: 11px;
  margin-top: 15px;
  background: rgb(95, 158, 160);
  border: 0.5px solid white;
  border-radius: 5px;
  border: 0.5px solid white;
  color: white;
  font-weight: bold;
  white-space: nowrap;
}
.passwordlebel {
  font-size: 14px;
}

.text-center.text-danger.font-weight-bold {
    color: red;
    font-size: medium;
    text-align: center;
}
</style>
</head>

<body>


  <div class="form" >
    <p>Please enter the password to unlock the link.</p>
    <p id="hint">Hint: Type Your Passport ID</p>

    <hr />

    <?php
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
    }
    ?>

<div class="text-center text-danger font-weight-bold">
    <?php
    if(isset($_REQUEST['wrongUser'])){
        echo 'Password Wrong';
    }
    ?>
</div>

    <form action="checkCore.php" method="post">
    <label class="passwordlebel" for="password">PASSWORD</label><br/>
    <input type="password" id="password" name="password" autofocus /><br/>
    <input type="hidden" value="<?php echo $id; ?>" id="id" name="id" /><br/>
    <button id="unlockbutton">Unlock link</button>
    </form>
  </div>

  <!-- Display errors in a big red box -->
</body>

</html>
