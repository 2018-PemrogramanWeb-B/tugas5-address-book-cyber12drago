<?php
    /*Insert table start*/
    if(isset($_POST["add"])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        if($con->query("INSERT INTO my_db (Name,Email,Phone)
                        VALUES ('".$name."','".$email."','".$phone."')")==true) {
            echo "Data successfully added<br>";
        }
        else echo "Cannot added data";
    }

    if(isset($_POST["show"])) {
        $sql="SELECT No, Name, Email, Phone FROM my_db";
        $table=mysqli_query($con,$sql);
        if(mysqli_num_rows($table)>0) {
            echo "<table border='1'>
                    <tr><th>No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                    </tr>";
            while($row=mysqli_fetch_assoc($table)) {
                echo "<tr><td>".$row["No"]."</td><td>".$row["Name"]."</td><td>".$row["Email"]"</td><td>".$row["Phone"]."</td></tr>";
            }
        }
        else {
            echo "Error<br>";
        }
    }
    /*Insert table end*/
    /*Delete table start*/
    if(isset($_POST["dele"])) {
 //       $todel=$_POST('del');
        if($con->query("DELETE FROM my_db WHERE No=".$_POST["dele"]."")==true) {
            echo "Data successfully deleted<br>";
        }
    }
    /*Delete table end*/
    /*Update table start*/
    if(isset($_POST["update"])) {
        $from=$_POST["from"];
        $to=$_POST["to"];
        if($_POST["kolom"]) {
            $val=$_POST["kolom"];
            if($val==1) {
                $kolom="Name";
            }
            else if($val==2) {
                $kolom="Email";
            }
            else if($val==3) {
                $kolom="Phone";
            }
            if($con->query("UPDATE my_db
                            SET ".$kolom." = '".$to."'
                            WHERE ".$kolom." = '".$from."'")==true) {
                echo "Data $from->$to successfully updated<br>";
            }
            else {
                echo "Data $from->$to failed<br>";
            }
        }
    }
        /*Update table end*/
?>