<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
	<title>Language quiz</title>
	<style></style>
</head>
<body >
	<div class="container">
		<form method ="post">
			<fieldset>
				<legend>Player</legend>
				<div class="form-row" >
					<div class="form-group col-md-6">
						<label for="selectedWord">Translate : </label>
						<input type="text" name="selectedWord" id="selectedWord" class="form-control" value="<?= $game->selectedWord->frenchWord ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="user_guess">Your Translation : </label>
						<input type="text" id="user_guess" name="user_guess" class="form-control" value="<?php echo "User input() here"; ?>">
					</div>
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Allez-y les enfants!</button>
				<?php if (!empty($game->message)) : ?>
					<p> <?= $game->message ?></p>
				<?php endif; ?>
				<p class ="Score">Your current score : <b> <?= $_SESSION['score'] ?></b> </p>
				<button type="submit" name="reset" class="btn btn-primary col-sm-2">encore une fois</button>
			</fieldset>
		</form>
	</div>
</body>
</html>