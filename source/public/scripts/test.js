const dados = [
    {
        id: 0,
        nome: "Nome de alguem",
        idade: 21,
        descrip: "Nada a dizer nesse lugar aqui"
    },
    {
        id: 0,
        nome: "Nome de alguem",
        idade: 21,
        descrip: "Nada a dizer nesse lugar aqui"
    },
    {
        id: 0,
        nome: "Nome de alguem",
        idade: 21,
        descrip: "Nada a dizer nesse lugar aqui"
    },
    {
        id: 0,
        nome: "Nome de alguem",
        idade: 21,
        descrip: "Nada a dizer nesse lugar aqui"
    },
    {
        id: 0,
        nome: "Nome de alguem",
        idade: 21,
        descrip: "Nada a dizer nesse lugar aqui"
    },
    {
        id: 0,
        nome: "Nome de alguem",
        idade: 21,
        descrip: "Nada a dizer nesse lugar aqui"
    },
];

const product = document.getElementById("content");
function add(div) {
    product.appendChild(div);
}

function myFunction(){
    const div = document.createElement("div");
    const nome = document.createElement("p"); 
    const idade = document.createElement("p"); 
    const descrip = document.createElement("p"); 


    dados.forEach((v, i) => {
        const hum = " ";
        nome.innerHTML = v.nome;
        idade.innerHTML = v.idade;
        descrip.innerHTML = v.descrip;

        div.classList = "element-product";

        div.appendChild(nome);
        div.appendChild(idade);
        div.appendChild(descrip);

        add(div);

    });


}