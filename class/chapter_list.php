<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/class/db.php";
?>
<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/class/bootstrap.php";
?>
<?php
  $sql = "select * from chapter order by num desc";
  $result = mysqli_query($con, $sql);
  $total_record = mysqli_num_rows($result); // 전체 챕터 수

  $number = $total_record;
?>
