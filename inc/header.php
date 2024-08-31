

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?? 'page'?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="position-fixed w-100 z-3">
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark" style="padding: 0;">
            <div class="container-fluid py-2 bg-dark">
                <a class="navbar-brand" href="/">Servise-Pro</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="masters.php">Наши мастера</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Контакты</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>