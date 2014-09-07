<?php
header('Content-type: image/jpeg');
$user='root';
$passwd='';
$database='test';
$con=mysqli_connect('localhost',$user,$passwd,$database);
$name=mysqli_real_escape_string($con,$_POST['form_name']);

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
 imagettftext($jpg_image, 15, 0, 50, 150, $font_color, $font_path, "EMAIL:  ".$email);
 imagettftext($jpg_image, 15, 0, 50, 200, $font_color, $font_path, "MOBILE:  ".$mobile);
 imagettftext($jpg_image, 15, 0, 50, 250, $font_color, $font_path, "FATHER'S NAME:   ".$fname);
 imagettftext($jpg_image, 15, 0, 50, 300, $font_color, $font_path, "COLLEGE:  ".$college);
 imagettftext($jpg_image, 15, 0, 50, 350, $font_color, $font_path,"PERCENTAGE:   ".$percentage);
 imagettftext($jpg_image, 15, 0, 50, 400, $font_color, $font_path, "LANGUAGES:".$lan);
 imagettftext($jpg_image, 15, 0, 50, 450, $font_color, $font_path, "PROGRAMMING LANGUAGES:  ".$plan);
 imagettftext($jpg_image, 15, 0, 50, 500, $font_color, $font_path, "EXPERIENCE:   ".$experience);
 imagettftext($jpg_image, 15, 0, 50, 550, $font_color, $font_path, "EDUCATION:   ".$education);
 imagettftext($jpg_image, 15, 0, 50, 600, $font_color, $font_path," RESIDENTIAL ADDRESS:  ".$address);
 
 imagejpeg($jpg_image, 'printedresume.jpg');
 
 
  header("location:download.php");
 
 
 

?>