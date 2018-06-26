<?


if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['tel'])&&$_POST['tel']!="")&&(isset($_POST['email'])&&$_POST['email']!="")) {
	$to = 'iris.kov88@gmail.com';
	$subject = 'Заявка с сайта';
	$subject = ' 
				<html>
					<head>
						<title>'.$subject.'</title>
					</head>
					<body>
						<p>Ваше имя: '.$_POST['name'].'</p>
						<p>Контактный телефон: '.$_POST['tel'].'</p>
					</body>
				</html>';
	$headers = "Content-type: text/html; charset=utf-8 \r\n";
	$headers .= "From: Отправитель <from@example.com>\r\n";

	mail($to, $subject, $message, $headers); 
	'
}
?>
