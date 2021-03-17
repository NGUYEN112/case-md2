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
          <h3>Đăng ký</h3>
          <!-- <div class="d-flex justify-content-end social_icon">
            <a href="https://www.facebook.com/phuicaphe174"><span><i class="fab fa-facebook"></i></span></a>
            <a href="https://www.instagram.com/accounts/login/?next=/quanphui/%3Figshid%3D18m7kke07ybut"><span><i class="fab fa-instagram"></i></span></a>
            <span><i class="fab fa-twitter"></i></span>
          </div> -->
        </div>
        <div class="card-body">
          <form method="POST">
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-signature"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Tên đầy đủ" name="full_name">
            </div>
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
              <input type="number" class="form-control" name="rate" value="<?php echo '1' ?>" hidden>
            </div>
            <div class="form-group">
              <input type="submit" value="Đăng ký" class="btn float-right login_btn">
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center">
            <a style="color: white;">Hoặc đăng nhập với</a>
          </div>
          <div class="d-flex justify-content-center">
            <a href="#facebook" type="button" class="btn-floating btn-fb btn-sm mr-1">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#twitter" type="button" class="btn-floating btn-tw btn-sm mr-1">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#linkedin" type="button" class="btn-floating btn-li btn-sm mr-1">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#github" type="button" class="btn-floating btn-git btn-sm">
              <i class="fab fa-github"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>


</html>