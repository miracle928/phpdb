<!DOCTYPE html>
<html>
<head>
	<title>php test</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<center><form action="function.php" method="post" data-netlify="true">
		<div >
			<input class="we" type="text" name="email" placeholder="Email" required>
		</div>
		<br>
		<div>
			<input type="password" name="pass" placeholder="Password" required>
		</div>
		<br>
		<div>
			<select id="loop" name="buwan" required>
				<?php
                $months = ['Jan','Feb','Mar','Apr','May','June','July','Aug','Sep','Oct','Nov','Dec'];

                foreach ($months as $user_months) {
                 	echo "<option>$user_months</option>";
                 } 
				?>
			</select>
		</div>
		<br>
		<div>
			<input class="looping" type="submit" name="submit" value="Log in">
		</div>
		
	</form>
    </center>
</body>
</html>