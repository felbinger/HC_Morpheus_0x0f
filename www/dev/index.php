<?php
  $conn = new mysqli("hc-db", "0x0f", "0RQ7wl51Semdbo7UhoV2", "wordpress");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $_SESSION["authorized"] = "False";
  if(isset($_POST["username"]) && isset($_POST["password"])) {
    $res = mysqli_query($conn, "SELECT password FROM `devlopment` WHERE username = '" . $_POST["username"] . "' AND password = '" . hash("sha512", $_POST["password"]) . "';");
    if (mysqli_num_rows($res) > 0) {
      while ($row = mysqli_fetch_assoc($res)) {
        $_SESSION["authorized"] = "True";
        setcookie('isAdmin', "False");
        header("Location: home.php");
        die();
      }
    } else {
      $error = 1;
    }
  }
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dev Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js" integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" integrity="sha256-AIodEDkC8V/bHBkfyxzolUMw57jeQ9CauwhVW6YJ9CA=" crossorigin="anonymous" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div style="margin-top: 25%;" class="panel panel-default">
            <div class="panel-heading">
                <h3 align="center" class="panel-title">Development Login</h3>
            </div>
            <div class="panel-body">
              <form method="POST">
                <fieldset>
                  <?php
                    if ($error === 1) {
                      echo '<div class="alert alert-danger"><span class="fa fa-info-circle"></span> Invalid Credentials </div>';
                    }
                  ?>
                  <div class="form-group">
                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                  </div>
                  <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
