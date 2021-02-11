<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= url("source/public/styles/style-product-specific.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= url("source/public/styles/global.css") ?>">
    <script type="text/javascript" src="<?= url("source/public/scripts/modal.js") ?>"></script>
    
    <link rel="stylesheet" href="<?= url("source/public/pages/components/styles/style-favorites-modal.css") ?>" />
    
</head>
<body>
    <div class="container">
        <div class="header">
        <!-- AQUI EU IMPORTO MEU HEADER, OU MENU, COMO COMPONENT -->
            <?php $this->insert("components/header"); ?>
        </div>
        <div class="container-content">
            <div class="modal" id="id-modal"></div>
            <div class="content-product">
                <div class="section-miniature-images">
                    <!-- EXEMPLO CHAMANDO UMA FUNÇÃO JAVASCRIPT PARA MUDAR AS IMAGENS DO PRODUTO -->
                    <img class="miniature-image" id="miniature-image1" onclick="Image.changeImage('miniature-image1')" src="<?= url('source/public/assets/produto04.jpg') ?>" alt="miniatura de imagem" />
                    <img class="miniature-image" id="miniature-image2" onclick="Image.changeImage('miniature-image2')" src="<?= url('source/public/assets/produto01.jpg') ?>" alt="miniatura de imagem" />
                    <img class="miniature-image" id="miniature-image3" onclick="Image.changeImage('miniature-image3')" src="<?= url('source/public/assets/produto05.jpg') ?>" alt="miniatura de imagem" />
                </div>
                <div class="information-product">
                    <img class="image-product" id="image-product" src="<?= url('source/public/assets/produto03.jpg') ?>" alt="imagem do produto" />
                    <div class="informations">
                        <strong class="name-product">Camisa PHP: TAM 40/42</strong>
                        <span class="value-product">R$ 55.99</span>
                        <span class="description-product">Camisa de algodão muito boa ...</span>
                        <span class="amount-stock">2 em estoque</span>
                        <button class="button">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="information-additional">
                <h2>Informações complementares</h2>
                <span class="information"><strong>Descrição:</strong> Muito boa essa camisa ...</span>
                <span class="information"><strong>Dimensões:</strong> 10 x 10 x 5 cm</span>
                <div class="references-product">
                    <span class="information"><strong>REF:</strong> 125485 /</span>
                    <span class="information"><strong>Categoria: </strong>Camisa</span>
                </div>
            </div>
            <div class="products-related">
                <h1>Produtos relacionados</h1>
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
                </div>
            </div>
        </div>
    </div>
</body>
</html>