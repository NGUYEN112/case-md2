<h2>Danh sách đăng ký khóa học</h2>
<table class="table">
  <thead class="thead">
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Điện thoại</th>
      <th scope="col">Email</th>
      <th scope="col">Nhạc cụ</th>
      <th scope="col" class="text-center"></th>
    </tr>
  </thead>
  <tbody>
  <?php
  function makeProductRow($course,$stt = null) {
    return '<tr class="">
    <th class="align-middle" scope="row">'.$stt.'</th>
    <td class="align-middle">'.$course->full_name.'</td>
    <td class="align-middle">'.$course->phone.'</td>
    <td class="align-middle">'.$course->email.'</td>
    <td class="align-middle">'.$course->type_course.'</td>
  </tr>
    ';
  }
  foreach($course as $key => $course) {
    echo makeProductRow ($course, $key + 1);
  }
  ?>
  </tbody>
</table>