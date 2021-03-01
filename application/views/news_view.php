<div style="text-align:center;">
<h1>Новости</h1>
Все данные на этой странице являются вымышленными, поэтому даже <br>
не пытайтесь перейти по приведенным ссылкам и др.
</div>
<hr>
<?php
if (isset($_SESSION['status']))
{
  if($_SESSION['status'] == '2')
  {
  ?>
  <div class="text-center container col-6">
    <h4>Добро пожаловать <p class="text-danger"><?php echo $_SESSION['login']; ?></p></h4>
  </div>
  <form method="post" action="/news/newsadd">
    <div class="container col-2 text-center">
      <input type="submit" class="form-control btn btn-info" name="add"  value="Добавить новость">
    </div>
    <br>
    <div class="container table-dark" style = "border:solid #333A40 1px; border-radius: 10px; padding:18px;">
      <input type="hidden" class="form-control" value='<?php echo $row['id']+1; ?>' name="tbladd">
      <input placeholder="Введите название статьи" type="text" name="head" class="form-control container col-4">
      <input type="hidden" name="data" value="<?php echo date("Y-m-d"); ?>">
      <h6> <?php echo date("Y-m-d"); ?></h6>
      <hr>
      <textarea placeholder="Введите содержание статьи" type="text" name="info" class="form-control" id="exampleFormControlTextarea1" rows="8" ></textarea>
      <hr>
      <h6><?php echo $_SESSION['login']; ?></h6>
    </div>
  </form>
  <br>
  <?php foreach ($data as $row){ ?>
      <div class="container table-dark" style = "border:solid #333A40 1px; border-radius: 10px; padding:18px;">
        <form method="post" class="col-fluid" action="/news/newsedit">
          <input type="hidden" class="form-control" value='<?php echo $row['id']; ?>' name="tbldel">
          <a style = "text-decoration: none;" href="/news/Page/?
        id=<?php echo $row['id'];?>
        &head=<?php echo $row['head'];?>
        &Data=<?php echo $row['Data'];?>
        &author=<?php echo $row['author'];?>
        &info=<?php echo $row['info'];?>">
        <h4> <?php echo $row['head']; ?></h4></a>
          <input type="text" name="head" class="form-control" value='<?php echo $row['head']; ?>'>
          <br>
          <h6> <?php echo $row['Data']; ?></h6>
          <hr>
          <textarea type="text" name="info" class="form-control" id="exampleFormControlTextarea1" rows="8" ><?php echo $row['info']; ?></textarea>
          <hr>
          <h6><?php echo $row['author']; ?></h6>
          <input type="submit" class="form-control btn btn-info" value="Изменить">
        </form>
        <br>
        <form method="post" class="col-fluid" action="/news/newsdel">
          <input type="hidden" class="form-control" value='<?php echo $row['id']; ?>' name="tbldel">
          <input type="submit" class="form-control btn btn-danger"  value="Удалить"  >
        </form>
      </div>
      <br>
  <?php
    }
  }else if($_SESSION['status'] == '1'){
  ?>
  <div class="text-center container col-6">
    <h4>Добро пожаловать <p class="text-primary"><?php echo $_SESSION['login']; ?></p></h4>
  </div>
  <form method="post" action="/news/newsadd">
    <div class="container col-2 text-center">
      <input type="submit" class="form-control btn btn-info" name="add"  value="Добавить новость">
    </div>
    <br>
    <div class="container table-dark" style = "border:solid #333A40 1px; border-radius: 10px; padding:18px;">
      <input type="hidden" class="form-control" value='<?php echo $row['id']+1; ?>' name="tbladd">
      <input placeholder="Введите название статьи" type="text" name="head" class="form-control container col-4">
      <input type="hidden" name="data" value="<?php echo date("Y-m-d"); ?>">
      <h6> <?php echo date("Y-m-d"); ?></h6>
      <hr>
      <textarea placeholder="Введите содержание статьи" type="text" name="info" class="form-control" id="exampleFormControlTextarea1" rows="8" ></textarea>
      <hr>
      <h6><?php echo $_SESSION['login']; ?></h6>
    </div>
  </form>
  <br>
  <?php foreach ($data as $row){ ?>
        <?php if ($_SESSION['login'] == $row['author']) {?>
                    <div class="container table-dark" style = "border:solid #333A40 1px; border-radius: 10px; padding:18px;">
                    <form method="post" class="col-fluid" action="/news/newsedit">
                      <input type="hidden" class="form-control" value='<?php echo $row['id']; ?>' name="tbldel">
                      <a style = "text-decoration: none;" href="/news/Page/?
                    id=<?php echo $row['id'];?>
                    &head=<?php echo $row['head'];?>
                    &Data=<?php echo $row['Data'];?>
                    &author=<?php echo $row['author'];?>
                    &info=<?php echo $row['info'];?>">
                      <h4> <?php echo $row['head']; ?></h4></a>
                      <div class="col-3 text-left">
                      <input type="text" name="head" class="form-control" value='<?php echo $row['head']; ?>'>
                      </div>
                      <br>
                      <h6> <?php echo $row['Data']; ?></h6>
                      <hr>
                      <textarea type="text" name="info" class="form-control" id="exampleFormControlTextarea1" rows="8" ><?php echo $row['info']; ?></textarea>
                      <hr>
                      <h6><?php echo $row['author']; ?></h6>
                      <input type="submit" class="form-control btn btn-info" value="Изменить">
                    </form>
                    <br>
                    <form method="post" class="col-fluid" action="/news/newsdel">
                      <input type="hidden" class="form-control" value='<?php echo $row['id']; ?>' name="tbldel">
                      <input type="submit" class="form-control btn btn-danger"  value="Удалить"  >
                    </form>
                    </div>
                    <br>
          <?php }else{ ?>
        <div class="container table-dark" style = "border:solid #333A40 1px; border-radius: 10px; padding:18px;">
          <a style = "text-decoration: none;" href="/news/Page/?
        id=<?php echo $row['id'];?>
        &head=<?php echo $row['head'];?>
        &Data=<?php echo $row['Data'];?>
        &author=<?php echo $row['author'];?>
        &info=<?php echo $row['info'];?>">
          <h4> <?php echo $row['head']; ?></h4></a>
          <h6> <?php echo $row['Data']; ?></h6>
          <hr>
          <div><?php echo $row['info']; ?></div>
          <hr>
          <h6><?php echo $row['author']; ?></h6>
        </div>
        <br>
  <?php }
    }
  }else{
  ?>
  <h5 class="text-center">Чтобы добавлять записи и оставлять комментарии нужно <p class="text-primary">авторизироваться или зарегистрироваться</p></h5>
  <?php foreach ($data as $row){ ?>
      <div class="container table-dark" style = "border:solid #333A40 1px; border-radius: 10px; padding:18px;">
        <a style = "text-decoration: none;" href="/news/Page/?
      id=<?php echo $row['id'];?>
      &head=<?php echo $row['head'];?>
      &Data=<?php echo $row['Data'];?>
      &author=<?php echo $row['author'];?>
      &info=<?php echo $row['info'];?>">
        <h4> <?php echo $row['head']; ?></h4></a>
        <h6> <?php echo $row['Data']; ?></h6>
        <hr>
        <div><?php echo $row['info'];?></div>
        <hr>
        <div><h6><?php echo $row['author'];?></h6></div>
      </div>
      <br>
  <?php }
    }
}else{
?>
  <h5 class="text-center">Чтобы добавлять записи и оставлять комментарии нужно <p class="text-primary">авторизироваться или зарегистрироваться</p></h5>
  <?php foreach ($data as $row){ ?>
      <div class="container table-dark" style = "border:solid #333A40 1px; border-radius: 10px; padding:18px;">
        <a style = "text-decoration: none;" href="/news/Page/?
      id=<?php echo $row['id'];?>
      &head=<?php echo $row['head'];?>
      &Data=<?php echo $row['Data'];?>
      &author=<?php echo $row['author'];?>
      &info=<?php echo $row['info'];?>">
        <h4> <?php echo $row['head']; ?></h4></a>
        <h6> <?php echo $row['Data']; ?></h6>
        <hr>
        <div><?php echo $row['info'];?></div>
        <hr>
        <div><h6><?php echo $row['author'];?></h6></div>
      </div>
      <br>
<?php }
}
?>
