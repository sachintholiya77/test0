<?php

$conn = mysqli_connect('localhost','root','','test_1',3306);

$query = "SELECT * FROM student";
$result = mysqli_query($conn,$query);

echo "<table>
        <thead> 
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
        </thead>
        <tbody>
";
while($row = mysqli_fetch_assoc($result)){
    echo '<tr>';
        echo '<td>'. $row['id']. '</td>';
        echo '<td>'. $row['name']. '</td>';
        echo '<td>'. $row['email']. '</td>';
        echo '<td>'. $row['age']. '</td>';
    echo '</tr>';
}
echo "</tbody></table>";
?>