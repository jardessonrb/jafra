<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= url("source/public/styles/style-effect-purchase.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= url("source/public/styles/global.css") ?>">
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
            <div class="content-main">
                <div class="data-delivery">
                    <div class="top"><h3>Dados do pedido</h3></div>
                    <div class="data-names">
                        <label for="input-name" class="label-inputs">Nome
                            <input class="input-data" id="input-name" placeholder="Digite seu nome" />
                        </label>
                        <label for="surname" class="label-inputs">Sobrenome
                            <input class="input-data" id="input-surname" placeholder="Digite seu sobrenome" />
                        </label>
                    </div>
                    <div class="data-adress">
                        <label class="label-inputs">Seu endereço</label>
                        <input class="input-data" id="input-andress" placeholder="Ex: Rua das Flores, N° 0000" />
                        <label class="label-inputs">Complemento (opcional)</label>
                        <input class="input-data" id="complement-andress" placeholder="Próximo ao Mercado X ..." />
                        <label class="label-inputs">Cidade</label>
                        <input class="input-data" id="city-andress" placeholder="Canadá" />
                    </div>
                    <div class="data-state">
                        <!-- AQUI NÃO VAI SER UM INPUT, VAI SER UM SELECT DE BUSCA -->
                        <label class="label-inputs">Estado
                            <input class="input-data" id="state-andress" placeholder="Ex: Piauí" />
                        </label>
                        <label class="label-inputs">CEP
                            <input class="input-data" id="cep-andress" placeholder="Ex: 333444-000" />
                        </label>
                    </div>
                    <div class="data-names">
                        <label for="input-name" class="label-inputs">Seu telefone
                            <input class="input-data" id="input-fone" placeholder="Ex: (95) 99300-0011" />
                        </label>
                        <label for="surname" class="label-inputs">E-mail
                            <input type="email" class="input-data" id="input-email" placeholder="Digite seu melhor e-mail" />
                        </label>
                    </div>
                    <div class="area-annotation-request">
                        <label class="label-inputs">Estado
                            <textarea class="input-data-area" placeholder="Meu pedido tem que ser entregue correto ..." ></textarea>
                        </label>    
                    </div>
                </div>
                <div class="sale-note-complet">
                    <div class="top"><h3>Nota do seu pedido</h3></div>
                    <div class="header">
                        <span class="name-header">Produtos</span>
                        <span class="name-header">Valores</span>
                    </div>
                    <div class="products-note">
                        <div class="products">
                            <span class="name-product">Vestido Malha veste Tam:38/40<span class="qnt"> x 2</span></span>
                            <span class="value-product">R$ 35.00</span>
                        </div>
                        <div class="products">
                            <span class="name-product">Vestido Malha veste Tam:38/40<span class="qnt"> x 2</span></span>
                            <span class="value-product">R$ 35.00</span>
                        </div>
                        <div class="products">
                            <span class="name-product">Vestido Malha veste Tam:38/40<span class="qnt"> x 2</span></span>
                            <span class="value-product">R$ 35.00</span>
                        </div>
                        <div class="products">
                            <span class="name-product">Vestido Malha veste Tam:38/40<span class="qnt"> x 2</span></span>
                            <span class="value-product">R$ 35.00</span>
                        </div>
                    </div>
                    <div class="subtotal">
                        <span class="note-label">Subtotal</span>
                        <span class="subvalue-total">R$ 105.00</span>
                    </div>

                    <div class="delivery-note">
                        <span class="note-label">Entrega</span>
                        <div class="locale-delivery">Sem local definido</div>
                    </div>

                    <div class="totale-request">
                        <span class="note-label">Total</span>
                        <div class="value-total">R$ 150.00</div>
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