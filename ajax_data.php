<?php
    // $firstName = $_POST['firstname'];
    // $email = $_POST['email'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "ajax";
$connection = mysqli_connect($servername, $username, $password,$database);

if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM students";
$result = mysqli_query($connection, $sql);
$output = "";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  
            $output = '<table border = "1" width = "100%">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Delete</th>
                    </tr>';
        while($row = mysqli_fetch_assoc($result)) {
                  $output .=   
                    "<tr align = 'center'>
                        <td>{$row['ID']}</td>
                        <td>{$row['FName']}</td>
                        <td>{$row['Email']}</td>
                        <td><button class = 'dlt_btn' data-id = '{$row['ID']}'>Delete</button></td>

                    </tr>";
            
   }
   $output .= "</table>";
   mysqli_close($connection);

   echo $output;
} else {
  echo "0 results";
}
                        ///// Insert data into database

// $sql = "INSERT INTO student_rollNum (firstname, email) VALUES ('{$firstName}','{$email}')";

// if (mysqli_query($connection, $sql)) {
//   echo 1;
// } else {
//   echo 0;
// }



?>
