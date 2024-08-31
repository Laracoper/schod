<?
require_once 'connect/connect.php';
require_once 'inc/header.php';

$id = $_GET['id'];

$sql = "SELECT * FROM masters WHERE `id` = '$id'";
$res = $pdo->prepare($sql);
$res->execute();
$master = $res->fetch(PDO::FETCH_ASSOC);

// print_r($_GET);
?>

<main class="container">
    <div class="cards d-flex flex-wrap justify-content-center gap-3">
        
                <div class="card" style="width: 28rem;">
                    <img src="assets/img/<?= $master['foto'] ?>" class="card-img-top" alt="women-img">
                    <div class="card-body">
                        <h5 class="card-title">имя: <?= $master['name'] ?></h5>
                        <p class="card-text">фамилия: <?= $master['surname'] ?></p>
                        <p class="card-text">почта: <?= $master['email'] ?></p>
                        <p class="card-text">номер телефона: <?= $master['phone'] ?></p>
                        <p class="card-text">описание: <?= $master['description'] ?></p>
                        
                    </div>
                </div>
       
    </div>
</main>

<? require_once 'inc/footer.php' ?>