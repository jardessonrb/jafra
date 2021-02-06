<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= url("source/public/styles/style-home.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= url("source/public/styles/global.css") ?>">
    <script type="text/javascript" src="<?= url("source/public/scripts/test.js") ?>"></script>
</head>
    <body>
        <div class="container">
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
            <div class="container-content">
                <div class="content-main">
                    <div class="product-showcase-list">
                        <img class="imagem-product-list" src="<?= url('source/public/assets/produto03.jpg') ?>" alt="imagem do produto" />
                        <span class="name-product-list">Camisa PHP: TAM 40/42</span>
                        <span class="value-product-list">R$ 55.99</span>
                    </div>
                    <div class="product-showcase-list">
                        <img class="imagem-product-list" src="<?= url('source/public/assets/produto01.jpg') ?>" alt="imagem do produto" />
                        <span class="name-product-list">Camisa PHP: TAM 40/42</span>
                        <span class="value-product-list">R$ 55.99</span>
                    </div>
                    <div class="product-showcase-list">
                        <img class="imagem-product-list" src="<?= url('source/public/assets/produto03.jpg') ?>" alt="imagem do produto" />
                        <span class="name-product-list">Camisa PHP: TAM 40/42</span>
                        <span class="value-product-list">R$ 55.99</span>
                    </div>
                    <div class="product-showcase-list">
                        <img class="imagem-product-list" src="<?= url('source/public/assets/produto04.jpg') ?>" alt="imagem do produto" />
                        <span class="name-product-list">Camisa PHP: TAM 40/42</span>
                        <span class="value-product-list">R$ 55.99</span>
                    </div>
                    <div class="product-showcase-list">
                        <img class="imagem-product-list" src="<?= url('source/public/assets/produto05.jpg') ?>" alt="imagem do produto" />
                        <span class="name-product-list">Camisa PHP: TAM 40/42</span>
                        <span class="value-product-list">R$ 55.99</span>
                    </div>
                    <div class="product-showcase-list">
                        <img class="imagem-product-list" src="<?= url('source/public/assets/produto03.jpg') ?>" alt="imagem do produto" />
                        <span class="name-product-list">Camisa PHP: TAM 40/42</span>
                        <span class="value-product-list">R$ 55.99</span>
                    </div>
                </div>
                <div class="content-second">
                    <div class="best-sellers-store">
                        <div class="best-sellers-top">
                            <strong>Mais vendidos da loja</strong>
                        </div>
                        <div class="content-main">
                            <div class="product-showcase-list">
                                <img class="imagem-product-list" src="<?= url('source/public/assets/produto01.jpg') ?>" alt="imagem do produto" />
                                <span class="name-product-list">Camisa Masculina Node JS: TAM 40/42</span>
                                <span class="value-product-list">R$ 30.00</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
