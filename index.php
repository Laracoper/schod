<?

require 'connect/connect.php';
require 'inc/header.php';

$sql = 'SELECT * FROM masters';
$res = $pdo->prepare($sql);
$res->execute();
$masters = $res->fetchAll(PDO::FETCH_ASSOC);

$title = 'главная';
?>


<main class="container padding">
    <!-- WS2wGmjY -->
    <div class="hero mb-3">
        <img src="assets/img/bmw-x-series-x6-m60i-ms-sportpackage.jpg" class="img-fluid" alt="bmv-image">
    </div>
    <div class="text">
        <h1 class="text__title">Hello BMV-club</h1>
        <div class="alert alert-success" role="alert">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                устроиться на работу
            </button>

            <!-- Modal -->

            <div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog mt-5">
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
        <p class="text__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat cum, quisquam delectus totam aliquid libero aut incidunt. Labore illum perspiciatis veniam et? Tenetur dolorem quisquam soluta at delectus magni, sunt impedit suscipit aperiam aspernatur explicabo distinctio dignissimos doloribus natus eos corporis assumenda ullam maiores nesciunt nisi? Nemo ad ut enim.</p>
    </div>
</main>

<? require_once 'inc/footer.php' ?>