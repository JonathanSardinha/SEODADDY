<?php 

//////////////////////////////////////////////////////////////////////////////////
	//	AUDIT TRAIL
/////////////////////////////////////////////////////////////////////////////////

// CLASS AND FUNCTIONS
class Crud
{
		private $conn;

		public function __construct($connectionObject)
		{
			$this->conn = $connectionObject;
		}

		//Select Data From Any Table
		public function select($table, $rows='*', $where=null, $order=null, $group =null, $join =null, $limit=null)
		{  
			try 
			{
				$sql="SELECT $rows FROM $table"; 

				if($join!=null)
				{
					$sql .= $join;
				}

				if($where!=null)
				{
					$sql .= " WHERE " . $where;
				}

				if($group!=null)
				{
					$sql .= " GROUP BY " . $group;
				}

				if($order!=null)
				{
					$sql .= " ORDER BY " . $order;
				}

				if($limit!=null)
				{
					$sql .= " LIMIT " . $limit;
				}
				
				$q = $this->conn->prepare($sql);  
				$q->execute();

				if($q->rowCount() > 0)
				{
					while($r = $q->fetch(PDO::FETCH_ASSOC))
					{ 
						$data[]=$r;
					} 
					return $data; 
				}

				else
				{
					return false;
				}
			} 

			catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
        } 
        
        //INSERT AND UPDATE ON TABLE1
		public function LogAllCalculate($identifier, $userid, $fullname)
		{
			try 
			{	 
				$check = "SELECT * FROM table1 WHERE IPAddr = '".$_SERVER["REMOTE_ADDR"]."' 
										&& UserID = '".$userid."'";
				$q = $this->conn->prepare($check);
				$q->execute();

				if($q->rowCount() < 1)
				{
					$sqlx = "INSERT INTO table1 SET Identifier = :identifier, 
												UserID = :userid, 
												FullName = :fullname, 
												Visit = :visit, 
												IPAddr = :ip_addr";
					$q = $this->conn->prepare($sqlx);
					$q->execute(array(':identifier'=>$identifier,
									':userid'=>$userid,
									':fullname'=>$fullname,
									':visit'=> 1,
									'ip_addr'=> $_SERVER["REMOTE_ADDR"]
								));
				}
				else
				{	
					$m = $q->fetch(PDO::FETCH_ASSOC);
					$visit = ($m["Visit"] + 1);

					$sqlz = "UPDATE table1 SET Visit = :visit, 
													Identifier = :identifier, 
													FullName = :fullname 
							WHERE IPAddr = '".$_SERVER["REMOTE_ADDR"]."' 
							&& UserID = '".$userid."'";

					$q = $this->conn->prepare($sqlz);
					$q->execute(array(':identifier'=>$identifier,
									':visit'=>$visit,
									':fullname'=>$fullname
									));
				}
			} 

			catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
			
		}

        //INSERT TO TABLE2
		public function LogAudit($identifier, $userid, $fullname)
		{
			$Timenow = date("Y-m-d G:i:s");
			try 
			{	
				$url = $_SERVER["REQUEST_URI"];

				$sqlx = "INSERT INTO table2 SET Task = :task, 
											UserID = :userid, 
											FullName = :fullname,
											Identifier = :identifier, 
											DateModified = :datez,
											IPAddr = :ip_addr";
				$q = $this->conn->prepare($sqlx);
				$q->execute(array(':task'=>$url,
								':userid'=>$userid,
								':fullname'=>$fullname,
								':identifier'=>$identifier,
								':datez'=>date("Y-m-d G:i:s"),
								'ip_addr'=> $_SERVER["REMOTE_ADDR"]
							));
			} 

			catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
			
		}
}


//CONTROLS
function FetchTableContent($i)
{
	global $connect;
	$crud = new Crud($connect);

	switch ($i) {

		//select total unique users from general_log table
		case 10:
			$data = $crud->select("table1","COUNT(ID) as Total", "", "ID DESC");
			return $data[0]["Total"];
			break;

		//select total clicks from general_log table
		case 11:
			$data = $crud->select("table1","SUM(Visit) as Total", "", "ID DESC");
			return $data[0]["Total"];
			break;

		//select total unique user clicks from general_log table(For Individual Dashboards)
		case 12:
			$data = $crud->select("table","COUNT(Visit) as Total", "", "ID DESC");
			return $data[0]["Total"];

		//select all row from Audit Log
		case 13:
			$data = $crud->select("table2","*", "", "COUNT(ID) DESC", "UserID");
			return $data;
			break;

		//select total unique users from general_log table
		case 14:
			$data = $crud->select("users","COUNT(ID) as Total", "", "ID DESC");
			return $data[0]["Total"];
			break;

	}
}



//PUT THIS AT THE TOP OF EVERY PAGE YOU WANT TO READ
$home = new Crud($connect);

if(isset($_SESSION["duid"])) {
	$sname = $home->AnyContent("Sname", "users", "ID", $_SESSION["duid"]);
	$fname = $home->AnyContent("Fname", "users", "ID", $_SESSION["duid"]);
}

$user_id = (isset($_SESSION["duid"])) ? $_SESSION["duid"] : 0;

$identifier = (isset($_SESSION["duid"])) ? "2" : "1";
$userid = (isset($user_id)) ? $user_id : "NULL";
$fname = $home -> AnyContent("FName", "users", "ID", $user_id);
$sname = $home -> AnyContent("SName", "users", "ID", $user_id);
$fullname = (isset($user_id)) ? $fname." ".$sname : "NULL";

//$forgo -> LogAll($identifier, $userid, $fullname);
$home -> LogAllCalculate($identifier, $userid, $fullname);
$home -> LogAudit($identifier, $userid, $fullname);



//PUT THIS IN THE ADMIN DASHBOARD OR ANY WHERE YOU WANT THE AUDIT TRAIL INFORMATION TO SHOW
//Total Clicks
 echo FetchTableContent(11); 
//Active Users
 echo FetchTableContent(10);
 //Registered Users
 echo FetchTableContent(14);
 //Unique Clicks
 echo FetchTableContent(12);
                



?>