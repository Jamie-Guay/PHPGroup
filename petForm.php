<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pet Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    @import url('https://fonts.googleapis.com/css?family=Righteous');
      body, input, textarea {
        font-family: 'Righteous', cursive;
      }
      @keyframes bgcolor {
    0% {
        background-color: #45a3e5
    }

    30% {
        background-color: #66bf39
    }

    60% {
        background-color: #eb670f
    }

    90% {
        background-color: #f35
    }

    100% {
        background-color: #864cbf
    }
}
      body{
        -webkit-animation: bgcolor 20s infinite;
    animation: bgcolor 10s infinite;
    -webkit-animation-direction: alternate;
    animation-direction: alternate;

        text-align: center;
        padding: 5%;
        background-color: #333;
        color: #ddd;
          letter-spacing: .1em;
      }
      input, textarea {
        width: 33%;
        margin: .5% 0;
        background-color: #000;
        color: #ddd;
        border: none;
        padding: 5px;
        transition-duration: .5s;
      }
      input:focus, textarea:focus {
        border-radius: 20px;
      }
      }
      button {
        border: 1px solid #fff;
        color: #fff;
        border-radius: 0px;
        background-color: transparent;
        transition-duration: .5s;
        font-size: 2em;
      }
      button:hover {
        border-radius: 20px;
      }
    </style>
  </head>
  <body>
    <?php
		//can find this information at the MAMP homepage
			$hospitalID;
			$user = 'root';
			$password = 'root';
			$db = 'pet_hospital';
			$host = 'localhost';
			$port = 8889;

			$link = mysqli_init();
			$success = mysqli_real_connect(
				$link,
				$host,
				$user,
				$password,
				$db,
				$port
			);

    //$link->query("ANY QUERY YOU WANT GOES HERE")
    //can put variable names in quotes without escaping $_POST
			if ($result = $link->query("SELECT Animals.id, Animals.name, Hospitals.name, Hospitals.location FROM Animals LEFT JOIN Hospitals ON Animals.hospital_id=Hospitals.id")) {
				printf("Select returned %d rows.\n", $result->num_rows);
				$pet = $result;
				print_r($result->fetch_row());
				print_r($result->fetch_assoc());
				echo "<table boarder = '4'>
				<tr>
				<th>Pet Name</th>
				<th>Hospital</th				
				</tr>";

				while ($row = $result->fetch_row()) {
					echo "<tr>";
					print_r($row);
					foreach ($row as $value) {
						echo "<td>" . $value . "</td>";
					}
					// echo "<td>" . $row['name'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";


				$result->close();
			}


			echo '<h1>Contact Form</h1>
      <form action="" method="POST">
        <input type="text" name="petName" placeholder="Pet Name"/><br />
				<input type="text" name="hospitalName" placeholder="Hospital Name"/><br />
				<input type="text" name="location" placeholder="Hospital Location"/><br />
        <input type="text" name="ownerName" placeholder="Owner Name" /><br />
        <input type="text" name="malady" placeholder="Malady" /><br />
        <button type="submit">Submit</button>
			</form>';

			function getAnimals($animal)
			{
				$query = "SELECT * FROM Animals WHERE name LIKE '$animal'";
				return $query;

			}


			if ($_POST['petName']) {
				$petName = htmlspecialchars($_POST['petName']);
				if ($result = $link->query(getAnimals($petName))) {
					print_r($result->fetch_assoc());
					$rows = $result->num_rows;
					if ($rows == 0) {
						$query = "INSERT INTO Animals (name) VALUES ('$petName')";
						if ($result = $link->query($query)) {
							echo 'Successfully inserted $result->num_rows';
							$result->close();
						} else {
							echo $link->error;
							echo $query;
						}
						echo '<p>
						Pet name found ' . $_POST['petName'] . '
						</p>';
					}
				}
			}



			function getHospital($name)
			{
				$query = "SELECT * FROM Hospitals WHERE name LIKE '$name'";
				return $query;
			}

			if ($_POST['hospitalName']) {
				$hosName = htmlspecialchars($_POST['hospitalName']);
				// $gethospital = "SELECT * FROM Hospitals WHERE name LIKE '$hosName'";
				if ($result = $link->query(getHospital($hosName))) {
					$rows = $result->num_rows;
					if ($rows == 0) {
						$query = "INSERT INTO Hospitals (name) VALUES ('$hosName')";
						if ($result = $link->query($query)) {
							echo 'Successfully inserted $result->num_rows';
							$hospitalID = $link->insert_id;
							echo $hospitalID;
							$result->close();
						} else {
							echo $link->error;
							echo $query;
						}
					}
				}
			}

			// if ($_POST['petName']) {
			// 	$petName = htmlspecialchars($_POST['petName']);
			// 	$query = "INSERT INTO Animals (name) VALUES ('$petName')";
			// 	if ($result = $link->query($query)) {
			// 		echo 'Successfully inserted $result->num_rows';
			// 		$result->close();
			// 	} else {
			// 		echo $link->error;
			// 		echo $query;
			// 	}
			// 	echo '<p>
			// Pet name found ' . $_POST['petName'] . '
			// </p>';
			// } else {
			// 	echo '<p>
      //   Please fill out the form!
      //   </p>';
			// }



			?>
  </body>
</html>