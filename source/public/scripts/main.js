const Image = {

    changeImage(idImageMini){
        var miniatureImage = document.getElementById(idImageMini);
        var productImage = document.getElementById("image-product");
        var miniatureTemp = miniatureImage.src;
        var imageTemp = productImage.src;

        miniatureImage.src = imageTemp;
        productImage.src = miniatureTemp;
    }
}


const Main = {

    qntPro(func){
        var num = document.getElementById("amount-product-qnt");
        var val = 1.0 * num.innerText;

        if(func === "plus")
        {
            val++;
        }else{
            val--;
        }

        (val < 1) ? num.innerHTML = 1 : num.innerHTML = val;
    },

    removeProductShoppingCart(idItemProduct){
        const containerProduct = document.getElementById("container-products");
        const itemProductCart = document.getElementById(idItemProduct);

        containerProduct.removeChild(itemProductCart);
    }
}


