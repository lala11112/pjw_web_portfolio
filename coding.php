<?php
include_once("./header.php");
?>
<section>
   	<div id="board_box">
	    <h3>
	    	게시글 목록
		</h3>
	    <ul id="board_list">
				<li>
					<span class="col1">번호</span>
					<span class="col2">제목</span>
					<span class="col3">글쓴이</span>
					<span class="col4">첨부</span>
					<span class="col5">등록일</span>
				</li>
<?php


	$sql = "select * from board order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수


	$number = $total_record;

   for ($i=0; $i < $total_record; $i++)
   {
      mysqli_data_seek($result, $i);
      // 가져올 레코드로 위치(포인터) 이동
      $row = mysqli_fetch_array($result);
      // 하나의 레코드 가져오기
	  $num         = $row["num"];
	  $id          = $row["id"];
	  $name        = $row["name"];
	  $title     = $row["title"];
      $regist_day  = $row["regist_day"];
?>
				<li>
					<span class="col1"><?=$number?></span>
					<span class="col2"><a href="board_view.php?num=<?=$num?>"><?=$title?></a></span>
					<span class="col3"><?=$name?></span>
					<span class="col5"><?=$regist_day?></span>
				</li>
<?php
   	   $number--;
   }
   mysqli_close($con);

?>

	</div> <!-- board_box -->
</section>
<?php
include_once("./footer.php");
?>
