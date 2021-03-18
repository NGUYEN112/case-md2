<h2>Danh sách người dùng</h2>
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
<table class="table table-bordered">
  <thead class="thead">
    <tr>
      <th scope="col">Tên</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col" class="text-center"></th>
    </tr>
  </thead>
  <tbody>
  <?php
  function makeProductRow($users,$stt = null) {
    return '<tr class="">
    <td class="align-middle">'.$users->full_name.'</td>
    <td class="align-middle">'.$users->email.'</td>
    <td class="align-middle">'.$users->password.'</td>
    <td class="align-middle text-center">
      <a type="submit" class="btn btn-link" href="?controller=admin&action=edituser&id='.$users->id.'">Chỉnh sửa</a>
    </td>
  </tr>
    ';
  }
  foreach($users as $key => $user) {
    if($user->rate != 0) {
    echo makeProductRow ($user, $key + 1);
    }
  }
  ?>
  </tbody>
</table>