<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<!-- php is a server scripting language for making dynamic and interactive web pages (https://www.w3schools.com/PhP/default.asp)  -->
	<head></head>
	<body>
    <?php

    echo "<h1>
    User login system
    </h1><p>
    Welcome!
    </p>";

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "usersystem";
    //If not on localhost it would need a port number
    // $port = "9786";

    // Create connection
    //Would also need the port parameter to be used if not on localhost.
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //Choose content to acquire from table specific table
    $sql = "SELECT navn, rolle FROM users, userroles, roles WHERE users.id = userroles.userid and roles.id=userroles.roleid;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br />" . $row ["navn"]. ":  " . $row ["rolle"];
        }
    } else {
        echo "0 results";
    }

    ?>
    <h1>En tabel over users, email og rolle</h1>
    <table>
        <tr>
            <td>
                Navn
            </td>
            <td>
                Email
            </td>
        </tr>

        <?php
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //Choose content to acquire from table specific table
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td style='border:1px solid;'>";
                echo $row["navn"];
                echo "</td>";
                echo "<td style='border:1px solid'>";
                echo $row['email'];
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>

    </table>

		<h1>Enter values to insert into database</h1>

    <form action="index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">

        <?php
        //Choose content to acquire from table specific table
        // Variables are not strongly typed
        $navn = $_POST["name"];
        $email = $_POST["email"];

        $sql = "INSERT INTO `users` (`id`, `navn`, `email`, `password`) 
          VALUES (NULL, '$navn', '$email', 'test');";
        $result = $conn->query($sql);

        if ($result === true) {
            echo "New record successful";
        }else {
            echo "0 results";
        }


        $conn->close();
        ?>

    </form>
	</body>
</html>