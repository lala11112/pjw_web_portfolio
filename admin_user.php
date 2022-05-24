<?php
include_once("./header.php");
?>
<?php
include_once("./class/admin_menu.php");
?>
<?php
include_once("./class/bootstrap.php");
?>
<?php
include_once("./class/db.php");
?>
      <h2>유저 정보</h2>
      <table class="table table-hover">
        <div class="container-fluid" style="width:500px">
          <div class="row">
            <div class="col-md-2">번호</div>
            <div class="col-md-2">아이디</div>
            <div class="col-md-2">이름</div>
            <div class="col-md-2">레벨</div>
            <div class="col-md-2">가입일</div>
            <div class="col-md-2">삭제</div>
          </div>
        </div>
      </table>

        <?php
          $sql = "select * from men order by num desc";
          $result = mysqli_query($con, $sql);
          $total_record = mysqli_num_rows($result); // 전체 회원 수

          $number = $total_record;

           while ($row = mysqli_fetch_array($result))
           {
            $num         = $row["num"];
            $id          = $row["id"];
            $name        = $row["name"];
            $level       = $row["level"];
            $regist_day  = $row["regist_day"];
        ?>
        <br></br>
        <div class="container-fluid" style="width:500px">
          <div class="row">
            <div class="col-md-2"><?=$number?></div>
            <div class="col-md-2"><?=$id?></div>
            <div class="col-md-2"><?=$name?></div>
            <div class="col-md-2"><?=$level?></div>
            <div class="col-md-2"><?=$regist_day?></div>
            <div class="col-md-2"><button type="button" onclick="location.href='./api/admin_member_delete.php?num=<?=$num?>'">삭제</button></div>
          </div>
        </div>

        <?php
           	   $number--;
           }
        ?>
        <?php
        include_once("./footer.php");
        ?>
