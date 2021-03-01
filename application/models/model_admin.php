<?php
class Model_Admin extends Model
{
	public function get_data()
	{
			$object = 'SELECT * FROM users';
			$rese = mysqli_query($this->link, $object);
			return $rese;
	}

	public function del($Id)
	{
		if($_SESSION['status'] == '2')
		{
			$sql = "DELETE FROM users WHERE Id = '$Id'";
			$result = mysqli_query($this->link, $sql);
			return $result;
		}

	}

	public function edit($Id, $Login, $Password, $Status)
	{
		if($_SESSION['status'] == '2')
		{
			$dell = "UPDATE users SET Status = '$Status' WHERE Id = '$Id'";
			$res = mysqli_query($this->link, $dell);
			return $res;
		}
	}
}

?>
