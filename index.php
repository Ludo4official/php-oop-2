<?php

require_once __DIR__ . '/Models/Prodotti.php';
require_once __DIR__ . '/Models/Categoria.php';

require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Gioco.php';
require_once __DIR__ . '/Models/Cuccia.php';


$categoriaCani = new Categoria('Cani', '&#128021');
$categoriaGatti = new Categoria('Gatti', '&#128008');


$prodotti[] = new Cibo (10, 20, $categoriaCani, 'https://www.ideashoppingcenter.it/files/archivio_Files/Foto/44645_2.JPG', 'Secco', '20/07/2030');
$prodotti[] = new Cuccia (30, 15, $categoriaGatti, 'https://croci.net/wp-content/uploads/2020/09/Cuccia_per_gatto_Glam.jpg', 'Comoda cuccia', '30x40cm');
$prodotti[] = new Cuccia (100, 5, $categoriaCani, 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/jackson/0/400/icon_topseller_1_85__0.jpg', 'Castello', '150x180cm');
$prodotti[] = new Cibo (5, 90, $categoriaGatti, 'https://m.media-amazon.com/images/I/71o3RIFoqrL._AC_SY355_PIbundle-48,TopRight,0,0_SH20_.jpg', 'Umido', '18/06/2025');
$prodotti[] = new Gioco (7, 50, $categoriaCani, 'https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=1764033096', 'Corda', 'Tessuto');
$prodotti[] = new Gioco (70, 25, $categoriaGatti, 'https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dw2e740ba3/images_dmail/large/509459l_1.jpg', 'Lenza', 'Plastica');
$prodotti[] = new Cibo (3, 85, $categoriaCani, 'https://www.cfadda.com/foto/foto_ftp/ING/3539370525303-000014923-01.jpg', 'Picnic MAXI', '12/09/2028');
$prodotti[] = new Cibo (3, 95, $categoriaGatti, 'https://qz-petshop.com/7109-home_default/vitakraft-snack-per-gatti-cat-stick-mini-classic-pollo-e-fegato-3x18-g.jpg', 'CatStick', '04/02/2027');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 2</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center">Gran Negozio per Animali</h1>
                </div>
            </div>
            <div class="row">
                <?php
                    foreach ($prodotti as $index => $ProdottiGenerici) {
                ?>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $ProdottiGenerici->immagine; ?>" class="card-img-top" alt="<?php echo $ProdottiGenerici->nome; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $ProdottiGenerici->nome; ?></h5>
                                <h6><?php echo $ProdottiGenerici->categoria->icona; ?>
                                    <?php echo $ProdottiGenerici->categoria->nome; ?>
                                </h6>
                                <p class="card-text"><?php echo $ProdottiGenerici->quantit??; ?> unit??</p>
                                <?php if (is_a($ProdottiGenerici, 'Cibo')) { ?>
                                <p>Scadenza: <?php echo $ProdottiGenerici->scadenza; ?></p>
                                <?php } ?>
                                <?php if (is_a($ProdottiGenerici, 'Cuccia')) { ?>
                                <p>Dimensione: <?php echo $ProdottiGenerici->dimensione; ?></p>
                                <?php } ?>
                                <?php if (is_a($ProdottiGenerici, 'Gioco')) { ?>
                                <p>Materiale: <?php echo $ProdottiGenerici->materiale; ?></p>
                                <?php } ?>
                                <?php if (is_a($ProdottiGenerici, 'Cibo')) { ?>
                                <p>Peso: <?php echo $ProdottiGenerici->getPeso(); ?></p>
                                <?php } ?>
                                <a href="#" class="btn btn-primary">$<?php echo $ProdottiGenerici->prezzo; ?></a>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                
            </div>
        </div>
    </body>
</html>