<html>
<head>
	<title>MySQL form</title>
</head>
<body>
	<?php
	$server = "localhost";
	$username = "refadi";
	$password = "refadi123";
	$dbname = "myDB";
	$con= new mysqli($server,$username,$password);
	if($con->connect_error) {
		die("Connection Failed: " .$con->connect_error);
	}
	if($con->select_db($dbname) == false) {
		$sql = "CREATE DATABASE ";
		if ($conn->query($sql) === TRUE) {
            echo "Database created successfully<br>";
        } 
        else {
            echo "Error creating database:<br> " . $conn->error;
        }
	}
	else {
		echo "Database Tersambung<br>";
	}
}
	$con= new mysqli($host,$username,$password,$dbname);
	if($con->query("CREATE TABLE address_book (
					No INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					Name VARCHAR(30) NOT NULL,
					Email VARCHAR(30) NOT NULL,
					Phone VARCHAR(15) NOT NULL,
					Date TIMESTAMP
					)") === TRUE) {
		echo "Table created successfully<br>";
	}
	else {
		echo "Error creating table <br>";
	}	
	?>
    <form action="" method="post">
        <div>
            <label><b>Name</b></label>
            <input type="text" name="name"/>
        </div>
        <div>
            <label><b>Email</b></label>
            <input type="text" name="email">
        </div>
        <div>
            <label><b>Phone</b></label>
            <input type="text" name="phone">
        </div>
        <div>
            <button type="submit" name="add">Submit</button>
        </div>
    </form>

    <form action="" method="post">
        <div>
            Update<br>
            Type<select name="kolom">
                <option value="1">Name</option><br>
                <option value="2">Email</option><br>
                <option value="3">Phone</option><br>
            </select>
            <input type="text" name="from">Asal</input>
            <input type="text" name="to">Ke</input>
            <button type="submit" value="Update" name="update" />
        </div>
        <div>
            No<input type="text" name="del" /><br />
            <button type="submit" value="Delete" name="dele" /><br />
        </div>

</body>
</html>