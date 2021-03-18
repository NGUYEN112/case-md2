<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="assets/styles/material-dashboard.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/styles/admin-layout.css">
    <link rel="stylesheet" href="/assets/styles/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white">
            <div class="logo">
                <a href="?controller=admin&action=dashboard" class="simple-text logo-normal">
                    Dashboard
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active item-content">
                        <a class="nav-link" href="?controller=admin&action=dashboard">
                            <i class="fas fa-home"></i> Trang chủ
                        </a>
                    </li>
                    <li class="nav-item active item-content">
                        <a class="nav-link" href="?controller=admin&action=drinks">
                            <i class="fas fa-coffee"></i> Đồ uống
                        </a>
                    </li>

                    <li class="nav-item active item-content">
                        <a class="nav-link" href="?controller=admin&action=event">
                            <i class="fas fa-calendar-alt"></i> Sự kiện chờ
                        </a>
                    </li>

                    <li class="nav-item active item-content">
                        <a class="nav-link" href="?controller=admin&action=course">
                            <i class="fas fa-guitar"></i> Đăng ký học
                        </a>
                    </li>

                    <li class="nav-item active item-content">
                        <a class="nav-link" href="?controller=admin&action=user">
                            <i class="far fa-user"></i> Danh sách tài khoản
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top nav-styles ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">
                                    <i class="material-icons">notifications</i> Notifications
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-cog"></i>
                                    </button>
                                    <div class="dropdown-menu custom-dropdown custom-size" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="?controller=admin&action=admin" style="padding-left: 14px;"><i class="fas fa-user"> TÀI KHOẢN</i></a>
                                        <form action="?controller=auth&action=logOut" method="POST">
                                            <a class="dropdown-item nav-link" onclick="confirm('Bạn muốn đăng xuất?') && this.parentNode.submit();" href="javascript:;"><i class="fas fa-sign-out-alt"> đăng xuất</i></a>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content dashboard">
                <div class="container-fluid">
                    <?php echo $content ?>
                </div>
            </div>
            <!-- <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            <a href="https://www.creative-tim.com" target="_blank">Creative Nguyên</a> for case study module2 PHP.
          </div>
        </div>
      </footer> -->
        </div>
    </div>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- link icon awesome -->
<script src="https://kit.fontawesome.com/fd80de56a4.js" crossorigin="anonymous"></script>