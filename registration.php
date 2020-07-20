<html>
    <body>
        <?php
            $id = uniqid();
            $name = $_POST["name"];
            $telno = $_POST["telno"];
            $email = $_POST["email"];

            $sex = $_POST['sex'];
            $race = $_POST['race'];;
            $state = $_POST['state'];;

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "205cde";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "INSERT INTO registry VALUES ('$id', '$name', $telno, '$email', '$sex', $race, $state);";

            if ($conn->query($sql) === TRUE) {
                /*echo "New record created successfully";*/
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

$conn->close();
        ?>
    </body>
</html>