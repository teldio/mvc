<?php
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

// Captura os dados do formulário
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$contacto = $_POST['contacto'];
$contacto_alternativo = $_POST['contacto_alternativo'];
$perfil = $_POST['perfil'];

// Insere os dados na tabela usuarios
$sql = "INSERT INTO usuarios (nome, apelido, email, bairro, cidade, contacto, contacto_alternativo, perfil)
VALUES ('$nome', '$apelido', '$email', '$bairro', '$cidade', '$contacto', '$contacto_alternativo', '$perfil')";

if ($conn->query($sql) === TRUE) {
    $usuario_id = $conn->insert_id;

    // Insere as experiências profissionais
    $i = 1;
    while(isset($_POST['empresa'.$i])) {
        $empresa = $_POST['empresa'.$i];
        $cargo = $_POST['cargo'.$i];
        $periodo = $_POST['tempoempresa'.$i];
        $descricao = $_POST['descricao'.$i];
        $descrica = $_POST['descrica'.$i];
        $descric = $_POST['descric'.$i];

        $sql_experiencia = "INSERT INTO experiencias (usuario_id, empresa, cargo, periodo, descricao, descrica, descric)
        VALUES ('$usuario_id', '$empresa', '$cargo', '$periodo', '$descricao', '$descrica', '$descric')";
        $conn->query($sql_experiencia);
        $i++;
    }

    // Insere as formações acadêmicas
    $i = 1;
    while(isset($_POST['instituicao'.$i])) {
        $instituicao = $_POST['instituicao'.$i];
        $curso = $_POST['curso'.$i];
        $periodo = $_POST['tempoestudo'.$i];
        $sql_formacao = "INSERT INTO formacoes (usuario_id, instituicao, curso, periodo)
        VALUES ('$usuario_id', '$instituicao', '$curso', '$periodo')";
        $conn->query($sql_formacao);
        $i++;
    }

    // Insere as habilidades
    $habilidades = [];
    $i = 1;
    while(isset($_POST['habilidade'.$i])) {
        $habilidades[] = $_POST['habilidade'.$i];
        $i++;
    }
    $habilidades = implode(', ', $habilidades);

    $sql_habilidades = "UPDATE usuarios SET habilidades='$habilidades' WHERE id='$usuario_id'";
    $conn->query($sql_habilidades);

    // Insere as línguas
    $linguas = [];
    $i = 1;
    while(isset($_POST['lingua'.$i])) {
        $linguas[] = $_POST['lingua'.$i];
        $i++;
    }
    $linguas = implode(', ', $linguas);

    $sql_linguas = "UPDATE usuarios SET linguas='$linguas' WHERE id='$usuario_id'";
    $conn->query($sql_linguas);

    // Redireciona para a página de visualização
    header("Location: visualizar.php?id=$usuario_id");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
