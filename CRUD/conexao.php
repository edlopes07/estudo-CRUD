<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $bd = "empresa";

    if ( $conn = mysqli_connect($server, $user, $password, $bd)) {
       // echo "Conectado com sucesso!";
    } else {
        echo "Erro!";
    }

    function mensagem($texto, $tipo) {
    echo "
    <div class='container mt-4'>
        <div class='row justify-content-center'>
            <div class='col-md-6 col-lg-5'>
                <div class='alert alert-$tipo text-center' role='alert'>
                    $texto
                </div>
            </div>
        </div>
    </div>
    ";
    }

    function mostra_data($data) {
        $d = explode('-', $data);
        $escreve = $d[2] ."/" .$d[1] ."/" .$d[0];
        return $escreve;
    }

?>