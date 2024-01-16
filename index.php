<?php
require __DIR__ . '/data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
</head>

<body>

    <div class="container ">
        <div class="row">
            <h2>

                prodotti in vendita
            </h2>
        </div>
        <div class="row">
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>
                                    <?= $prodotto->name ?>
                                </h5>
                            </div>
                            <div class="card-txt">
                                <p>
                                    <?= $prodotto->price ?>
                                    <?= $prodotto->category->animal ?>
                                    <?= $prodotto->description ?>
                                    <?= $prodotto->img ?>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</body>

</html>