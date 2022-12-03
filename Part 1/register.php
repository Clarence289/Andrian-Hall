<?php


require_once("database/db.php");

if(isset($_POST['submit_data']))
{


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$idnum = $_POST['idnum']; 
$dob = $_POST['dob']; 
 

//Verify data

 $get_user=mysqli_query($conn, "select * from registration where idnum='$idnum' ");
 if(mysqli_num_rows($get_user)>0)
 {
  echo "ID number Already exist.";

  header("location: index.php?id=2 ");
 }
 else
 {




// database insert SQL code
$sql = "INSERT INTO registration (first_name, last_name, idnum, dob) 
        VALUES ('$first_name', '$last_name', '$idnum', '$dob')";


//$rs = mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql))
{
  echo "You are successfully registered";
	
 
	//header('Location: addinfo.php');
	exit();


} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
}

?>
