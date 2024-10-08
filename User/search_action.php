<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$db = "daily_txn_book";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

// $user_name = $_POST['user_name'];
// $membership_id = $_POST['membership_id'];


// $sql = "SELECT * FROM user_info WHERE id = $user_name"; 
$query = "SELECT * FROM user_info"; 


if ($is_query_run = mysqli_query($conn,$query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = $is_query_run->fetch_assoc()) 
    { 
        // these four line is for four column 
        echo $query_executed['id'].' '; 
        echo $query_executed['username'].' '; 
        echo $query_executed['password'].' '; 
        echo $query_executed['mobile_no'].'<br>'; 
    } 
} 
else
{ 
    echo "Error in execution!"; 
} 

?>