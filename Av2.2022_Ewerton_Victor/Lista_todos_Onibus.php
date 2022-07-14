<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $pagina = filter_input(INPUT_GET,"pagina", FILTER_SANITIZE_NUMBER_INT);
    $Lista="";
    if (!empty($pagina)){
        $quant_resgistro = 10;
        $limit_result = ($pagina *$quant_resgistro) - $quant_resgistro;
        include_once("conexao.php");
        $sql = "SELECT * FROM `onibus` ORDER BY id ASC LIMIT $limit_result,$quant_resgistro";
        $resultado = mysqli_query($conn, $sql);
        $Lista.="<table border='1'><thead><tr><th>Id</th><th>Marca</th><th>Modelo</th><th>qtdAssentos</th><th>temBanheiro</th><th>temArCondicionado</th><th>Chassis</th><th>Placa</th></tr></thead>";
        
        while($ler_resultado = mysqli_fetch_assoc($resultado)){
            $jsom = json_encode($ler_resultado);
            $obj = json_decode($jsom);
            if($obj->temBanheiro==0){
                $res_Banheiros="NAO";
            }
            else{
                $res_Banheiros="SIM";
            }
            if($obj->temArCondicionado==0){
                $res_Ar="NAO";
            }
            else{
                $res_Ar="SIM";
            }
            $Lista.= "<tbody><tr><td>$obj->id</td><td>$obj->marca</td><td>$obj->modelo</td><td>$obj->qtdAssentos</td><td>$res_Banheiros</td><td>$res_Ar</td><td>$obj->chassis</td><td>$obj->placa</td></tr></tbody>";
        }
        //qantidad de registros
        $sqlPag="SELECT COUNT(id) AS num_result FROM onibus";
        $resultado_pg = mysqli_query($conn, $sqlPag);
        $ler_resultado_pag = mysqli_fetch_assoc($resultado_pg);
        //quantidade de paginal

        $quant_pag = ceil ($ler_resultado_pag['num_result']/$quant_resgistro);
        $Lista .= "</table><nav><ul><table><thead><tr><td><a class='page-link' href='#' onclick='listOnibus(1)'>Primeira</a></td>";
        for($pagAnterior = $pagina - 2; $pagAnterior<= $pagina -1; $pagAnterior++){
            if($pagAnterior >0){
                $Lista .="<td><a class='page-link' href='#' onclick='listOnibus($pagAnterior)'>$pagAnterior</a></td>";
            }
        }        
        $Lista .="<td><a class='page-link' href='#'>$pagina</a></td>";
        for($pagPosterior = $pagina + 1; $pagPosterior <= $pagina + 2; $pagPosterior++){
            if($pagPosterior <= $quant_pag){
                $Lista.="<td><a class='page-link' href='#'onclick='listOnibus($pagPosterior)'>$pagPosterior</a></td>";
            }
        }
        $Lista.="<td>
                            <a class='page-link' href='#' onclick='listOnibus($quant_pag)'>Ultima</a>
                        </td>
                    </tr>
                </thead>
            </table>
        </ul>";
        echo $Lista;
    }
    else{
        $Lista.="<p>Nao existem valores cadastrdos ainda</p>";
        echo $Lista;
    }
}    
