<?php
if (isset($_SESSION["message"])) {
    echo "
    <div class='alert alert-succses' role='alert'>
      " . $_SESSION["message"] . "  
    </div>
    ";

    unset($_SESSION["message"]);
}
?>
<form action="" method="post">
    <table class="table table-bordered"">
        <div>
            <tr>
                <th scope=" col">Tên sự kiện</th>
        <td>
            <input type="text" name="name" value="<?php echo $regist->name ?>">
        </td>
        </tr>
        <tr>
            <th>
                Số lượng vé
            </th>
            <td><input type="text" name="number_ticket" value="<?php echo $regist->number_ticket ?>"></td>
        </tr>

        <tr>
            <th scope="col">Giá vé</th>
            <td><input type="text" name="ticket_price" value="<?php echo $regist->ticket_price ?>"></td>
        </tr>

        <tr>
            <th scope="col">Ngày</th>
            <td><input type="text" name="date" value="<?php echo $regist->date ?>"></td>
        </tr>

        <tr>
            <th scope="col">Thời gian bắt đầu</th>
            <td><input type="text" name="start_time" value="<?php echo $regist->start_time ?>"></td>
        </tr>

        <tr>
            <th scope="col">Thể loại sự kiện</th>
            <td><input type="text" name="category_id" value="<?php echo $regist->category_id ?>"></td>
        </tr>

        <tr>
            <th scope="col">Thể loại sự kiện</th>
            <td><input type="text" name="email" value="<?php echo $regist->email ?>"></td>
        </tr>

        <tr>
            <th scope="col">Mô tả</th>
            <td><input type="text" name="description" value="<?php echo $regist->description ?>"></td>
        </tr>
        <tr class="button-sub">
            <th class="button-sub">
                <div>
                    <button type="submit" class="" name="status" value="<?php echo 'Đã Duyệt' ?>">
                        Chấp nhận
                    </button>
                </div>
            </th>
            <td class="button-sub">
                <div>
                    <button type="submit" class="" name="status" value="<?php echo 'Từ chối' ?>">
                        Không chấp nhận
                    </button>
                </div>
            </td>
        </tr>
        </div>


</form>


</table>