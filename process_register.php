
 <?php 
    session_start();
    $username = trim($_POST['membername']);
    $password = trim($_POST['password']);
    /* Create a new mysqli object with database connection parameters */
    $mysqli = mysqli_connect('localhost', 'root', '', 'gallery');

    if(mysqli_connect_errno()) 
    {
          echo "Connection Failed: " . mysqli_connect_errno();
          exit();
    }
       /* Create a prepared statement */
    if($stmt = $mysqli -> prepare("SELECT Member Name, Password,
    FROM member  
    WHERE Member Name=? AND Password=?"))
     {

          /* Bind parameters
             s - string, b - boolean, i - int, etc */
          $stmt -> bind_param("ss", $membername, $password);

          /* Execute it */
          $stmt -> execute();

          /* Bind results */
          $stmt -> bind_result($membername, $password);

          /* Fetch the value */

          if($stmt->fetch() == true)

            if ($stmt->affected_rows > 0) {
   
    $_SESSION['usrmsg'] =  "You have successfully registered";
		} else {
    $_SESSION['err'] =  "An error has occured!";
		}

	header("Location:index.php");



          /* Close statement */
          $stmt -> close();
       }

       /* Close connection */
       $mysqli -> close();
    ?>