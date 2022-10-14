<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <!--Simple form to get user name and email and submit to user_data.php-->
    <form method="POST" action="user_data.php">
        <label for="name">
            Name: <input type="text" name="name" placeholder="--your name--">
        </label> <br>
        <label for="email">
            E-mail: <input type="email" name="email">
        </label> <br>
        <label for="dob">
            Date-of-birth: <input type="date" name="dob" max="2012-12-12">
        </label><br>
        Gender:
		<label>
		  	<input type="radio" name="gender" value="male"/>Male
		</label>
		<label>
		  	<input type="radio" name="gender" value="female"/>Female
		</label><br>
        <label for="country">
            Country: <input type="text" name="country" placeholder="country">
        </label><br>
		
      
        <button type="submit">Submit</button>
    </form>
</body>
</html>
