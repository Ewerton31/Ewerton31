const cadOnibus = document.getElementById("CadOnibus");
const ErroCadastro = document.getElementById("ErroCadastro");
cadOnibus.addEventListener("submit", async (e)=>{
    
    if(document.getElementById("marca").value ==="" || document.getElementById("modelo").value ==="" || document.getElementById("qtdAssentos").value ==="" || document.getElementById("TBanheiros").value ==="" || document.getElementById("TArCondionado").value ==="" || document.getElementById("chassis").value ===""  || document.getElementById("placa").value ===""){
        e.preventDefault();
        console.log("Erro: Necessario Preencher todos os campo nome");
        ErroCadastro.innerHTML = "Erro: Necessario Preencher todos os campo nome";
    }else{
        const dadosOnibus = new FormData(cadOnibus);
        dadosOnibus.append("add", 1);
        const dadosCad = await fetch("Cadastrar_onibus.php",{
        method:"POST",
        body: dadosOnibus,
        });
    }
});