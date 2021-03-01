<div style="text-align:center;">
<table class="table table-dark container col-8" style="text-align:center;">
    <tr><td>Id:</td><td>Имя:</td><td>Пароль:</td><td>Статус:</td><td></td><td></td></tr>
      <?php
      foreach($data as $row)
      {?><tr>
          <td><?php echo $row['Id']; ?></td>
          <td><?php echo $row['Login']; ?></td>
          <td><?php echo $row['Password']; ?></td>
          <form method="post" class="col-fluid" action="/admin/edit">
          <input type="hidden" class="form-control" value='<?php echo $row['Id']; ?>' name="strdel">
          <td><input type="text" name="Status" class="form-control" value='<?php echo $row['Status']; ?>'></td>
          <td><input type="submit" class="form-control btn btn-dark" value="Изменить">
          </form>
          </td>
          <td>
          <form method="post" class="col-fluid" action="/admin/del">
          <input type="hidden" class="form-control" value='<?php echo $row['Id']; ?>' name="strdel">
          <input type="submit" class="form-control btn btn-danger"  value="Удалить"  >
          </form>
          </td>
          </tr>
    <?php
        }
    ?>
    </table>
    </div>
