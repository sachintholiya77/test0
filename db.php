<?php
$conn = mysqli_connect('localhost','root','','test_3',3306);

$query = "select * from user";

$result= mysqli_query($conn,$query);

// $users = mysqli_fetch_all($result,MYSQLI_ASSOC);

// echo json_encode($users);


    
    echo "<table>
           <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
           </thead><tbody>
    ";
    while($row = mysqli_fetch_assoc($result)){
        echo "
            <tr>
                <td>" . $row['id']."</td>
                <td>" . $row['name']."</td>
                <td>" . $row['email']."</td>
            </tr>
        ";
    }
    
    echo "</tbody></table>";


?>