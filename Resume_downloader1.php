<?php
header('Content-type: image/jpeg');
$user='root';
$passwd='';
$database='test';
$con=mysqli_connect('localhost',$user,$passwd,$database);
$name=mysql_real_escape_string($_POST['form_name']);
$email=mysql_real_escape_string($_POST['form_email']);
$father=mysql_real_escape_string($_POST['form_fathers_name']);
$plan=mysql_real_escape_string($_POST['form_plan']);
$lan=mysql_real_escape_string($_POST['form_lan']);
$address=mysql_real_escape_string($_POST['form_address']);
$College=mysql_real_escape_string($_POST['form_college']);
$Education=mysql_real_escape_string($_POST['form_education']);
$Percentage=mysql_real_escape_string($_POST['form_percentage']);
$work_experience=mysql_real_escape_string($_POST['form_work_experience']);
$mobile=mysql_real_escape_string($_POST['form_mob']);
echo"$name";

$query="INSERT INTO `test`.`resume` (`name`, `email`, `fathers_name`, `plan`, `lan`, `address`, `college`, `education`, `percentage`, `experience`, `mobile`) VALUES ('$name','$email', '$father', '$plan', '$lan', '$address', '$College', '$Education', '$Percentage', '$experience', '$mobile')";
$result=mysql_query($query);
if($result)
echo"the connection is successful";
//$name=mysqli_real_escape_string($con,$_POST['form_name']);

$query="SELECT * FROM resume WHERE name='$name'";
$returned=mysqli_query($con,$query);
if($returned)
{
	echo"returned";
}
$num=mysqli_num_rows($returned);
while($row=mysqli_fetch_assoc($returned))
{
	$name=$row['name'];
		$email=$row['email'];
			$fname=$row['fathers_name'];
				$plan=$row['plan'];
					$lan=$row['lan'];
						$address=$row['address'];
							$college=$row['college'];
								$education=$row['education'];
									$percentage=$row['percentage'];
										$experience=$row['experience'];
											$mobile=$row['mobile'];
												
}

 $jpg_image = imagecreatefromjpeg('resume.jpg');
 $font_color = imagecolorallocate($jpg_image, 0, 0, 0);
 $font_path = 'myfont.TTF';
 $text = "RESUME";
 imagettftext($jpg_image, 25, 0, 200, 50, $font_color, $font_path, $text);
 imagettftext($jpg_image, 15, 0, 50, 100, $font_color, $font_path, "NAME:   ".$name);
 imagettftext($jpg_image, 15, 0, 50, 130, $font_color, $font_path, "EMAIL:  ".$email);
 imagettftext($jpg_image, 15, 0, 50, 160, $font_color, $font_path, "MOBILE:  ".$mobile);
 imagettftext($jpg_image, 15, 0, 50, 190, $font_color, $font_path, "FATHER'S NAME:   ".$fname);
 imagettftext($jpg_image, 15, 0, 50, 220, $font_color, $font_path, "COLLEGE:  ".$college);
 imagettftext($jpg_image, 15, 0, 50, 250, $font_color, $font_path,"PERCENTAGE:   ".$percentage);
 imagettftext($jpg_image, 15, 0, 50, 280, $font_color, $font_path, "LANGUAGES:".$lan);
 imagettftext($jpg_image, 15, 0, 50, 310, $font_color, $font_path, "PROGRAMMING LANGUAGES:  ".$plan);
 imagettftext($jpg_image, 15, 0, 50, 340, $font_color, $font_path, "EXPERIENCE:   ".$experience);
 imagettftext($jpg_image, 15, 0, 50, 370, $font_color, $font_path, "EDUCATION:   ".$education);
 imagettftext($jpg_image, 15, 0, 50, 400, $font_color, $font_path," RESIDENTIAL ADDRESS:  ".$address);
 
 imagejpeg($jpg_image, 'printedresume.jpg');
 header("location:download.php");

 //header("Location:Hacker_earth.php");
 
 
 

?>