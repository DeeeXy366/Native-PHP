    <div style="text-align:center;">
    <h1>Портфолио</h1>
    Все данные в следующей таблице являются вымышленными, поэтому даже <br>
    не пытайтесь перейти по приведенным ссылкам и др.
    </div>
    <hr>
<?php  if (isset($_SESSION['status'])) {
        if($_SESSION['status'] != '2')
        {
?>
<div style="text-align:center;">
<table class="table table-dark container col-8" style="text-align:center;">
    <tr><td>Имя:</td><td>Дата:</td><td>Почта:</td><td>Информация:</td></tr>
      <?php
      	foreach($data as $row)
      	{echo '<tr><td>'.$row['Name'].'</td><td>'.$row['Data'].'</td><td>'.$row['mail'].'</td><td>'.$row['info'].'</td></tr>';}
      ?>
</table>
</div>
<?php
}else{
?>
<div style="text-align:center;">
<table class="table table-dark container col-8" style="text-align:center;">
    <tr><td>Id:</td><td>Имя:</td><td>Дата:</td><td>Почта:</td><td>Информация:</td><td></td><td></td></tr>
      <?php
      foreach($data as $row)
      {?><tr>
          <td><?php echo $row['id']; ?></td>
          <td>
          <form method="post" class="col-fluid" action="/portfolio/edit">
          <input type="hidden" class="form-control" value='<?php echo $row['id']; ?>' name="strdel">
          <input type="text" name="Name" class="form-control" value='<?php echo $row['Name']; ?>'></td>
          <td><input type="text" name="Data" class="form-control" value='<?php echo $row['Data']; ?>'></td>
          <td><input type="text" name="mail" class="form-control" value='<?php echo $row['mail']; ?>'></td>
          <td><textarea type="text" name="info" class="form-control" id="exampleFormControlTextarea1" rows="1" ><?php echo $row['info']; ?></textarea></td>
          <td><input type="submit" class="form-control btn btn-dark" value="Изменить">
          </form>
          </td>
          <td>
          <form method="post" class="col-fluid" action="/portfolio/del">
          <input type="hidden" class="form-control" value='<?php echo $row['id']; ?>' name="strdel">
          <input type="submit" class="form-control btn btn-danger"  value="Удалить"  >
          </form>
          </td>
          </tr>
    <?php
        }
    ?>
    <tr>
        <td><?phpif(isset($row['id'])){echo $row['id']+1;}
        else {echo $row['id']+1;}?>
        </td>
        <td>
        <form method="post" class="col-fluid" action="/portfolio/add">
        <input type="hidden" class="form-control" name="strdel" value="<?php echo $row['id']+1; ?>">
        <input type="text" name="Name" class="form-control" ></td>
        <td><input type="text" name="Data" class="form-control" ></td>
        <td><input type="text" name="mail" class="form-control" ></td>
        <td><textarea type="text" name="info" class="form-control" id="exampleFormControlTextarea1" rows="1" ></textarea></td></td>
        <td colspan="2"><input type="submit" class="form-control btn btn-dark " value="Добавить"></td>
        </form>
    </tr>
    </table>
    </div>
    <?php
    }
}else{
?>
<table class="table table-dark container col-8" style="text-align:center;">
    <tr><td>Имя:</td><td>Дата:</td><td>Почта:</td><td>Информация:</td></tr>
      <?php
      	foreach($data as $row)
      	{echo '<tr><td>'.$row['Name'].'</td><td>'.$row['Data'].'</td><td>'.$row['mail'].'</td><td>'.$row['info'].'</td></tr>';}
      ?>
</table>
<?php
  }
    ?>
