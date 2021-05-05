<!DOCTYPE html>
<html>
<head>
    <title></title>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<?php
session_start();
error_reporting(0);
        $user = array(
                        "user" => "Heny",
                        "pass"=>"heny"            
                );
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']){
        $_SESSION["username"] = $_POST['username']; 
       header("Location: index.php");

    } else {
        display_login_form();
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
}    
else { 
    display_login_form();
}
function display_login_form(){ ?>
    <div class="container text-center">
        <br>
        <br>
        <br>
        <h2>LOGIN</h2>
        <br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
  <label for="exampleFormControlInput1" class="form-label">Username :</label>
  <input type="text" class="form-control- sm" name="username" >
    </div>
  <div class="container text-center">
  <label for="exampleFormControlInput1" class="form-label">Password :</label>
  <input type="password" class="form-control-sm" name="password" >
</div>
<div class="container text-center">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
</form>
<div class="container text-center">
  <a class="dropdown-item" href="regis.php">Belum memiliki akun? Daftar</a>
</div>
</div>
</div>

    </form>    
<?php } ?>
 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
</html>
