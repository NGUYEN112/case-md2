<h2>Danh sách sự kiện</h2>

<table class="table table-bordered"">
  <thead class="thead">
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">Tên sự kiện</th>
      <th scope="col">Ngày</th>
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
    <td class="align-middle">'.$event->date.'</td>
    <td class="align-middle">'.$event->category.'</td>
    <td class="align-middle">'.$event->status.'</td>
    <td class="align-middle text-center">
      <a type="submit" class="btn btn-link" href="?controller=admin&action=eventdetail&id='.$event->id.'">Xem chi tiết</a>
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