<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= url("source/public/styles/style-product-specific.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= url("source/public/styles/style-favorites-modal.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= url("source/public/styles/style-login-modal.css") ?>" />
</head>
<body>
    <div class="container">
        <div class="modal" id="id-modal"></div>
        <div class="header">
        <!-- AQUI EU IMPORTO MEU HEADER, OU MENU, COMO COMPONENT -->
            <?php $this->insert("components/header"); ?>
        </div>
        <div class="container-content">
            <h1>redefinir senha ...</h1>
        </div>
    </div>
</body>
</html>