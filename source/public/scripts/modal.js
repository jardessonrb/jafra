

export default function modalFavorite(){
    const modal = document.createElement("div");

    modal.innerHTML += `
        <div class="modal-favorites" id="modal-favorites">
            <h1>`+this.nameModal+`</h1>
        </div>
    `;


    return modal;
}



