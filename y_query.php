<?php

$link = mysqli_connect("localhost", "root", "", "m");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
			
				$sql9 = "SELECT * FROM customer";
				
				$sql_result9 = mysql_query($sql9) OR die(mysql_error());
				
				if($sql_result9)
				{
					echo 
					"<table border = 1>
						<tr>
							 <th>CID</th> <th>Username</th> <th>Password</th> <th>NIC</th> <th>Email</th>   <th>Home_no</th>
							 <th>street</th> <th>City</th> <th>Postcode</th>
						</tr>";
						
					while ($row = mysql_fetch_array($sql_result9))
					{
						
						echo "<tr>";
						
						echo "<td>" .$row[CID] . "</td>";
						echo "<td>" .$row[Username]. "</td>";
						echo "<td>" .$row[Password]. "</td>";
						echo "<td>" .$row[NIC]. "</td>";
						echo "<td>" .$row[Email]. "</td>";
						echo "<td>" .$row[Home_no]. "</td>";
						echo "<td>" .$row[street]. "</td>";
						echo "<td>" .$row[City]. "</td>";
						echo "<td>" .$row[Postcode]. "</td>";
					
						
						echo "</tr>";
						
					}
					
					echo "</table>";
				}
			
			
			?>