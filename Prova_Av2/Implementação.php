<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Listar Aluno</title>
   <script>
       function buscarAlunos() {
           let xmlHttp = new XMLHttpRequest();
           xmlHttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                   console.log("Chegou resposta: " + this.responseText)
                   document.getElementById("msg").innerHTML = this.responseText;
                   let obj = JSON.parse(this.responseText);
                   for (i=0; i < obj.length; i++) {
                       let linha = obj[i];
                       // let strLinha = "<tr>" + obj[i] + "</tr>";
                       // document.getElementById("msg").innerHTML = obj[i];
                       // console.log(obj[i]);
                       criarLinhaTabela(linha);
                   }
               }
           }
           xmlHttp.open("GET", "http://localhost/3dawnoite2/ex09_Listaronibus.php");
           xmlHttp.send();
           console.log("Enviei requisição");
       }
       function criarLinhaTabela(pobjReturnJSON) {
           let tr = document.createElement("tr"); // cria o elemento tr
           let td = document.createElement("td"); // cria o element td
           let textnode = document.createTextNode(pobjReturnJSON.id);
           td.appendChild(textnode); // adiciona o texto na td criada
           tr.appendChild(td); // adiciona a td na tr


           let td2 = document.createElement("td"); // cria o element td
           textnode = document.createTextNode(pobjReturnJSON.nome);
           td2.appendChild(textnode); // adiciona o texto na td criada
           tr.appendChild(td2); // adiciona a td na tr


           let td3 = document.createElement("td"); // cria o element td
           textnode = document.createTextNode(pobjReturnJSON.email);
           td3.appendChild(textnode); // adiciona o texto na td criada
           tr.appendChild(td3); // adiciona a td na tr


           let td4 = document.createElement("td"); // cria o element td
           textnode = document.createTextNode(pobjReturnJSON.cpf);
           td4.appendChild(textnode); // adiciona o texto na td criada
           tr.appendChild(td4); // adiciona a td na tr


           let td5 = document.createElement("td"); // cria o element td
           textnode = document.createTextNode(pobjReturnJSON.matricula);
           td5.appendChild(textnode); // adiciona o texto na td criada
           tr.appendChild(td5); // adiciona a td na tr


           let tr_fim = document.getElementById("ultimaLinha"); // pega a tr pelo id
           // adiciona o elemento criado, a partir do nó pai (no caso <table>)
           tr_fim.parentNode.insertBefore(tr, tr_fim);
       }
   </script>
</head>
<body>
<input type="button" value="Listar Todos onibus" onclick="buscarOnibus()">
<table id="tab">
   <tr>
       <th>id</th>
       <th>marca</th>
       <th>modelo</th>
       <th>qtdeAscenstos</th>
       <th>temBanheiro</th>
       <th>temArCondicionado</th>
       <th>Placas</th>
   </tr>
   <tr id="ultimaLinha">
       <td colspan="5"></td>
   </tr>
</table>
<p id="msg"></p>
<p id="msg2"></p>
<table>


</table>
</body>
</html>