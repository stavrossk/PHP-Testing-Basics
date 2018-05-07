<html>

    <head>

        <title>
            Funny Message Application Code
        </title>

    </head>

    <body>

		<h1>Funny Message Generator</h1>

		<form action="index.php" method="post">
			
			What's your first name?

			<input type="text" placeholder="First Name" name="fname">

			<input type="submit" name="submit">

		</form>


        <?php

        	$fname = $_POST['fname'];
        	$submit = $_POST['submit'];

        	$message = "";

        	if(empty($fname) && !empty($submit))
        	{
        		$message = "You muse enter your first name above to get your funny message.";
        	}
        	elseif(!empty($fname))
        	{
        		$message = $fname."ana fonnana mi fo nanna.";
        	}


        ?>



       	<?php
       		echo "<p>".$message."</p>";
       	?>

    </body>


</html>