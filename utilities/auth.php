<?php
class Auth
{
    private $con;

	function __construct()
	{
		include_once("./Database/db.php");
		$db = new Database();
		$this->con = $db->connect();
	}

    // check if student already in school
    private function accountExists($email)
	{
		$pre_stmt = $this->con->prepare("SELECT * FROM `students` WHERE email = ? LIMIT 1");
		$pre_stmt->bind_param("s",$email);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		if($result->num_rows > 0)
		{
			return true; 
		}else
		{
			return false;
		}
	}
	// PUBLIC FUNCTIONS add Student
	public function addStudent($name, $email, $pin)
	{  
		if(!$this->accountExists($email)){
			$pre_stmt = $this->con->prepare("INSERT INTO `students`(`name`,`email`, `pin`, `date_added`) VALUES (?,?,?,?)");
			$date = date("y-m-d");
            $encryptedPin = sha1($pin);
			$pre_stmt->bind_param("ssss",$name,$email,$encryptedPin, $date);
			$result = $pre_stmt->execute() or die($this->con->error);
			if ($result) {
				return "STUDENT_ADDED_SUCCESSFULLY";
			}else{
				return "STUDENT_ADDITION_FAILED";
			}
		}else{
			return "STUDENT_ALREADY_EXIST";	
		}
	}
    public function login($uid,$pin)
	{
		$pre_stmt = $this->con->prepare("SELECT * FROM `students` WHERE email = ? OR id = ?");
		$pre_stmt->bind_param("ss",$uid, $uid);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		if ($result->num_rows < 1)
		{
			return "STUDENT_NOT_FOUND";
		}else
		{
			$row = $result->fetch_assoc();
			if($row["pin"] == sha1($pin))
			{
                // session_start();
                $user = array($row['id'], $row['name'], $row['email']); 
                $_SESSION['user'] = $user;
                $_SESSION['loggedIn'] = session_id();
                return true;
			}else
			{
				return "PIN_NOT_MATCHED";
			}
		}
	}
    public function getPhoto($uid)
    {
        $stmt = $this->con->prepare("SELECT * FROM  students WHERE id = ? LIMIT 1");
        $stmt->bind_param("i", $uid);
        $stmt->execute() or die($this->con->error);
        $result = $stmt->get_result();
        $value = $result->fetch_assoc();
        return $value['img'];
    }
	// change pin
	public function changePin($uid,$cpin, $npin)
	{
		$pre_stmt = $this->con->prepare("SELECT * FROM `students` WHERE id = ?");
		$pre_stmt->bind_param("i",$uid);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		$row = $result->fetch_assoc();
		if($row['pin'] == sha1($cpin))
		{
			$stmt = $this->con->prepare("UPDATE students SET pin = ? WHERE id = ?");
			$npin = sha1($npin);
			$stmt->bind_param("si",$npin,$uid);
			$stmt->execute() or die($this->con->error);
			return true;
		}else{
			return "INCORRECT_PASSWORD";
		}
	}
	public function changePhoto($uid,$img)
	{
		$stmt = $this->con->prepare("UPDATE students SET img = ? WHERE id = ?");
		$stmt->bind_param("si",$img,$uid);
		$stmt->execute() or die($this->con->error);
		return true;
	}
}
// Uncomment beloow to add more students to database.
// run the auth file in browser to execute.
// $auth = new Auth();
// echo "<pre>";
// echo $auth->addStudent("Peter Osei", "posei@gmail.com", "80725");