<?php
   include('question.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<?php foreach($quizz as $qIndex => $question): ?>

		<h3><?php echo $question['title']  ?></h3>

		<?php foreach ($question['options'] as $oindex => $answers) : ?>

		<p>
			<label>
				<input type="radio" name="<?= $qIndex ?>" value="<?= oindex?>"><?= $answers; ?>
			</label>
		</p>
		<?php endforeach; ?>

	<?php endforeach; ?>
	<button type="submit">submit</button>
	</form>

</body>
</html>