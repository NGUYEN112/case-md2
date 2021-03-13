<link rel="stylesheet" href="/assets/styles/event-style.css">
<form class="container" method="POST">
    <?php
    if (isset($_SESSION["failmessage"])) {
        echo '<div class="alert alert-danger" role="alert">
                    ' . $_SESSION["failmessage"] . '
              </div>';
        $_SESSION["failmessage"] = NULL;
    }
    ?>

    <div class="head-link">
        <a class="fab-button-mid-bot btn btn-primary btn-lg" type="button" href="?controller=event&action=eventlist">Sự kiện chờ</a>
    </div>

    <div class="row">
        <div id="right_form_col" class="col-md-4">
            <div class="form-group">
                <label for="exampleFormControlInput1">Tiêu đề sự kiện</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Nghĩ tên thật oách nào.." required="" />
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Thể loại</label>
                <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                    <!-- <option value="7">Đêm nhạc</option>
                    <option value="2">Beertalks</option>
                    <option value="3">Chiếu phim</option> -->
                    <?php
                    foreach ($categories as $category) {
                        echo "
                            <option value=$category->id>$category->name</option>
                            ";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Số lượng vé</label>
                <input type="number" class="form-control" name="number_ticket" id="exampleFormControlInput1" placeholder="" />
            </div>


            <div class="form-group">
                <label for="exampleFormControlInput1">Giá vé</label>
                <input type="number" class="form-control" name="ticket_price" id="exampleFormControlInput1" placeholder="VND" />
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Ngày</label>
                <input type="date" class="form-control" name="date" id="exampleFormControlInput1" placeholder="" required />
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Thời gian bắt đầu</label>
                <input type="time" class="form-control" name="start_time" id="exampleFormControlInput1" placeholder="" required />
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="text" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Email" />
            </div>
        </div>



        <!-- <div class="col-md-5">
                <div id="choose-avatar" style="height: 344px">
                    <button type="button" onclick="input_avatar.click()" class="btn btn-sm btn-light">
                        Choose image
                    </button>
                    <input id="input_avatar" type="file" name="p_file" hidden="" />

                    
                    <input type="image" hidden="" id="avatar_preview" src="" />

                    
                    <input id="avatar_url" name="image_url" type="text" hidden="" />
                </div>
            </div> -->
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Mô tả</label>

        <textarea class="form-control" placeholder="Gửi đôi lời tới chúng tớ nào!" name="description" id="exampleFormControlTextarea1" rows="2"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
            Đăng ký
        </button>
    </div>
</form>
</div>