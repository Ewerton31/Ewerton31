const onibus = document.getElementById("onibus");
const ErroCadastro = document.getElementById("ErroCadastro");
const Listum = document.getElementById("Listum");
const Tela_listar_todos_Onibus = document.getElementById("Tela_listar_todos_Onibus");
const listOnibus_1 = document.getElementById("listOnibus_1");
const Cadastrar = document.getElementById("Cadastrar");
const cadOnibus = document.getElementById("cadOnibus");
const TelaAltOnibus = document.getElementById("TelaAltOnibus");
const AltOnibus = document.getElementById("AltOnibus");
const TelaAlt = document.getElementById("TelaAlt");
const filtro = document.getElementById("filtro");
const titulo = document.getElementById("titulo");
const listOnibus = async (pagina)=>{
    const Valor_Lista = await fetch("./Lista_todos_Onibus.php?pagina="+ pagina);
    const resp = await Valor_Lista.text();
    onibus.innerHTML = resp; 
}
const listOnibusDecres = async (pagina)=>{
    console.log("Entrou descenfo");
    const Valor_Lista = await fetch("./Listar_onibus_decrescente.php?pagina="+ pagina);
    const resp = await Valor_Lista.text();
    onibus.innerHTML = resp; 
}
Tela_listar_todos_Onibus.addEventListener("submit", async (e)=>{
    TelaAlt.innerHTML = "";
    AltOnibus.innerHTML = "";
    cadOnibus.reset();
    cadOnibus.innerHTML = "";
    Listum.innerHTML ="";
    ErroCadastro.innerHTML = "";
    onibus.innerHTML = "";
    Cadastrar.reset();
    e.preventDefault();
    titulo.innerHTML = "Listar todos onibus";
    filtro.innerHTML = "<form id= 'filtro'><label>Ordenar</label><select name='Ordem' value='' id='ordenar'><option value='c'>Crescente</option><option value='d'>Decrescente</option></select><input type='submit' value='Filtrar'></form>";
    listOnibus(1);
});
filtro.addEventListener("submit", async (e)=>{
    console.log("Entrou graca a deus");
    TelaAlt.innerHTML = "";
    AltOnibus.innerHTML = "";
    cadOnibus.reset();
    cadOnibus.innerHTML = "";
    Listum.innerHTML ="";
    ErroCadastro.innerHTML = "";
    onibus.innerHTML = "";
    e.preventDefault();
    console.log(document.getElementById("ordenar").value);
    if(document.getElementById("ordenar").value =='c'){
        e.preventDefault();
        listOnibus(1);
        console.log("Entrou de vez");
    }
    else{
        e.preventDefault();
        listOnibusDecres(1);
        console.log("Entrou muinyo");
    }
});
listOnibus_1.addEventListener("submit", async (e)=>{
    filtro.innerHTML ="";
    TelaAlt.innerHTML ="";
    AltOnibus.innerHTML = "";
    e.preventDefault();
    cadOnibus.reset();
    cadOnibus.innerHTML = "";
    Listum.innerHTML ="";
    onibus.innerHTML = "";
    ErroCadastro.innerHTML = "";
    titulo.innerHTML = "Listar um onibus";
    Cadastrar.reset();
    Listum.innerHTML = "Digite a Id que deseja Exibir:<input type= number name= 'id' value='' id='id'><input type='submit' value='Pesquisar'>";
});
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
        onibus.innerHTML = respAlt;
    }
});
Cadastrar.addEventListener("submit", async (e)=>{
    console.log("O problema desta merda DE VERDADE");
    TelaAlt.innerHTML ="";
    AltOnibus.innerHTML = "";
    cadOnibus.reset();
    e.preventDefault();
    Listum.innerHTML ="";
    ErroCadastro.innerHTML = "";
    onibus.innerHTML = "";
    filtro.innerHTML ="";
    titulo.innerHTML = "Cadastrar onibus";
    cadOnibus.innerHTML = "Id:<input type= number name= 'id' value='' id='id'><br> Marca:<input type= text name= 'marca' value='' id='marca'><br> Modelo:<input type= text name= 'modelo' value='' id='modelo'><br>Quatidade de Assentos:<input type= number name= 'qtdAssentos' value='' id='qtdAssentos'><br> Tem Banheiro:<input type= text name= 'TBanheiros' value='' id='TBanheiros' placeholder='Digite SIM/NAO maiusculo'><br> Tem Ar Condicionado:<input type= text name= 'TArCondionado' value='' id='TArCondionado' placeholder='Digite SIM/NAO maiusculo'><br> Chassis:<input type= text name= 'chassis' value='' id='chassis'><br> Placa:<input type= text name= 'placa' value='' id='placa'><br> <input type='submit' value='Cadastrar'>";
});
cadOnibus.addEventListener("submit", async (e)=>{
    if(document.getElementById("id").value ==="" ||document.getElementById("marca").value ==="" || document.getElementById("modelo").value ==="" || document.getElementById("qtdAssentos").value ==="" || document.getElementById("TBanheiros").value ==="" || document.getElementById("TArCondionado").value ==="" || document.getElementById("chassis").value ===""  || document.getElementById("placa").value ===""){
        e.preventDefault();
        ErroCadastro.innerHTML = "Erro: Necessario Preencher todos os campo nome";
    }else{
        /*if((document.getElementById("TBanheiros").value == 1 || document.getElementById("TBanheiros").value == 0) && (document.getElementById("TArCondionado").value == 1 || document.getElementById("TArCondionado").value ==0)){*/    
            if((document.getElementById("TBanheiros").value == 'SIM' || document.getElementById("TBanheiros").value == 'NAO') && (document.getElementById("TArCondionado").value == 'SIM' || document.getElementById("TArCondionado").value =='NAO')){
                e.preventDefault();
                const dadosOnibus = new FormData(cadOnibus);
                dadosOnibus.append("add", 1);
                const dadosCad = await fetch("./Cadastrar_onibus.php",{
                method:"POST",
                body: dadosOnibus,
                });
                const respcad = await dadosCad.text();
                ErroCadastro.innerHTML = respcad; 
                cadOnibus.reset();
                Cadastrar.reset();
        }else{
            e.preventDefault()
            ErroCadastro.innerHTML = "Digite SIM ou NAO Maiusculo";
        }
    }
});
TelaAltOnibus.addEventListener("submit", async (e)=>{
    Cadastrar.reset();
    e.preventDefault();
    cadOnibus.reset();
    cadOnibus.innerHTML = "";
    AltOnibus.innerHTML = "";
    onibus.innerHTML = "";
    Listum.innerHTML ="";
    ErroCadastro.innerHTML = "";
    filtro.innerHTML ="";
    titulo.innerHTML = "Alterar onibus";
    AltOnibus.innerHTML = " Digite a Id que deseja alterar:<input type= number name= 'id' value='' id='id'><input type='submit' value='Pesquisar'>";
});
AltOnibus.addEventListener("submit", async (e)=>{
    ErroCadastro.innerHTML = "";
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
    console.log("ENTROU");
    if(document.getElementById("marca").value ==="" || document.getElementById("modelo").value ==="" || document.getElementById("qtdAssentos").value ==="" || document.getElementById("TBanheiros").value ==="" || document.getElementById("TArCondionado").value ==="" || document.getElementById("chassis").value ===""  || document.getElementById("placa").value ===""){
        e.preventDefault();
        console.log("Erro: Necessario Preencher todos os campo nome");
        ErroCadastro.innerHTML = "Erro: Necessario Preencher todos os campos";
    }else{
        if((document.getElementById("TBanheiros").value == 'SIM' || document.getElementById("TBanheiros").value == 'NAO') && (document.getElementById("TArCondionado").value == 'SIM' || document.getElementById("TArCondionado").value =='NAO')){    
            e.preventDefault()
            console.log("ENTROU valer");
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
