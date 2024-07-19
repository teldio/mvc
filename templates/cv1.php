<?php
require_once('./dompdf/autoload.inc.php');

use Dompdf\Dompdf;

// Configuração do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meucv";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtém o ID do usuário
$usuario_id = $_GET['id'];

// Obtém os dados do usuário
$sql = "SELECT * FROM usuarios WHERE id='$usuario_id'";
$result = $conn->query($sql);
$usuario = $result->fetch_assoc();

// Obtém as experiências profissionais do usuário
$sql_experiencias = "SELECT * FROM experiencias WHERE usuario_id='$usuario_id'";
$result_experiencias = $conn->query($sql_experiencias);

// Obtém as formações acadêmicas do usuário
$sql_formacoes = "SELECT * FROM formacoes WHERE usuario_id='$usuario_id'";
$result_formacoes = $conn->query($sql_formacoes);

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            font-family: "Cambria";
            font-size: 28pt;
            text-align: left;
            line-height: 0.1;
            color: #2A7B88;
        }
        
        hr.linha {
            border: 0.5px solid #2A7B88;
            line-height: 0.4;
        }
        
        .info {
            font-family: "Cambria";
            font-size: 10pt;
            text-align: left;
            color: #404040;
        }
        
        h2 {
            font-family: "Cambria";
            font-size: 14pt;
            font-weight: bolder;
            text-align: left;
            line-height: 0.1;
            color: #2A7B88;
        }
        
        .infoo {
            font-family: "Cambria";
            font-size: 11pt;
            text-align: left;
            color: #404040;
        }
        
        .cargo {
            font-family: "Cambria";
            font-size: 12pt;
            font-weight: bolder;
            text-align: left;        
            color: #262626;
        }
        
        .detalhe {
            font-family: "Cambria";
            font-size: 11pt;
            text-align: left;        
            color: #404040;
            position: relative;
            left: 30px;
        }
    </style>
</head>
<body>
    <h1>' . $usuario['nome'] . '</h1>
    <hr class="linha">
    <div class="info">' . $usuario['bairro'] . ', ' . $usuario['cidade'] . ' | ' . $usuario['contacto'] . ' | ' . $usuario['contacto_alternativo'] . ' | ' . $usuario['email'] . '</div>
    <hr class="linha">
    <h2>PERFIL</h2>
    <div class="infoo">' . $usuario['perfil'] . '.</div>
    <hr class="linha">
    <h2>EXPERIENCIA</h2>';

while ($experiencia = $result_experiencias->fetch_assoc()) {
    '
    <div class="cargo">' . $experiencia['cargo'] . ' | ' . $experiencia['empresa'] . ' | ' . $experiencia['periodo'] . '</div>
    <div class="detalhe">
        <p>' . $experiencia['descricao'] . '.</p>
    </div>';
}

'<hr class="linha">
    <h2>EDUCACAO</h2>';

while ($formacao = $result_formacoes->fetch_assoc()) {
     '
    <div class="cargo">
        <p>' . $formacao['curso'] . ' | ' . $formacao['periodo'] . ' | ' . $formacao['instituicao'] . '</p>
    </div>';
}

 '<hr class="linha">
    <h2>HABILIDADES</h2>
    <div class="detalhe">
        <p>· ' . $usuario['habilidade'] . '</p>
    </div>
    <hr class="linha">
    <h2>IDIOMAS</h2>
    <div class="detalhe">
        <p>· ' . $usuario['lingua'] . '</p>  
    </div>
</body>
</html>';

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("omeucv", array('Attachment' => 0));
?>
