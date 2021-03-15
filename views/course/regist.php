<div class="container-form">
<form class="container col-6 was-validated" method="POST">
    <?php
    if (isset($_SESSION["failmessage"])) {
        echo '<div class="alert alert-danger" role="alert">
                    ' . $_SESSION["failmessage"] . '
              </div>';
        $_SESSION["failmessage"] = NULL;
    }
    if (isset($_SESSION["message"])) {
        echo "
    <div class='alert alert-succses' role='alert'>
      " . $_SESSION["message"] . "  
    </div>
    ";

        unset($_SESSION["message"]);
    }
    ?>

    <div class="form-group">
        <label for="name">Họ và tên</label>
        <input type="text" class="form-control col-12" name="full_name" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Loại nhạc cụ</label>
        <select class="form-control" name="type_course" id="exampleFormControlSelect1">
            <option value="Guitar">Guitar</option>
            <option value="Ukulele">Ukulele</option>
        </select>
    </div>
    <div class="form-group">
        <label for="price">Số điện thoại</label>
        <input type="number" class="form-control col-12" name="phone" required>
    </div>
    <div class="form-group">
        <label for="quantity">Email</label>
        <input type="text" class="form-control col-12" name="email" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            Đăng ký
        </button>
        <div class="d-inline col-3" style="float: right;">
            <a class="btn btn-primary" type="button" href="?controller=course&action=index">Trở lại</a>
        </div>
    </div>
</form>
</div>