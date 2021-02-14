<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= url("source/public/pages/components/styles/style-header.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= url("source/public/pages/components/styles/style-search-product.css") ?>">
    <script type="text/javascript" src="<?= url("source/public/scripts/main.js") ?>"></script>
    <script type="text/javascript" src="<?= url("source/public/scripts/modal.js")?>"></script>
    <script type="text/javascript" src="<?= url("source/public/scripts/search.js")?>"></script>
</head>
    <body>
        <div class="container-header">
            <div class="header-options" id="header-options">
                <div class="logo">
                    <img class="image-logo" src="<?= url('source/public/assets/logo-store.png') ?>" alt="logo da loja">
                </div>
                <div class="options" id="options">
                    <a href="<?= url("carrinho") ?>"><img class="icone-image-options" src="<?= url('source/public/assets/shoping-cart.png') ?>" alt="icone carrinho"></a>
                    <img class="icone-image-options" id="icone-favorite" onclick="Modal.openModalFavorites()" src="<?= url('source/public/assets/heart-favorites.png') ?>" alt="icone meus favoritos">
                    <img class="icone-image-options" onclick="Search.searchProduct()" src="<?= url('source/public/assets/search-product.png') ?>" alt="icone pesquisa">
                </div>
                <div class="area-login" id="area-login">
                    <img class="icone-image-login" onclick="Modal.openModalLogin()" src="<?= url('source/public/assets/user2.png') ?>" alt="imagem de login">
                    <a class="link-login link" onclick="Modal.openModalLogin()" href="#">Login</div>
                </div>
            </div>
            <div class="header-category">
                <a class="link-category" href="<?= url() ?>">Inicio</a>
                <a class="link-category" href="#">Categoria 1</a>
                <a class="link-category" href="#">Categoria 1</a>
                <a class="link-category" href="#">Categoria 1</a>
                <a class="link-category" href="#">Categoria 1</a>
                <a class="link-category" href="#">Categoria 1</a>
                <a class="link-category" href="#">Categoria 1</a>
                <a class="link-category" href="#">Categoria 1</a>                    
            </div>
        </div>
        
        
    </body>
</html>






