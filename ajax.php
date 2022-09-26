<?php
$host = 'localhost';
$db = 'test';
$user = 'root';
$password = 'Qaz159';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);
	if ($pdo) {
		// echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}

$sql = "SELECT * FROM profile WHERE name like '%".$_POST['name']."%'";
$result = $pdo->query($sql);
foreach($result as $k => $v){
  echo "
    <tr>
    <td>".$v['id']."</td>
    <td>".$v['name']."</td>
    <td>".$v['age']."</td>
    </tr>
  ";
}



?>