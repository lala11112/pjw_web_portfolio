<?php
include_once("./class/db.php");
?>
<?php
include_once("./class/bootstrap.php");
?>
<?php
include_once("./class/chapter_list.php");
?>

<?php
  $sql = "select * from chapter order by num desc";
  $result = mysqli_query($con, $sql);
  $total_record = mysqli_num_rows($result); // 전체 챕터 수

  $number = $total_record;

   while ($row = mysqli_fetch_array($result))
   {
    $title = $row["title"];
    $subtitle = $row["subtitle"];
?>
<br></br>
<div class="container-fluid" style="width:500px">
  <div class="row">
    <h2><?=$title?> <small><?=$subtitle?></small></h2>
    <div class="col-md-7"><button type="button" class="btn btn-info" onclick="location.href='./<?=$belongingflie?>.php'"><?=$title?> 자세히 알아보기</button></div>
  </div>
</div>

<?php
   	   $number--;
   }
?>
<h2>메인 페이지 목차니까 멋지게 꾸며야함 잊지마 미래의 나! ↑<h2>
