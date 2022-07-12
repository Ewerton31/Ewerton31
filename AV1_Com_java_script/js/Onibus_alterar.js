const AltOnibus = document.getElementById("AltOnibus");
const ErroCadastro = document.getElementById("ErroCadastro");
const TelaAlt = document.getElementById("TelaAlt");

AltOnibus.addEventListener("submit", async (e)=>{
    if(document.getElementById("id").value ==="" ){
        e.preventDefault();
        console.log("Erro: Necessario Preencher todos os campo nome");
        ErroCadastro.innerHTML = "Erro: Necessario Preencher todos os campo nome";
    }else{
        e.preventDefault();
        const IdAlt = new FormData(AltOnibus);
        IdAlt.append("add", 1);
        const dadosAlt = await fetch("./pesquisar_onibus.php",{
            method:"POST",
            body: IdAlt,
        });
        const respAlt = await dadosAlt.text();
        TelaAlt.innerHTML = respAlt;
    }
});
TelaAlt.addEventListener("submit", async (e)=>{
    e.preventDefault();
    console.log("ENTROU PORRA");
    if(document.getElementById("marca").value ==="" || document.getElementById("modelo").value ==="" || document.getElementById("qtdAssentos").value ==="" || document.getElementById("TBanheiros").value ==="" || document.getElementById("TArCondionado").value ==="" || document.getElementById("chassis").value ===""  || document.getElementById("placa").value ===""){
        e.preventDefault();
        console.log("Erro: Necessario Preencher todos os campo nome");
        ErroCadastro.innerHTML = "Erro: Necessario Preencher todos os campos";
    }else{
        if((document.getElementById("TBanheiros").value == 'SIM' || document.getElementById("TBanheiros").value == 'NAO') && (document.getElementById("TArCondionado").value == 'SIM' || document.getElementById("TArCondionado").value =='NAO')){    
            e.preventDefault()
            ErroCadastro.innerHTML = "Alterado Com Sussesso";
            const Alt = new FormData(TelaAlt);
            Alt.append("add", 1);
            const dadosAlt2 = await fetch("./Alterar_Onibus.php",{
                method:"POST",
                body: Alt,
            });
            const respAlt2 = await dadosAlt2.text();
            TelaAlt.innerHTML = respAlt2;
        }else{
            e.preventDefault()
            console.log("ENTROU");
            ErroCadastro.innerHTML = "Digite SIM ou NAO Maiusculo";
        }
    }
});