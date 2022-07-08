const tbody = document.querySelector("tbody");
const listOnibus = async ()=>{
    const Lista = await fetch("./Lista_todos_Onibus.php");
    const resp = await Lista.text();
    tbody.innerHTML = resp; 
}
listOnibus();