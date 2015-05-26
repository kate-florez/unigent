<?php require('PHPMailerAutoload.php'); ?>


	<?php require('template/header.php') ?>
	
		<div class="wrapper-content">
			
			<div class="cont-second-menu">
				<ul>
					<li><a href="">חיפוש משרה </a></li>
					> 
					<li><a href=""> צור קשר</a></li>
				</ul>
			</div>
			
			<div class="cont-us">
				<h1>צור קשר</h1>
			</div>

			<div class="cont-form">
				
				<form action="" method="post" onsubmit="return contactForm(this);" class="contact-form"> 
					<div class="fill-form">
						<input type="text" placeholder="שם (חובה)" name="name">
						<span class="error-field title-error">אנא בחר קובץ להעלאה</span>
						<input type="text" placeholder="כתובת דואר אלקטרוני (חובה)" name="email">
						<span class="error-field email-error">אנא בחר קובץ להעלאה</span>
						<!--<span>חובה להוסיף דואר אלקטרוני</span>-->
						<input id="phone" class="normal-input" type="text" placeholder="טלפון" name="phone">
						<span class="error-field phone-error">אנא בחר קובץ להעלאה</span>
						<textarea class="normal-input text-big-input" type="text" placeholder="טקסט חופשי" name="mess"></textarea> 
						<span class="error-field mess-error">אנא בחר קובץ להעלאה</span>
						<input type="submit" value="שלח" name="submit"><span class="done">text</span>
					</div>
				</form> 

<?php
if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $mail = $_POST['email'];
        $phone = $_POST['phone'];
        $mess =  $_POST['mess'];
        $to = 'lebedeva.kait@gmail.com'; //'lebedeva.kait@gmail.com'; 
        //mail($to, $title, $mess, $phone, 'From:'.$email); 
        $message = "
				Name: $name <br>
				Email: $mail  <br>
				Phone: $phone  <br>
				mess: $mess  <br>
		";





		$email = new PHPMailer();
		$email->CharSet = 'UTF-8';
		$email->IsSMTP(); // enable SMTP
		$email->SMTPDebug = 0;
		$email->SMTPAuth = true;
		$email->SMTPSecure = "tls";
		$email->Host = "smtp.gmail.com";
		$email->Port = 587; // or 465  587
		$email->IsHTML(true);
		$email->Username = "server@adorika.com";
		$email->Password = "ador2929";
		$email->SetFrom("info@unigent.com");

		$email->FromName  = 'Unigent';
		$email->Subject   = 'מייל מצור קשר חיפוש משרה';
		$email->Body      = $message;
		$email->AddAddress( 'lebedeva.kait@gmail.com' );

		if($email->Send()){
			$send = true;
			echo "success!!!";

		}
}

?>

				<div class="cont-info">
					<p>
						כתובת:<br>
						רח’ קרימניצ’קי 6<br>
						תל אביב
					</p><br>
					<p>
						דואר אלקטרוני:<br>
 						info@unigent.net
					</p><br>
					<p>
						טלפון:<br>
						077-3548515
					</p>
				</div>

			</div>
			
<?php require('template/footer.php') ?>
