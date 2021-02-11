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