<?


if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['tel'])&&$_POST['tel']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['person'])&&$_POST['person']!="")&&(isset($_POST['date'])&&$_POST['date']!="")&&(isset($_POST['time'])&&$_POST['time']!="")) {
	$to = 'iris.kov88@gmail.com';
	$subject = 'Забронировать';
	$subject = ' 
				<html>
					<head>
						<title>'.$subject.'</title>
					</head>
					<body>
						<p>Ваше имя: '.$_POST['name'].'</p>
						<p>Контактный телефон: '.$_POST['tel'].'</p>
						<p>Ваш e-mail: '.$_POST['email'].' </p>
						<p>Количество персон: '.$_POST['person'].' </p>
						<p>Дата брони: '.$_POST['date'].' </p>
						<p>Время брони: '.$_POST['time'].' </p>
					</body>
				</html>';
	$headers = "Content-type: text/html; charset=utf-8 \r\n";
	$headers .= "From: Отправитель <from@example.com>\r\n";

	mail($to, $subject, $message, $headers); 
	'
}
?>
