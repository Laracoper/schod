<?
require 'connect/connect.php';
require 'inc/header.php';

$sql = 'SELECT * FROM masters';
$res = $pdo->prepare($sql);
$res->execute();
$masters = $res->fetchAll(PDO::FETCH_ASSOC);

?>

<main class="container">
    <div class="cards d-flex flex-wrap justify-content-center gap-3">
        <? if (!empty($masters)) { ?>
            <? foreach ($masters as $master) { ?>
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/<?= $master['foto'] ?>" class="card-img-top" alt="women-img">
                    <div class="card-body">
                        <h5 class="card-title"><?= $master['name'] ?></h5>
                        <p class="card-text"><?= $master['description'] ?></p>
                        <a href="master-id.php?id=<?= $master['id'] ?>" class="btn btn-primary">показать</a>
                    </div>
                </div>
            <? } ?>
        <? } else { ?>
            <div class="alert alert-success" role="alert">
                Пока нет слесарей, хотите
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    устроиться на работу
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">заполните форму для связи</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="create-worker.php" method="post">
                                    <div class="form-floating mb-3">
                                        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="e-mail" required>
                                        <label for="floatingInput">Е-mail</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Ваше имя" required>
                                        <label for="floatingInput">Ваше имя</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input name="phone" type="text" class="form-control" id="floatingInput" placeholder="номер телефона" required>
                                        <label for="floatingInput">Номер телефона</label>
                                    </div>
                                    <button type="submit" class="btn btn-success">Отправить</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <? } ?>
    </div>
</main>

<? require_once 'inc/footer.php' ?>