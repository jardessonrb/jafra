const Modal = {
    openModalFavorites(){
        const divModal = document.getElementById('id-modal');
        divModal.classList.add("absolut-view");
        const divMain  = document.createElement('div');
        // src="http://localhost/jafra/source/public/assets/produto04.jpg"
        
        divMain.innerHTML += `
            <div class="content">
                <div class="header-modal">
                    <button class="close-modal" onclick="Modal.closeModal()"><span>X</span></button>
                    <span class="title-modal">Meus Favoritos</span>
                </div>
                <div class="content-modal" id="content-modal">
                    <div class="item-product-modal" id="1">
                        <img class="miniature-image-modal" src="http://localhost/jafra/source/public/assets/produto04.jpg" />
                        <div class="datas-product-modal">
                            <span class="name-product">Camisa Python</span>
                            <span class="value-product">R$ 35.00
                                <span class="qnt-stock">- 1 em estoque</span>
                            </span>
                            <button class="button-modal-purchase">Comprar</button>
                        </div>
                        <div class="area-button-remove">
                            <span class="button-remove" onclick="Modal.removeProduct('1')">X</span>
                        </div>
                    </div>

                    <div class="item-product-modal" id="2">
                        <img class="miniature-image-modal" src="http://localhost/jafra/source/public/assets/produto05.jpg" />
                        <div class="datas-product-modal">
                            <span class="name-product">Camisa Java</span>
                            <span class="value-product">R$ 35.00
                                <span class="qnt-stock">- 1 em estoque</span>
                            </span>
                            <button class="button-modal-purchase">Comprar</button>
                        </div>
                        <div class="area-button-remove">
                            <span class="button-remove" onclick="Modal.removeProduct('2')">X</span>
                        </div>
                    </div>

                    <div class="item-product-modal" id="3">
                        <img class="miniature-image-modal" src="http://localhost/jafra/source/public/assets/produto03.jpg" />
                        <div class="datas-product-modal">
                            <span class="name-product">Camisa PHP</span>
                            <span class="value-product">R$ 35.00
                                <span class="qnt-stock">- 1 em estoque</span>
                            </span>
                            <button class="button-modal-purchase">Comprar</button>
                        </div>
                        <div class="area-button-remove">
                            <span class="button-remove" onclick="Modal.removeProduct('3')">X</span>
                        </div>
                    </div>
                </div>
            </div>
        `;

        divMain.classList.add("content-modal");

        document.body.style.overflow = 'hidden';

        divModal.appendChild(divMain);
    },
    
    openModalLogin(){
       
        const divModal = document.getElementById('id-modal');
        const divMain  = document.createElement('div');
        divModal.classList.add("absolut-view");
        
        divMain.innerHTML += `
        <div class="container-content-modal">
            <div class="area-button-close">
                <button class="close-modal" onclick="Modal.closeModal()"><span>X</span></button>
            </div> 
            <div class="modal-top-login">
                <img class="image-top-login" src="http://localhost/jafra/source/public/assets/login03.png"/>
            </div>
            <div class="content-main-modal">
                <label class="modal-label">Seu super usuário</label>
                <input class="modal-input" id="name-user" placeholder="Seu usuário"/>
                <label class="modal-label">Sua super senha</label>
                <input type="password" class="modal-input" id="password-user" placeholder="Sua senha"/>
                <button class="modal-button">Entrar na minha super conta</button>
                <div class="area-redefine-password">
                    <a class="link-redefine-password" href="http://localhost/jafra/redefinir-senha">Redefinir super senha</a>
                </div>
            </div>
        </div>
        `;

        divMain.classList.add("content-modal");

        document.body.style.overflow = 'hidden';
        divModal.appendChild(divMain);

    },





    closeModal(){
        const divModal = document.getElementById('id-modal');
        divModal.classList.remove("absolut-view");
        divModal.innerText = "";
    },

    removeProduct(idProductFavorite){
        const productId = document.getElementById(idProductFavorite);
        const divContent = document.getElementById('content-modal');

        divContent.removeChild(productId);
    }
}


























// export default function modalFavorite(){
//     const modal = document.createElement("div");

//     modal.innerHTML += `
//         <div class="modal-favorites" id="modal-favorites">
//             <h1>`+this.nameModal+`</h1>
//         </div>
//     `;


//     return modal;
// }



