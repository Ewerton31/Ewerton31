const Listum = document.getElementById("Listum");
const tbody = document.querySelector("tbody");
const ErroCadastro = document.getElementById("ErroCadastro");
Listum.addEventListener("submit", async (e)=>{
    
    if(document.getElementById("id").value ==="" ){
        e.preventDefault();
        console.log("Erro: Necessario Preencher todos os campo nome");
        ErroCadastro.innerHTML = "Erro: Necessario Preencher todos os campos";
    }else{
        ErroCadastro.innerHTML = "";
        e.preventDefault();
        const IdAlt = new FormData(Listum);
        IdAlt.append("add", 1);
        const dadosAlt = await fetch("./lista_um_onibus_funcion.php",{
            method:"POST",
            body: IdAlt,
        });
        const respAlt = await dadosAlt.text();
        tbody.innerHTML = respAlt;
    }
});