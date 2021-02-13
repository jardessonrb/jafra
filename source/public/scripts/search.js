const Search = {

    searchProduct(){
        // alert("buscar produto");

        const divHeader = document.getElementById('header-options');
        const areaLogin = document.getElementById('area-login');
        const divSearchMain = document.createElement("search");
        divSearchMain.id = "search";
        const divSearch = document.createElement("div");
        divSearch.classList.add("main-search");
        options.style.display = "none";

        divSearch.innerHTML = `

        <div class="content-input">
            <input type="text" class="input-search" onkeyup="" placeholder="Digite qual produto você deseja" />
            <span class="button-close-search" onclick="Search.closeSearchProduct()">X</span>
        </div>
        <div class="content-result-search" id="content-result-search"></div>
        
        `;

        divSearchMain.appendChild(divSearch);

        divHeader.insertBefore(divSearchMain, areaLogin);
    },


    closeSearchProduct(){
        const divSearch = document.getElementById('search');
        const divHeader = document.getElementById('header-options');

        divHeader.removeChild(divSearch);

        options.style.display = "flex";

    }
}