<?PHP

// PDO method

// try {

//     $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpasswd);
//     // set the PDO error mode to exception
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "PDO Connected successfully"; 
//     }

// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }

// OO Method

    $db = mysqli_connect();
    $db = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);
    if ( $db->connect_error) {
    	die("Connection Terminated: " . $db->connect_error);
    } else {
    	echo "OOP Connected successfully";
    }

// mysqli Procedural method //

	// $db = mysqli_connect($dbhost, $dbuser, $dbpasswd, $dbname);
	// if(!$db) {
	// 	die("Connection Terminated: " . mysquli_error($db));
	// } else {
	// 	echo "Procedural Connection OK";
	// }


?>