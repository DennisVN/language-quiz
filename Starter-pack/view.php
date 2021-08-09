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
	<!-- TODO : Create field that displays random word -->
	<fieldset>
            <legend>Player</legend>

            <div class="form-row" >
                <div class="form-group col-md-6">
                    <label for="street">Translate following word:</label>
                    <input type="text" name="word" id="word" class="form-control" value="<?php echo "Generated word here"; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="streetnumber">Your Translation : </label>
                    <input type="text" id="translation" name="translation" class="form-control" value="<?php echo "User input() here"; ?>">
                </div>
            </div>
        </fieldset>
		<button type="submit" class="btn btn-primary">Allez-y les enfants!</button>
	</div>
</body>
</html>