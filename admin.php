<?php
include_once("./header.php");
?>
<?php
  if($userlevel == 9){
?>
<h3>관리자 모드<h3>
<li><a href="member_form.php">유저 정보 보기</a> </li>
<li><a href="member_form.php">관리자 게시판 작성</a> </li>
<li><a href="member_form.php">관리자 게시판 수정</a> </li>






  <?php
    }
  ?>
<?php
include_once("./footer.php");
?>
