<?php 
	//if(isset($_POST['submit'])){
	    //echo $_POST['nome'] . '<br />';
	    //echo $_POST['apelido'] . '<br />';
	    //echo $_POST['email'] . '<br />';
        //echo $_POST['bairro'] . '<br />';
        //echo $_POST['cell'] . '<br />';
        //echo $_POST['celll'] . '<br />';
        //echo $_POST['bairro'] . '<br />';
        //echo $_POST['perfil'] . '<br />';
        //echo $_POST['empresa1'] . '<br />';
        //echo $_POST['cargo1'] . '<br />';
        //echo $_POST['tempoempresa1'] . '<br />';
        //echo $_POST['empresa2'] . '<br />';
        //echo $_POST['cargo2'] . '<br />';
       // echo $_POST['tempoempresa2'] . '<br />';
       // echo $_POST['empresa3'] . '<br />';
       // echo $_POST['cargo3'] . '<br />';
       // echo $_POST['tempoempresa3'] . '<br />';
       // echo $_POST['instituicao1'] . '<br />';
       // echo $_POST['curso1'] . '<br />';
       // echo $_POST['tempoestudo1'] . '<br />';
       // echo $_POST['instituicao2'] . '<br />';
        //echo $_POST['curso2'] . '<br />';
       // echo $_POST['tempoestudo2'] . '<br />';
       // echo $_POST['lingua1'] . '<br />';
        //echo $_POST['cargo'] . '<br />';
        //echo $_POST['edata'] . '<br />';
        //echo $_POST['bdata'] . '<br />';}
?>

<!-- Navbar -->
<?php include 'comp/nav.php'; ?>
<!-- End Navbar -->

<div class="container">
        <!--<form class="white" action="templates/cv1.php" method="POST"> -->
        <form class="white" action="templates/cv2.php" method="POST">
            <!-- Informações Pessoais -->
            <h5>Informação Pessoal</h5>
            <div class="row">
                <div class="input-field col s12 m6">
                    <input name="nome" type="text" class="validate">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s12 m6">
                    <input name="apelido" type="text" class="validate">
                    <label for="apelido">Apelido</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <input name="bairro" type="text" class="validate">
                    <label for="bairro">Bairro</label>
                </div>
                <div class="input-field col s12 m6">
                    <input name="cidade" type="text" class="validate">
                    <label for="cidade">Cidade</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <input name="contacto" type="text" class="validate">
                    <label for="contacto">Contacto</label>
                </div>
                <div class="input-field col s12 m6">
                    <input name="contacto_alternativo" type="text" class="validate">
                    <label for="contacto_alternativo">Contacto Alternativo</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="perfil" class="materialize-textarea"></textarea>
                    <label for="perfil">Perfil</label>
                </div>
            </div>

            <!-- Experiência Profissional -->
            <h5>Experiência Profissional</h5>
            <div id="experiencia_profissional">
                <div class="row experiencia">
                    <div class="input-field col s12 m4">
                        <input type="text" name="empresa1" class="validate">
                        <label>Empresas onde já trabalhou</label>
                    </div>
                    <div class="input-field col s12 m4">
                        <input type="text" name="cargo1" class="validate">
                        <label>Cargo que ocupava</label>
                    </div>
                    <div class="input-field col s12 m4">
                        <input type="text" name="tempoempresa1" class="validate">
                        <label>Período em que trabalhou</label>
                    </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="descricao1" class="materialize-textarea"></textarea>
                    <label for="descricao">Descreva Aqui as principais tarefas que executava neste trabalho</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="descrica1" class="materialize-textarea"></textarea>
                    <label for="descricao">Descreva Aqui as principais tarefas que executava neste trabalho</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="descric1" class="materialize-textarea"></textarea>
                    <label for="descricao">Descreva Aqui as principais tarefas que executava neste trabalho</label>
                </div>
            </div>
                    <div class="col s12 m12 right-left">
                        <button type="button" class="btn-floating btn-medium waves-effect waves-light red remove-experiencia"><i class="material-icons">remove</i></button>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 left-align">
                <button type="button" class="btn-floating btn-medium waves-effect waves-light green" id="add-experiencia"><i class="material-icons">add</i></button>
                </div>
            </div>

            <!-- Formação Acadêmica -->
            <h5>Formação Acadêmica</h5>
            <div id="formacao_academica">
                <div class="row formacao">
                    <div class="input-field col s12 m4">
                        <input name="instituicao1" type="text" class="validate">
                        <label>Escola/Faculdade/Instituto onde estudou</label>
                    </div>
                    <div class="input-field col s12 m4">
                        <input name="curso1"type="text" class="validate">
                        <label>Curso/Formação que fez</label>
                    </div>
                    <div class="input-field col s12 m4">
                        <input name="tempoestudo1" type="text" class="validate">
                        <label>Período que levou a estudar</label>
                    </div>
                    <div class="col s12 m12 left-align">
                        <button type="button" class="btn-floating btn-medium waves-effect waves-light red remove-formacao"><i class="material-icons">remove</i></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 left-align">
                    <button type="button" class="btn-floating btn-medium waves-effect waves-light green" id="add-formacao"><i class="material-icons">add</i></button>
                </div>
            </div>

            <!-- Habilidades -->
            <h5>Habilidades</h5>
            <div id="habilidades_container">
                <div class="row habilidades">
                    <div class="input-field col s10 m10">
                        <input name="habilidade1" type="text" class="validate">
                        <label>Habilidades que possui</label>
                    </div>
                    <div class="col s2 m2 left-align">
                        <button type="button" class="btn-floating btn-medium waves-effect waves-light red remove-habilidade"><i class="material-icons">remove</i></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 left-align">
                    <button type="button" class="btn-floating btn-medium waves-effect waves-light green" id="add-habilidade"><i class="material-icons">add</i></button>
                </div>
            </div>

            <!-- Línguas -->
            <h5>Línguas</h5>
            <div id="linguas_container">
                <div class="row linguas">
                    <div class="input-field col s10 m10">
                        <input name="lingua1" type="text" class="validate">
                        <label>Línguas que fala</label>
                    </div>
                    <div class="col s2 m2 left-align">
                        <button type="button" class="btn-floating btn-medium waves-effect waves-light red remove-lingua"><i class="material-icons">remove</i></button>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col s12 m12 left-align">
                    <button type="button" class="btn-floating btn-medium waves-effect waves-light green" id="add-lingua"><i class="material-icons">add</i></button>
                </div>
            </div>
        <div class="center">
            <button class="btn waves-effect waves-light" type="submit" name="submit">Baixar
                <i class="material-icons left">download</i>
            </button>
        </div>
        </form>
    </div>

<!-- Footer -->
<?php include 'comp/footer.php'; ?>
<!-- Footer -->