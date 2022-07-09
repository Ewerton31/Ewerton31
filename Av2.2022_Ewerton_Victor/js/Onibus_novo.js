const cadOnibus = document.getElementById("CadOnibus");
const ErroCadastro = document.getElementById("ErroCadastro");
cadOnibus.addEventListener("submit", async (e)=>{
    if(document.getElementById("id").value ==="" ||document.getElementById("marca").value ==="" || document.getElementById("modelo").value ==="" || document.getElementById("qtdAssentos").value ==="" || document.getElementById("TBanheiros").value ==="" || document.getElementById("TArCondionado").value ==="" || document.getElementById("chassis").value ===""  || document.getElementById("placa").value ===""){
        e.preventDefault();
        console.log("Erro: Necessario Preencher todos os campo nome");
        ErroCadastro.innerHTML = "Erro: Necessario Preencher todos os campo nome";
    }else{
        /*if((document.getElementById("TBanheiros").value == 1 || document.getElementById("TBanheiros").value == 0) && (document.getElementById("TArCondionado").value == 1 || document.getElementById("TArCondionado").value ==0)){*/    
        if((document.getElementById("TBanheiros").value == 'SIM' || document.getElementById("TBanheiros").value == 'NAO') && (document.getElementById("TArCondionado").value == 'SIM' || document.getElementById("TArCondionado").value =='NAO')){
            console.log("Entrou");
            const dadosOnibus = new FormData(cadOnibus);
            dadosOnibus.append("add", 1);
            const dadosCad = await fetch("Cadastrar_onibus.php",{
            method:"POST",
            body: dadosOnibus,
            });
        }else{
            e.preventDefault()
            console.log("ENTROU");
            ErroCadastro.innerHTML = "Digite SIM ou NAO Maiusculo";
        }
    }
});
