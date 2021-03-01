<?php
class Model_Portfolio extends Model
{
	public function get_data()
	{
			$object = 'SELECT * FROM model_portfolio';
			$rese = mysqli_query($this->link, $object);
			return $rese;
	}

	public function del($id)
	{
		if($_SESSION['status'] == '2')
		{
			$sql = "DELETE FROM model_portfolio WHERE id = '$id'";
			$result = mysqli_query($this->link, $sql);
			return $result;
		}

	}

	public function add($id, $Name, $Data, $mail, $info)
	{
		if($_SESSION['status'] == '2')
		{
			$sql = "INSERT INTO model_portfolio (id, Name, Data, mail, info) VALUES ('$id', '$Name', '$Data', '$mail', '$info')";
			$result = mysqli_query($this->link, $sql);
			return $result;
		}
	}

	public function edit($id, $Name, $Data, $mail, $info)
	{
		if($_SESSION['status'] == '2')
		{
			$dell = "UPDATE model_portfolio SET Name = '$Name', Data = '$Data', mail = '$mail', info = '$info' WHERE id = '$id'";
			$res = mysqli_query($this->link, $dell);
			return $res;
		}
	}
}

?>
