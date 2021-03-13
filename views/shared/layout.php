<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quán Phủi</title>
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="stylesheet" href="/assets/styles/bootstrap.min.css" />
    <link rel="icon" type="image/jpg" href="/assets/images/logo-phui_nonebg_x1.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="?controller=home&action=welcome"><img class="logo" src="/assets/images/logo-phui_nonebg_x1.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
            require_once("model/user.php");
        ?>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto   ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="?controller=home&action=welcome">Phủi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=drinks&action=index">Đồ uống</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=event&action=index">Sự kiện</a>
                </li>
                <li class="nav-item dropdown mr-auto">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Khóa học
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?controller=course&action=guitar">Guitar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?controller=course&action=uku">Ukulele</a>
                    </div>
                </li>

            </ul>
            <div class="nav-item dropdown contact navbar-nav">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-users"></i>
                    Contact
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#FB"> <i class="fab fa-facebook-f"></i> Facebook</a>
                    <a class="dropdown-item" href="#Ig"> <i class="fab fa-instagram"></i> Instagram</a>
                    <a class="dropdown-item" href="#Tw"> <i class="fab fa-twitter"></i> Twitter</a>
                </div>
            </div>
            <form action="?controller=auth&action=logOut" method="POST">
                <!-- <li class="nav-item navbar-nav"> -->
                    <a class="nav-link" onclick="confirm('Bạn muốn đăng xuất?') && this.parentNode.submit();" href="javascript:;"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                <!-- </li> -->
            </form>
        </div>
    </nav>

    <div>
        <?php echo $content; ?>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- link icon awesome -->
<script src="https://kit.fontawesome.com/fd80de56a4.js" crossorigin="anonymous"></script>
</html>

