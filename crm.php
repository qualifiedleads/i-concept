<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
if(isset($_POST["Fname"])){

	echo "in<br>";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://www.bmby.com/shared/AddClient/index.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "ProjectID=7061&Password=asdw0911&Fname=".$_POST['Fname']."&Lname=".$_POST['Lname']."&Mobile=".$_POST['Mobile']."&Email=".$_POST['Email']."&u71=1&Comments=websiteLead&ProductTitle=עיצוב פנים");

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$server_output = curl_exec($ch);

	curl_close($ch);	
	echo "<pre>";
	print($server_output);
}
$page = $_POST['page'];
if (!isset($_POST['page'])) {
	$page = "home";
}
$newurl = "https://i.concept.ac/".$page."/thankyou.html";
echo "<center><h3>working....</h3><p>You will be redirected automatically</p></center>";
// sleep(5);
// header("refresh:5;url=".$newurl);
header("Location:https://i.concept.ac/".$page."/thankyou.html");
die();
 ?>