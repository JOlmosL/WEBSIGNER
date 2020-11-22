<?php  
session_start();
$usernamel=$_POST["user"];
$passwordl=$_POST["userpassword"];

require_once("DBConnection.php");
//$consulta="select * from personal where CorreoPersonal='$username' and ContrasenaPersonal = '$password'";
$consulta="SELECT * FROM personal WHERE CorreoPersonal = '".$usernamel."' AND ContrasenaPersonal = '".$passwordl."'";
$result = mysqli_query($conn, $consulta);

$row = mysqli_fetch_array($result);
if($row["CorreoPersonal"] == $usernamel && $row["ContrasenaPersonal"]== $passwordl)
{
	 $_SESSION['Nombre'] = $row["NombrePersonal"];
	 $_SESSION['Role'] = $row["RolPersonal"];
	 $_SESSION['eliminado']=false; 

	 header("Location: ../Home_Screen/IndexH.php");

}
else
{
	$_SESSION['Login']=False;
	header("Location: IndexL.php");
}

?>