<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= url("source/public/pages/components/styles/style-header.css") ?>">
    <script type="text/javascript" src="<?= url("source/public/scripts/test.js") ?>"></script>
</head>
    <body>
        <div class="container-header">
            <div class="header-options">
                <div class="logo">
                    <img class="image-logo" src="<?= url('source/public/assets/logo-store.png') ?>" alt="logo da loja">
                </div>
                <div class="options">
                    <img class="icone-image-options" src="<?= url('source/public/assets/shoping-cart.png') ?>" alt="icone carrinho">
                    <img class="icone-image-options" src="<?= url('source/public/assets/heart-favorites.png') ?>" alt="icone meus favoritos">
                    <img class="icone-image-options" src="<?= url('source/public/assets/search-product.png') ?>" alt="icone pesquisa">
                </div>
                <div class="area-login">
                    <img class="icone-image-login" src="<?= url('source/public/assets/user2.png') ?>" alt="imagem de login">
                    <a class="link-login link" href="#">Login</div>
                </div>
            </div>
            <div class="header-category">
                <a class="link-category" href="#">Inicio</a>
                <a class="link-category" href="#">Categoria 1</a>
                <a class="link-category" href="#">Categoria 1</a>
                <a class="link-category" href="#">Categoria 1</a>
                <a class="link-category" href="#">Categoria 1</a>
                <a class="link-category" href="#">Categoria 1</a>
                <a class="link-category" href="#">Categoria 1</a>
                <a class="link-category" href="#">Categoria 1</a>                    
            </div>
        </div>
        <section>
            <!-- AQUI FICA A IMPORTAÇÃO DA PARTE DO SITE QUE MUDA -->
            <?= $this->section("content"); ?>
        </section>
    </body>
</html>



