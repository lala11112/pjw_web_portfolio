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
      <h2>목차 수정</h2>
      <table class="table table-hover">
        <div class="container-fluid" style="width:900px">
          <div class="row">
            <div class="col-md-3">번호</div>
            <div class="col-md-3">제목</div>
            <div class="col-md-3">소제목</div>
            <div class="col-md-3">수정</div>
          </div>
        </div>
      </table>

        <?php
          $sql = "select * from chapter order by num desc";
          $result = mysqli_query($con, $sql);
          $total_record = mysqli_num_rows($result); // 전체 회원 수

          $number = $total_record;

           while ($row = mysqli_fetch_array($result))
           {
            $num = $row["num"];
            $title = $row["title"];
            $subtitle = $row["subtitle"];
        ?>
        <br></br>
        <form method="post" action="./api/admin_chapter_update.php?num=<?=$num?>">
          <div class="container-fluid" style="width:900px">
            <div class="row">
              <div class="col-md-3"><?=$number?></div>
              <div class="col-md-3"><input type="text" name="title" value="<?=$title?>"></div>
              <div class="col-md-3"><input type="text" name="subtitle" value="<?=$subtitle?>"></div>
              <span class="col-md-3"><button type="submit">수정</button></span>
            </div>
          </div>
    		</form>

        <?php
           	   $number--;
           }
        ?>
        <?php
        include_once("./footer.php");
        ?>
