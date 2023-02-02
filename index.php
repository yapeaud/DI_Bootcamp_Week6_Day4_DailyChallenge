<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week6_Day1_XP_Ninja</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <form action="processing.php" method="post">
		Username: <input type="text" name="username" placeholder="enter name" required/><br/><br/>
		Select your favourite colors:<br/>
		Red<input type="checkbox" name="table_item[]" value="red"/><br/>
		Blue<input type="checkbox" name="table_item[]" value="blue"/><br/>
		Green<input type="checkbox" name="table_item[]" value="green"/><br/>
		Yellow<input type="checkbox" name="table_item[]" value="yellow"/><br/>
		Orange<input type="checkbox" name="table_item[]" value="orange"/><br/>
		Pink<input type="checkbox" name="table_item[]" value="pink"/><br/>
		Black<input type="checkbox" name="table_item[]" value="black"/><br/>
		White<input type="checkbox" name="table_item[]" value="white"/><br/><br/>
		<input type="submit" name="submit" value="Submit"/><br/>
	</form>
</body>
</html>