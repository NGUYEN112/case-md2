<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- <link rel="stylesheet" href="/assets/styles//bootstrap.min.css" />
  <link rel="stylesheet" href="/assets/styles/font.css" /> -->
  <link rel="stylesheet" href="/assets/styles/auth-styles.css" />
  <title>Login</title>
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h3>Đăng nhập</h3>
          <div class="d-flex justify-content-end social_icon">
            <a href="https://www.facebook.com/phuicaphe174"><span><i class="fab fa-facebook"></i></span></a>
            <a href="https://www.instagram.com/accounts/login/?next=/quanphui/%3Figshid%3D18m7kke07ybut"><span><i class="fab fa-instagram"></i></span></a>
            <span><i class="fab fa-twitter"></i></span>
          </div>
          <p class="mb-4 error-login">
              <?php
              echo $_SESSION["invalid_credentials"] ?? null;
              unset($_SESSION["invalid_credentials"]);
              ?>
            </p>
        </div>
        <div class="card-body">
          <form method="POST">
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Email" name="email">

            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
            </div>
            <div class="row align-items-center remember">
              <input type="checkbox">Nhớ mật khẩu
            </div>
            <div class="form-group">
              <input type="submit" value="Đăng nhập" class="btn float-right login_btn">
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center">
            <a href="#">Quên mật khẩu?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="container-display"> -->
  <!-- <div class="d-lg-flex half">
    <div class="bg order-1 order-md-1" style="background-image: url('/assets/images/img7.jpg')">
    </div>
    <div class="contents order-1 order-md-2">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Đăng Nhập</h3>
            <p class="mb-4 text-danger">
              <?php
              echo $_SESSION["invalid_credentials"] ?? null;
              unset($_SESSION["invalid_credentials"]);
              ?>
            </p>
            <form method="POST">
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="text" class="form-control" placeholder="...@email.com" id="email" name="email" />
              </div>
              <div class="form-group last mb-3">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" placeholder="Mật khẩu" id="password" name="password" />
              </div>
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Nhớ mật khẩu</span>
                  <input type="checkbox" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Quên mật khẩu</a></span>
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-primary1" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- </div> -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>


</html>