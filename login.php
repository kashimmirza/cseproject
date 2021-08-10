<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
  body{
    background-image: url("bg1.jpg");
    height: 100%
    width: 100%
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }
  .container{
    margin-top: 25%;
    margin-bottom: 25%;
    width: 25%;
    height: 60%;
    background-color: #217aa8;
    padding: 30px;
    box-shadow: 0px 1px 36px 5px rgba(0, 0, 0, 0.28);
    border-radius: 5px;
    }
    .form_btn{
      background: #fb641b;
      box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);
      border: none;
      color: #fff;
      width: 100%;
    }
    .text-color-reset{

      text-align: center;
      margin-top: 10px;
      color: black;
    }
</style>
<body>
  <div class="container">
  <div class="row">

    <div class="col-md-12">
      <div class="login_form">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" class="form_btn btn btn-primary">Login</button>
        </form>
        <p ><br><a href="forgot_password.php"class="text-color-reset">Forgot Password?</a> </p>
        <br>
        <p>Don't have an account? <a href="signup.php" class="text-color-reset">Sign Up</a> </p>
      </div>

  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
