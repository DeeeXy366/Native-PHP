<?php
class Model_News extends Model
{
	public function get_news()
	{
			$object = 'SELECT * FROM news';
			$rese = mysqli_query($this->link, $object);
			return $rese;
	}

	public function ndel($id)
	{
		if($_SESSION['status'] == '2' || $_SESSION['status'] == '1')
		{
			$sql = "DELETE FROM news WHERE id = '$id'";
			$result = mysqli_query($this->link, $sql);
			return $result;
		}
	}

	public function nadd($id, $head, $data, $info, $login)
	{
		if($_SESSION['status'] == '2' || $_SESSION['status'] == '1')
		{
			$sql = "INSERT INTO news (id, head, Data, info, author) VALUES ('$id', '$head', '$data', '$info', '$login')";
			$result = mysqli_query($this->link, $sql);
			return $result;
		}
	}

	public function nedit($id, $head, $info)
	{
		if($_SESSION['status'] == '2' || $_SESSION['status'] == '1')
		{
			$edit = "UPDATE news SET head = '$head', info = '$info' WHERE id = '$id'";
			$res = mysqli_query($this->link, $edit);
			return $res;
		}
	}

	public function get_comments()
	{
			$object = 'SELECT * FROM comments';
			$rese = mysqli_query($this->link, $object);
			return $rese;
	}

	public function comm($id, $head, $info, $author)
	{
		if($_SESSION['status'] == '2' || $_SESSION['status'] == '1')
		{
		$sql = "INSERT INTO comments (idcom, headcom, infocom, authorcom) VALUES ('$id', '$head', '$info', '$author')";
		$result = mysqli_query($this->link, $sql);
		return $result;
		}
	}

	public function commdel($id)
	{
		if($_SESSION['status'] == '2' || $_SESSION['status'] == '1')
		{
			$sql = "DELETE FROM comments WHERE idcom = '$id'";
			$result = mysqli_query($this->link, $sql);
			return $result;
		}
	}
}

?>
