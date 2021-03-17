


<table class="table table-striped">
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
  <thead>
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">Tên sự kiện</th>
      <th scope="col" class="text-right pr-5">Số lượng vé</th>
      <th scope="col" class="text-right pr-5">Giá vé(Vnd)</th>
      <th scope="col">Ngày</th>
      <th scope="col">Thời gian bắt đầu</th>
      <th scope="col">Thể loại</th>
      <th scope="col">Trạng thái</th>
      <th scope="col" class="text-center"></th>
    </tr>
  </thead>
  <tbody>
  <?php
  function makeProductRow($event,$stt = null) {
    return '<tr class="">
    <th class="align-middle" scope="row">'.$stt.'</th>
    <td class="align-middle">'.$event->name.'</td>
    <td class="align-middle text-right pr-5">'.$event->number_ticket.'</td>
    <td class="align-middle text-right pr-5">'.number_format($event->ticket_price,0).'<sup>đ</sup>'.'</td>
    <td class="align-middle">'.$event->date.'</td>
    <td class="align-middle">'.$event->start_time.'</td>
    <td class="align-middle">'.$event->category.'</td>
    <td class="align-middle">'.$event->status.'</td>
    <td class="align-middle text-center">
      <a type="submit" class="btn btn-link" href="?controller=event&action=edit&id='.$event->id.'">Chỉnh sửa</a>
      <form class="d-inline" onsubmit="return confirm(\'Bạn có chắc muốn hủy sự kiện: `'.$event->name.'`\')" action="?controller=event&action=delete&id='.$event->id.'" method="POST">
        <button type="submit" class="btn btn-link">Hủy đăng ký</button>
      </form>
    </td>
  </tr>
    ';
  }
  foreach($event as $key => $regist) {
    echo makeProductRow ($regist, $key + 1);
  }
  ?>
  </tbody>
</table>
