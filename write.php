<!-- DB 데이터 가져오기 -->
<?php


?>





<!-- 화면 출력 -->
<?php require_once ('_header.php'); ?>

<form class="form-horizontal" method="post" action="/board/do_write.php">
  <div class="form-group">
    <label class="col-sm-2 control-label">제목</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" placeholder="제목">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">내용</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="content" rows="8"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="is_secret" value="Y"> 비공개
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">작성</button>
    </div>
  </div>
</form>

<?php require_once ('_footer.php'); ?>