const cadOnibus = document.getElementById("CadOnibus");
cadOnibus.addEventListener("submit", async (e)=>{
    const dadosOnibus = new FormData(cadOnibus);
    dadosOnibus.append("add", 1);
    const dadosCad = await fetch("Cadastrar_onibus.php",{
    method:"POST",
    body: dadosOnibus,
    });
});