const Lista = document.getElementById("Lista");
const filtro = document.getElementById("paginacao");
const listOnibusCres = async (pagina)=>{
    const Valor_Lista = await fetch("./Lista_todos_Onibus.php?pagina="+ pagina);
    const resp = await Valor_Lista.text();
    Lista.innerHTML = resp; 
}
const listOnibusDecres = async (pagina)=>{
    console.log("Entrou descenfo");
    const Valor_Lista = await fetch("./Listar_onibus_decrescente.php?pagina="+ pagina);
    const resp = await Valor_Lista.text();
    Lista.innerHTML = resp; 
}
filtro.addEventListener("submit", async (e)=>{
    console.log("Entrou");
    Lista.innerHTML = "";
    if(document.getElementById("op").value =='c'){
        e.preventDefault();
        listOnibusCres(1);
        console.log("Entrou de vez");
    }
    else{
        e.preventDefault();
        listOnibusDecres(1);
        console.log("Entrou muinyo");
    }
});