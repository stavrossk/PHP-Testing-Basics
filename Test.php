<?php

include 'app.php';



	function TestReturnsTrueMethod()
	{

		if ( ReturnsTrue() )
		{
			echo "Test passed. ReturnsTrue exists and returns true.";
		}
		else
		{
			echo "Test failed: ReturnsTrue() did not return true.";
		}
	}

	TestReturnsTrueMethod();

?>