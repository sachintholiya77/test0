<?php
    
    $host = "localhost";
    $user = "root";
    $password = "";
    $db_name="test_3";
    $con = mysqli_connect($host,$user,$password,$db_name);
    $query ="SELECT * FROM user";
    $result = mysqli_query($con,$query);
    echo "
        <table border=1>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Usertype</th>
            </tr>
    ";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "
            <tr>
                <td>".$row["id"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["country"]."</td>
                <td>".$row["password"]."</td>
            </tr>
        ";
    }
    echo "</table>";
?>