<?php
if (isset($_SESSION["failmessage"])) {
    echo '<div class="alert alert-danger" role="alert">
                    ' . $_SESSION["failmessage"] . '
              </div>';
    $_SESSION["failmessage"] = NULL;
}
?>

<form method="POST">
    <div class="row align-input">
        <div id="right_form_col" class="col-md-4">
            <div class="form-group">
                <label for="exampleFormControlInput1">Tên đồ uống</label>
                <input value="<?php echo $drinks->name ?>" type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Tiêu đề" required />
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Url ảnh</label>
                <input type="text" class="form-control" name="image_url" id="exampleFormControlInput1" placeholder="" value="<?php echo $drinks->image_url ?>" />
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Giá</label>
                <input type="number" class="form-control" name="price" id="exampleFormControlInput1" placeholder="VND" value="<?php echo $drinks->price ?>" />
            </div>
        </div>
    </div>

    <div class="form-group sumid-button">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
            Chỉnh sửa xong!
        </button>
    </div>
</form>