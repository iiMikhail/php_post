<?php 

print_r($_POST);
if( !empty($_POST) ) {
	$message = "Новое сообщение от пользователя " . $_POST['userName'] . "\n" .
	"Отправитель: " . $_POST['userName'] . "\n" .
	"E-mail: " . $_POST['userMail'] . "\n" .
	"Сообщение: \n " . $_POST['message'];

	$sendMail = mail( "mikhail.kozhan@gmail.com", "Новое сообщение", $message );
	// if( $sendMail ) {
	// 	echo "Письмо успешно отправлено!";
	// } else {
	// 	echo "Упс ... кажется что-то пошло не так";
	// }
}
 ?>

 <form action="index.php" method="post">
 	<input name = "userName" type="name" placeholder="Ваше имя"><br>
 	<input name = "userMail" type="surname" placeholder="Ваш e-mail"><br>
 	<textarea name="message" id="" cols="30" rows="10" placeholder="Сообщение"></textarea>
	<input type="submit" value="Отправить">

 </form>