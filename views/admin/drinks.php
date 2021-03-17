
<table class="table table-striped">
<thead class="thead-dark">
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">Tên đồ uống</th>
      <th scope="col" class="text-right pr-5">Giá(Vnd)</th>
      <th scope="col">Đường dẫn ảnh</th>
      <th scope="col" class="text-center"></th>
    </tr>
  </thead>
  <tbody>
  <?php
  function makeProductRow($drinks,$stt = null) {
    return '<tr class="">
    <th class="align-middle" scope="row">'.$stt.'</th>
    <td class="align-middle">'.$drinks->name.'</td>
    <td class="align-middle text-right pr-5">'.number_format($drinks->price,0).'<sup>đ</sup>'.'</td>
    <td class="align-middle">'.$drinks->image_url.'</td>
    <td class="align-middle text-center">
      <a type="submit" class="btn btn-link" href="?controller=admin&action=editdrinks&id='.$drinks->id.'">Chỉnh sửa</a>
      <form class="d-inline" onsubmit="return confirm(\'Bạn có chắc muốn bỏ đồ uống: `'.$drinks->name.'`\')" action="?controller=event&action=delete&id='.$drinks->id.'" method="POST">
        <button type="submit" class="btn btn-link">Bỏ</button>
      </form>
    </td>
  </tr>
    ';
  }
  foreach($drinks as $key => $drink) {
    echo makeProductRow ($drink, $key + 1);
  }
  ?>
  </tbody>
  </table>
  