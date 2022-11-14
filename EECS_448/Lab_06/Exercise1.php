
<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	function product($x, $y) {
		$z = $x * $y;
		return $z;
	}

echo "<table border=\"1\">";

        for ($r =1; $r <= 100; $r++){

            echo'<tr>';

            for ($c = 1; $c <= 100; $c++)
                echo '<td>' .$c*$r.'</td>';
           echo '</tr>'; // close tr tag here

        }

  echo"</table>";

?>