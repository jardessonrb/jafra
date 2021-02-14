<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= url("source/public/styles/style-redefine-password.css") ?>">
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
        <div class="container-content-redefine">
            <div class="content-main-redefine">
                <span class="title-reset-password">Redefinir Senha</span>
                <p class="instruction-action">
                    Abaixo digite seu e-mail que está cadastrado nesse site.
                    Caso não tenha e-mail nesse site, <a class="link-register-login" onclick="Modal.openModalLogin()" >Click Aqui !</a>
                    Logo em seguida você receberá um e-mail com um link. 
                    Ao clicar no link você será redirecionado a uma página para redefinir sua super senha.
                </p>
                <div class="area-input-email">
                    <label class="label-redefine">Seu melhor E-mail</label>
                    <input type="email" class="input-redefine" id="email-user" placeholder="Seu e-mail"/>
                    <button class="button-redefine">Recuperar minha senha</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>