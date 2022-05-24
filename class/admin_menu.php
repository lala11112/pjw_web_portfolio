<?php
include_once("./class/bootstrap.php");
?>
<?php
  if($userlevel == 9){
?>
<h3>관리자 모드<h3>
  <div class="container-fluid">
    <div class="row">
      <br></br>
      <div class="col-md-7"><a href="../admin_user.php" class="btn btn-primary btn-lg active" role="button">유저 정보 보기</a></div>
      <br></br>
      <div class="col-md-7"><a href="../admin_chapter_make_form.php" class="btn btn-primary btn-lg active" role="button">목차 생성</a></div>
      <br></br>
      <div class="col-md-7"><a href="../admin_chapter_update_form.php" class="btn btn-primary btn-lg active" role="button">목차 수정</a></div>
      <br></br>
      <div class="col-md-7"><a href="../index.php" class="btn btn-primary btn-lg active" role="button">메인 페이지로 돌아가기</a></div>
      <br></br>
    </div>
  </div>
  <?php
    }
  ?>
