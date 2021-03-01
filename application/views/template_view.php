<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>DeeXy</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" >DeeXy</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">
		<li class="nav-item">
			<a class="nav-link" href="/main/index">Главная</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="/contacts/index">Контакты</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="/portfolio/index">Портфолио</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="/news/index">Новости</a>
		</li>
	</ul>
	<?php if (isset($_SESSION['is_auth']))
				{
					if ($_SESSION['is_auth'] == '0')
					{
	?>
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Регистрация</button>
	&nbsp; &nbsp;
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			<form class="" action="/user/reg" method="post">
      <div class="modal-body">
        <input  name = "page"  type = "hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>">
				<input type="hidden" value='<?php echo $row['id']+1; ?>' name="id">
				<input  name = "status"  type = "hidden" value="1">
				<input placeholder="Логин" placeholder = "Логин" type = "text" name = "login" class = "form-control" required>
				<br>
				<input placeholder="Пароль" placeholder = "Пароль" name = "password" class = "form-control" type = "password" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <input type="submit" method='post' class="btn btn-primary" value="Отправить">
      </div>
			</form>
    </div>
  </div>
	</div>
	<ul class="navbar-nav justify-content-end">
		<div class="btn-group dropleft">
		  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Вход</a>
		  <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
				<form method="post" class ="container-fluid" action="/user/go">
						<input  name = "page"  type = "hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>">
						<input placeholder="Логин" placeholder = "Логин" type = "text" name = "login" class = "form-control">
						<input placeholder="Пароль" placeholder = "Пароль" name = "password" class = "form-control" type = "password">
						<br><br><br>
						<input type="submit" method='post' value="Войти" class = "form-control btn btn-dark" />
				</form>
		  </div>
		<?php }else{
			if ($_SESSION['status'] == '2'){
		?>
			<a class="nav-link btn btn-info" href="/admin">Админ панель</a>
		<?php } ?>
			&nbsp;&nbsp;
			<form method="post" class="col-fluid" action="/user/exit">
			<input name="exit"  type = "hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>">
			<input type="submit" class="form-control btn btn-danger"  value="Выход">
			</form>
		</div>
	</ul>
		<?php }
	}else{ ?>
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Регистрация</button>
		&nbsp; &nbsp;
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form class="" action="/user/reg" method="post">
				<div class="modal-body">
					<input  name = "page"  type = "hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>">
					<input type="hidden" value='<?php echo $row['id']+1; ?>' name="id">
					<input  name = "status"  type = "hidden" value="1">
					<input placeholder="Логин" placeholder = "Логин" type = "text" name = "login" class = "form-control" required>
					<br>
					<input placeholder="Пароль" placeholder = "Пароль" name = "password" class = "form-control" type = "password" required>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					<input type="submit" method='post' class="btn btn-primary" value="Отправить">
				</div>
				</form>
			</div>
		</div>
		</div>
		<ul class="navbar-nav justify-content-end">
			<div class="btn-group dropleft">
				<a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Вход</a>
				<div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
					<form method="post" class ="container-fluid" action="/user/go">
							<input  name = "page"  type = "hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>">
							<input placeholder="Логин" placeholder = "Логин" type = "text" name = "login" class = "form-control">
							<input placeholder="Пароль" placeholder = "Пароль" name = "password" class = "form-control" type = "password">
							<br><br><br>
							<input type="submit" method='post' value="Войти" class = "form-control btn btn-dark" />
					</form>
				</div>
			</div>
		</ul>
<?php	} ?>
</div>
</nav>
<?php if (isset($_SESSION['warringlog']))
			{
				if ($_SESSION['warringlog'] == '1')
				{ ?>
				<div class="alert alert-danger text-center" role="alert">
					Такой логин уже существует!
				</div>
<?php }
	}if (isset($_SESSION['warring']))
			{
				if ($_SESSION['warring'] == '1')
				{ ?>
				<div class="alert alert-danger text-center" role="alert">
					Пароль или логин введены неверно!
				</div>
	<?php }
			} ?>
	<?php include_once 'application/views/'.$content_view; ?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
