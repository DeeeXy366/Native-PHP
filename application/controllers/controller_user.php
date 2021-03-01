<?php
class Controller_User extends Controller
{

	function __construct()
	{
		$this->model = new Model_User();
		$this->view = new View();
	}

	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('template_view.php', $data);
	}

	function action_reg()
	{
		$this->model->user_register($_POST['id'], $_POST['login'], $_POST['password'], $_POST['status']);
		header('Location:'.$_POST['page']);
	}

  function action_exit()
  {
		$_SESSION = array();
		$_SESSION['is_auth'] = '0';
		$_SESSION['status'] = '0';
		$_SESSION['warring'] = '0';
    header('Location:'.$_POST['exit']);
  }

  function action_go()
  {
    $this->model->user_($_POST['login'], $_POST['password']);
    header('Location:'.$_POST['page']);
  }

}
?>
