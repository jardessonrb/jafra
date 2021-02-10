<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= url("source/public/styles/style-shopping-cart.css") ?>">
    <script type="text/javascript" src="<?= url("source/public/scripts/test.js") ?>"></script>
</head>
<body>
    <div class="container">
        <div class="header">
        <!-- AQUI EU IMPORTO MEU HEADER, OU MENU, COMO COMPONENT -->
            <?php $this->insert("components/header"); ?>
        </div>
        <div class="container-content">
            <div class="process-shopping">
                Por enquanto está vazia ....
            </div>
            <div class="shopping-cart">
                <div class="products-cart">
                    <div class="nada" >
                        <div class="products-cart-top">
                            <h3 class="headers">PRODUTOS</h3>
                            <div class="agroup-headers">
                                <h3 class="headers">PREÇO</h3>
                                <h3 class="headers">QUANTIDADE</h3>
                                <h3 class="headers">TOTAL</h3>
                            </div>
                        </div>
                        <div class="products-cart-main">
                            <div class="products-cart-item">
                                <span class="item-remove" onclick="alert('produto removido')">x</span>
                                <img class="miniature-image" src="<?= url('source/public/assets/produto03.jpg') ?>" alt="miniatura de imagem" />
                                <strong class="name-product">Camisa PHP: TAM 40/42</strong>
                            </div>
                            <div class="products-cart-values">
                                <span class="value-product">R$ 55.99</span>
                                <div class="amount-product">
                                    <span class="amount-product-qnt" id="amount-product-qnt">1</span>
                                    <div class="agroup-count">
                                        <button class="amount-product-plus" onclick="qntPro('plus')">+</button>
                                        <button class="amount-product-less" onclick="qntPro('less')">-</button>
                                        <!-- <span class="amount-product-plus">+</span> -->
                                        <!-- <span class="amount-product-less">-</span> -->
                                    </div>
                                </div>
                                <span class="subtotal-product">R$ 55.99</span>
                            </div>
                        </div>
                        
                        <!-- TESTANDO COMO FICA COM MUITOS PRODUTOS -->

                        <div class="products-cart-main">
                            <div class="products-cart-item">
                                <span class="item-remove" onclick="alert('produto removido')">x</span>
                                <img class="miniature-image" src="<?= url('source/public/assets/produto03.jpg') ?>" alt="miniatura de imagem" />
                                <strong class="name-product">Camisa PHP: TAM 40/42</strong>
                            </div>
                            <div class="products-cart-values">
                                <span class="value-product">R$ 55.99</span>
                                <div class="amount-product">
                                    <span class="amount-product-qnt" id="amount-product-qnt">1</span>
                                    <div class="agroup-count">
                                        <button class="amount-product-plus" onclick="qntPro('plus')">+</button>
                                        <button class="amount-product-less" onclick="qntPro('less')">-</button>
                                        <!-- <span class="amount-product-plus">+</span> -->
                                        <!-- <span class="amount-product-less">-</span> -->
                                    </div>
                                </div>
                                <span class="subtotal-product">R$ 55.99</span>
                            </div>
                        </div>
                    </div>

                    <div class="area-button-update">
                        <button class="button">Atualizar carrinho</button>
                    </div>
                </div>
                <div class="sale-note">
                    <h1>NOTA DO CARRINHO</h1>
                    <div class="subtotal-sale">
                        <span class="field-name">Subtotal:</span> 
                        <span class="value-field">R$ 112.00</span>
                    </div>
                    <div class="delivery-sale">
                        <span class="field-name">CEP:</span>
                        <input class="input-cep" id="input-cep" placeholder="Digite seu cep"/>
                        <img class="icone-image-search-cep" src="<?= url('source/public/assets/search-product.png') ?>" alt="icone pesquisa">

                        <div class="delivery-address" hidden=""></div>

                    </div>
                    
                    <div class="total-sale">
                        <span class="field-name">Valor Total:</span> 
                        <span class="value-field">R$ 112.00</span>
                    </div>
                    <div class="area-button-update">
                        <button class="button">CONCLUIR COMPRA</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>

