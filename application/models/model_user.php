<?php
class Model_User extends Model
{
	public function get_data()
	{
			$object = 'SELECT * FROM users';
			$rese = mysqli_query($this->link, $object);
			return $rese;
	}

	public function user_register($id, $login, $password, $status)
	{
		$objectid = "SELECT * FROM users WHERE login = '$login'";
		$resultid = mysqli_query($this->link, $objectid)->fetch_array();
		if (isset($resultid)){
			$_SESSION['warringlog'] = '1';
		}else{
			$_SESSION['warringlog'] = '0';
			$password = md5($password);
			$sql = "INSERT INTO users (id, Login, Password, Status) VALUES ('$id', '$login', '$password', '$status')";
			$result = mysqli_query($this->link, $sql);
			return $result;
		}
	}

  public function user_($login, $password)
  {
		$_SESSION['is_auth'] = '1';
		$password = md5($password);
    $objectid = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $resultid = mysqli_query($this->link, $objectid)->fetch_array();
    if ($resultid == NULL)
    {
			$_SESSION['is_auth'] = '0';
			$_SESSION['warring'] = '1';
    }
    else
    {
			$_SESSION['login'] = $login;
			$_SESSION['warring'] = '0';
      $object = "SELECT Status FROM users WHERE login = '$login' AND password = '$password'";
      $result = mysqli_query($this->link, $object)->fetch_array();
      $_SESSION['status'] = $result['Status'];
    }
  }
}

?>
