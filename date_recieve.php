<?php
$name=filter_input(INPUT_POST,'name');

$data=$_POST['data'];
include('functions.php');
$pdo = connect_to_db();
$sql = 'UPDATE studyselfnote SET noteindex=:jsondata, updated_at=now() WHERE id=3';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':jsondata', $name, PDO::PARAM_STR);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

exit();

?>
