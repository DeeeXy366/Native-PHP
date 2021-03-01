<?php
class Controller_News extends Controller
{

	function __construct()
	{
		$this->model = new Model_News();
		$this->view = new View();
	}

	function action_index()
	{
		$data = $this->model->get_news();
		$this->view->generate('news_view.php', 'template_view.php', $data);
	}

	function action_newsdel()
	{
		$this->model->ndel($_POST['tbldel']);
		header('Location:/news');
	}

	function action_newsadd()
	{
		$this->model->nadd($_POST['tbladd'], $_POST['head'], $_POST['data'], $_POST['info'], $_SESSION['login']);
		header('Location:/news');
	}

	function action_newsedit()
	{
		$this->model->nedit($_POST['tbldel'], $_POST['head'], $_POST['info']);
		header('Location:/news');
	}



	function action_Page()
	{
		$data = $this->model->get_comments();
		$this->view->generate('mainnews_view.php', 'template_view.php', $data);
	}

	function action_comment()
	{
		$this->model->comm($_POST['idcom'], $_POST['headcom'], $_POST['infocom'], $_POST['authorcom']);
		header('Location:'.$_POST['page']);
	}

	function action_commentdel()
	{
		$this->model->commdel($_POST['id']);
		header('Location:'.$_POST['page']);
	}
}
?>
