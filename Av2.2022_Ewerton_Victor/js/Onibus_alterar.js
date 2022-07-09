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
        /*"Id:<input type= text name= 'id' value='' readonly ><br> Marca:<input type= text name= 'marca' value=''><br> Modelo:<input type= text name= 'modelo' value=''><br> Quatidade de Assentos:<input type= text name= 'qtdAssentos' value=''><br> Tem Banheiro:<input type= text name= 'TBanheiros' value=''><br> Tem Ar Condicionado:<input type= text name= 'TArCondionado' value=''><br> Chassis:<input type= text name= 'chassis' value=''><br> Placa:<input type= text name= 'placa' value=''><br><input type='submit' value='alterar'>";
        */
    }
});
TelaAlt.addEventListener("submit", async (e)=>{
    e.preventDefault();
    console.log("ENTROU PORRA");
    if(document.getElementById("marca").value ==="" || document.getElementById("modelo").value ==="" || document.getElementById("qtdAssentos").value ==="" || document.getElementById("TBanheiros").value ==="" || document.getElementById("TArCondionado").value ==="" || document.getElementById("chassis").value ===""  || document.getElementById("placa").value ===""){
        e.preventDefault();
        console.log("Erro: Necessario Preencher todos os campo nome");
        ErroCadastro.innerHTML = "Erro: Necessario Preencher todos os campo nome pra alterar";
    }else{
        e.preventDefault();
        ErroCadastro.innerHTML = "Alterado Com Sussesso";
        const Alt = new FormData(TelaAlt);
        Alt.append("add", 1);
        const dadosAlt2 = await fetch("./Alterar_Onibus.php",{
            method:"POST",
            body: Alt,
        });
        const respAlt2 = await dadosAlt2.text();
        TelaAlt.innerHTML = respAlt2;
    }
});