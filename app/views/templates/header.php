<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?> - MVC PHP</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url; ?>/dist/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url; ?>/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="<?= base_url; ?>/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url; ?>/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url; ?>/vendors/fontawesome/fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url; ?>/dist/css/app.css">
    <link rel="shortcut icon" href="<?= base_url; ?>/dist/images/favicon.svg" type="image/x-icon">

    <style>
    </style>
</head>

<body>
    <div id="app">
    <div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3><?= $data['title']; ?></h3>
                    <p class="text-subtitle text-muted">An <?= $data['title']; ?> page</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url ?>/<?= $data['title']; ?>"><?= $data['title']; ?> Page</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Chat Application</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>