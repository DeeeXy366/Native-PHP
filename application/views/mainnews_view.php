<br><br>
<div class="container table-dark" style = "border:solid #333A40 1px; border-radius: 10px; padding:18px;">
  <h4> <?php echo $_GET['head']; ?> </h4>
  <h6> <?php echo $_GET['Data']; ?> </h6>
  <hr>
  <div><?php echo $_GET['info'];?>></div>
  <hr>
  <h6><?php echo $_GET['author']; ?></h6>
</div>
<br><br>
<?php
if(isset($_SESSION['status'])){
  if($_SESSION['status'] == '1' || $_SESSION['status'] == '2'){
?>
<div class="container table-active" style = "border:solid #333A40 1px; border-radius: 2px; padding:12px;">
  <form method="post" class="col-fluid" action="/news/comment">
    <input type="hidden" class="sorm-control" name="idcom" value="<?php echo $row['idcom']+1; ?>">
    <input type="hidden" class="form-control" name="headcom" value="<?php echo $_GET['head']; ?>">
    <label for="formGroupExampleInput"><h5>Добавить коментарий:</h5></label>
    <textarea placeholder="Введите ваш коментарий здесь" type="text" class="form-control" name="infocom" class="form-control" id="exampleFormControlTextarea1" rows="2" ></textarea>
    <input type="hidden" class="form-control" name="authorcom" value="<?php echo $_SESSION['login']; ?>">
    <div class="text-right" style="padding-top:10px;">
      <input  name = "page"  type = "hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>">
      <input type="submit" class="form-control btn btn-info container col-2"  value="Добавить">
    </div>
  </form>
</div>
<br>
<?php
  }
}
?>
<?php if(isset($_SESSION['status'])){
        if($_SESSION['status'] == '1'){
          foreach ($data as $row){
            if($_GET['head'] == $row['headcom']){ ?>
  <div class="container table-active" style = " border-radius: 2px; padding:12px;">
      <p><?php echo $row['authorcom']; ?></p>
      <p><?php echo $row['infocom']; ?></p>
      <div class="text-right" style="padding-top:10px;">
        <?php if(isset($_SESSION['login'])){
              if (($_SESSION['login'] == $row['authorcom']) || $_SESSION['status'] == '2') {?>
        <form method="post" class="col-fluid" action="/news/commentdel">
          <input type="hidden" class="sorm-control" name="id" value="<?php echo $row['idcom']; ?>">
          <input  name = "page"  type = "hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>">
          <input type="submit" class="form-control btn btn-danger container col-2"  value="Удалить">
        </form>
      <?php }
        } ?>
      </div>
  </div>
  <br>
<?php }
    }
  }else if($_SESSION['status'] == '2'){
    foreach ($data as $row){
      if($_GET['head'] == $row['headcom']){ ?>
  <div class="container table-active" style = " border-radius: 2px; padding:12px;">
      <p><?php echo $row['authorcom']; ?></p>
      <p><?php echo $row['infocom']; ?></p>
      <div class="text-right" style="padding-top:10px;">
        <form method="post" class="col-fluid" action="/news/commentdel">
          <input type="hidden" class="sorm-control" name="id" value="<?php echo $row['idcom']; ?>">
          <input  name = "page"  type = "hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>">
          <input type="submit" class="form-control btn btn-danger container col-2"  value="Удалить">
        </form>
      </div>
  </div>
  <br>
<?php }
    }
  }else if($_SESSION['status'] == '0'){
   foreach ($data as $row){
    if($_GET['head'] == $row['headcom']){ ?>
    <div class="container table-active" style = " border-radius: 2px; padding:12px;">
      <p><?php echo $row['authorcom']; ?></p>
      <p><?php echo $row['infocom']; ?></p>
    </div>
    <br>
<?php }
    }
  }
}else{
    foreach ($data as $row){
      if($_GET['head'] == $row['headcom']){ ?>
      <div class="container table-active" style = " border-radius: 2px; padding:12px;">
        <p><?php echo $row['authorcom']; ?></p>
        <p><?php echo $row['infocom']; ?></p>
      </div>
      <br>
<?php }
  }
}
?>
