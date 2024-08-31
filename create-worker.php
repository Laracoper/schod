<?

require_once 'connect/connect.php';





$regex = "/^[a-zа-яё\d]$/i";
if(empty($_POST['name']) && $_POST['name'] !== $regex){
    echo 'введите правильные данные';
    echo '<a href="/" class="btn btn-danger">вернуться</a>';
} else {
$sql = "INSERT INTO `create-worker` (`email`, `name`, `phone`) VALUES (?, ?, ?)";
$res = $pdo->prepare($sql);
$res->execute([$_POST['email'], $_POST['name'], $_POST['phone']]);
}

header('location: /');