<?php
echo "Welcome to the PHP world";
?>
<html>
    <head>
        <h1>My First Docker<h1>
    </head>
    <body>
        <h3>This is the body of my HTML page<h3>
    </body>
</html>
<?php
$con = mysqli_connect("localhost", "vipin","abc123","placeqdh_pam"); #Connection string
mysqli_set_charset($con,"utf8mb4");
if(mysqli_connect_errno())
{
    echo "Failed to connect:" . mysqli_connect_errno();
}

$result = mysqli_query($con,"SELECT * FROM users");
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr>     
      </tr>';
          while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["first_name"];
        $field3name = $row["last_name"];
        #$field4name = $row["hobby"];
 
        echo '<tr> 
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td> 
       
      <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
?>
