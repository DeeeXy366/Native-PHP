<?php
class Controller_Portfolio extends Controller
{

	function __construct()
	{
		$this->model = new Model_Portfolio();
		$this->view = new View();
	}

	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('portfolio_view.php', 'template_view.php', $data);
	}

	function action_del()
	{
		$this->model->del($_POST['strdel']);
		header('Location:/portfolio');
	}

	function action_add()
	{
		$this->model->add($_POST['strdel'], $_POST['Name'], $_POST['Data'], $_POST['mail'], $_POST['info']);
		header('Location:/portfolio');
	}

	function action_edit()
	{
		$this->model->edit($_POST['strdel'], $_POST['Name'], $_POST['Data'], $_POST['mail'], $_POST['info']);
		header('Location:/portfolio');
	}
}
?>
