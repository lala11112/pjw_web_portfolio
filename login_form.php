<?php
include_once("./header.php");
?>
<?php
include_once("./class/bootstrap.php");
?>

<script>
   function check_input()
   {
      if (!document.login_form.id.value) {
          alert("아이디를 입력하세요!");
          document.member_form.id.focus();
          return;
      }

      if (!document.login_form.pass.value) {
          alert("비밀번호를 입력하세요!");
          document.member_form.pass.focus();
          return;
      }

      document.login_form.submit();
   }

</script>
  <div id ="login_box">
    <div id ="login_title">
      <span>로그인</span>
    </div>
    <div id ="login_form" style="width:300px">
      <form name = "login_form" method="post" action="./api/login.php">
        <div class="row">
          <div class="col-xs-4">
            <input type="text" class="form-control" name="id" placeholder="아이디">
          </div>
          <div class="col-xs-4">
            <input type="password" class="form-control" id="pass" name="pass" placeholder="비밀번호">
          </div>
        </div>
        <input class="btn btn-primary btn-lg btn-block" type="button" value="로그인하기" onclick="check_input()"/>&nbsp;
    </div>
  </div>
<?php
include_once("./footer.php");
?>
