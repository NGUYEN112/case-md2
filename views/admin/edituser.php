<form class="container" method="POST">

    <?php
    if (isset($_SESSION["failmessage"])) {
        echo '<div class="alert alert-danger" role="alert">
                    ' . $_SESSION["failmessage"] . '
              </div>';
        $_SESSION["failmessage"] = NULL;
    }
    ?>

    <div class="row">
        <div id="right_form_col" class="col-md-4">
            <div class="form-group">
                <label for="exampleFormControlInput1">Tên</label>
                <input value="<?php echo $users->full_name ?>" type="text" class="form-control" name="full_name" id="exampleFormControlInput1" placeholder="Tiêu đề" required />
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="text" class="form-control" name="email" id="exampleFormControlInput1" placeholder="" value="<?php echo $users->email ?>" />
            </div>


            <div class="form-group">
                <label for="exampleFormControlInput1">Mật khẩu</label>
                <input type="number" class="form-control" name="password" id="exampleFormControlInput1" placeholder="" value="<?php echo $users->password ?>" />
            </div>
        </div>

    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
            Chỉnh sửa tài khoản!
        </button>
    </div>
</form>