<?php

require '../commons/database.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';



if(isset($_POST['fname'])){



$reference="HIS".rand(999,123).$_POST['telephone'];


    // Server settings
    $mail->SMTPDebug = 2;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'maxmorse20@gmail.com';                   
    $mail->Password   = '';                              
    $mail->SMTPSecure = 'tls';         
    $mail->Port       = 587;                          
    $mail->setFrom('maxmorse20@gmail.com', 'Maxwell');
   
    $mail->isHTML(true);                                 
    $mail->Subject = 'HIS REGISTRATION';
    $mail->Body    = "Thanks for registrering your reference is $reference";
   
    $mail->send();
    echo 'Message has been sent';


	$fname=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['fname'])));
	$dob=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['dob'])));
	$idno=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['idno'])));
	$inputAddress=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['inputAddress'])));
	$county=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['county'])));
	$subcounty=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['subcounty'])));
	$telephone=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['telephone'])));
	$email=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['email'])));
	$gender=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['gender'])));
	$marital=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['marital'])));
	$kinname=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['kinname'])));
	$dobkin=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['dobkin'])));
	$kinid=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['kinid'])));
	$fgender=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['fgender'])));
	$relationship=trim(htmlentities(mysqli_real_escape_string($connection,$_POST['relationship'])));



	if(!recordExists($email)){


		$query=mysqli_query($connection,"insert into patients SET 
			p_name='$fname',
			p_telephone='$telephone',
			p_dob='$dob',
			pid_number='$idno',
			p_address='$inputAddress',
			p_county='$county',
			p_subcounty='$subcounty',
			p_email='$email',
			p_gender='$gender',
			p_mstatus='$marital',
			next_kin_name='$kinname',
			next_kin_dob='$dobkin',
			next_kin_id='$kinid',
			next_kin_gender='$fgender',
			next_kin_rlship='$relationship'
			");



		if($query){

			//echo "Saved successfully";

			if(!$mail->send()) 
{
echo "Mailer Error: " . $mail->ErrorInfo; 
} 
else { echo "Message has been sent successfully"; 
}
if(!$mail->send()) 
{ 
echo "Mailer Error: " . $mail->ErrorInfo; 
} 
else 
{ 
echo "Message has been sent successfully"; 
}

		}else{

			echo "Failed to save, Please try again";

			file_put_contents("a.txt", mysqli_error($connection));
		}
	}else{


		echo "Already registered";
	}


}


function recordExists($email){

	$conn=connectToDB();

	$sql=mysqli_query($conn,"select p_email from patients where p_email='$email'");

	if(mysqli_num_rows($sql)>0){

		return true;
	}

	return false;
}

?>