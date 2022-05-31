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
      <h2>게시글 정보</h2>
      <table class="table table-hover">
        <div class="container-fluid" style="width:1000px">
          <div class="row">
            <div class="col-md-1">번호</div>
            <div class="col-md-1">분야</div>
            <div class="col-md-1">작성자</div>
            <div class="col-md-1">레벨</div>
            <div class="col-md-2">제목</div>
            <div class="col-md-2">소제목</div>
            <div class="col-md-1">게시일</div>
            <div class="col-md-1">수정</div>
            <div class="col-md-1">삭제</div>
          </div>
        </div>
      </table>

        <?php
          $sql = "select * from board order by num desc";
          $result = mysqli_query($con, $sql);
          $total_record = mysqli_num_rows($result); // 전체 회원 수

          $number = $total_record;

           while ($row = mysqli_fetch_array($result))
           {
            $num         = $row["num"];
            $field          = $row["field"];
            $name        = $row["name"];
            $level       = $row["level"];
            $title  = $row["title"];
            $subtitle  = $row["subtitle"];
            $regist_day  = $row["regist_day"];
        ?>
        <br></br>
        <div class="container-fluid" style="width:1000px">
          <div class="row">
            <div class="col-md-1"><?=$number?></div>
            <div class="col-md-1"><?=$field?></div>
            <div class="col-md-1"><?=$name?></div>
            <div class="col-md-1"><?=$level?></div>
            <div class="col-md-2"><?=$title?></div>
            <div class="col-md-2"><?=$subtitle?></div>
            <div class="col-md-1"><?=$regist_day?></div>
            <div class="col-md-1"><button type="button" onclick="location.href='./board_modity_form.php?num=<?=$num?>'">수정</button></div>
            <div class="col-md-1"><button type="button" onclick="location.href='./api/board_delete.php?num=<?=$num?>'">삭제</button></div>
          </div>
        </div>

        <?php
           	   $number--;
           }
        ?>
        <?php
        include_once("./footer.php");
        ?>
