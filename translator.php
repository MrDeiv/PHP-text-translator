<html>
	<head>
		<title>Yandex API example</title>
	</head>
	<body>
		<form method="POST" action="translator.php">
			<input type="text" name="text">
			<input type="submit" name="submit">
		</form>

		<?php
			if (isset($_POST['submit'])) {
				$text = urlencode($_POST['text']);
				$lang= "it-en";
				$key= "YOUR_API_KEY";

				$url= "https://translate.yandex.net/api/v1.5/tr.json/translate?key=".$key."&text=".$text."&lang=".$lang;
				$resp= file_get_contents($url);
				$resp= json_decode($resp,true);
				echo $resp['text'][0];
			}
		?>

	</body>
</html>