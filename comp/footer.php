<!-- Footer -->
<div class="center">
    <footer class="page-footer grey darken-4">          
          <div class="footer-copyright grey lighten-2" >
            <div class="container">
            <p class="grey-text text-darken-4">
            © <?php echo date("Y");?> Todos Direitos Reservados <a class="" href="https://www.ebp.online"> Eddy Batine Producoes</a></li>
            <a class="grey-text text-darken-4 right" href="https://facebook.com/omeucv"> <i class="material-icons">facebook</i></a>
            </div>
            </p>
          </div>
    </footer>
</div>
<!-- Footer -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            let experienciaCount = 1;
            let formacaoCount = 1;
            let habilidadeCount = 1;
            let linguaCount = 1;

            $('.remove-experiencia').on('click', function() {
                $(this).closest('.experiencia').remove();
            });

            $('#add-experiencia').on('click', function() {
                experienciaCount++;
                $('#experiencia_profissional').append(`
                    <div class="row experiencia">
                        <div class="input-field col s12 m4">
                            <input type="text" name="empresa${experienciaCount}" class="validate">
                            <label>Empresas onde já trabalhou</label>
                        </div>
                        <div class="input-field col s12 m4">
                            <input type="text" name="cargo${experienciaCount}" class="validate">
                            <label>Cargo que ocupava</label>
                        </div>
                        <div class="input-field col s12 m4">
                            <input type="text" name="tempoempresa${experienciaCount}" class="validate">
                            <label>Período em que trabalhou</label>
                        </div>
                        <div class="input-field col s12">
                          <textarea name="descricao${experienciaCount}" class="materialize-textarea"></textarea>
                          <label for="descricao">Descreva Aqui as principais tarefas que executava neste trabalho</label>
                        </div>
                        <div class="input-field col s12">
                          <textarea name="descrica${experienciaCount}" class="materialize-textarea"></textarea>
                          <label for="descricao">Descreva Aqui as principais tarefas que executava neste trabalho</label>
                        </div>
                        <div class="input-field col s12">
                          <textarea name="descric${experienciaCount}" class="materialize-textarea"></textarea>
                          <label for="descricao">Descreva Aqui as principais tarefas que executava neste trabalho</label>
                        </div>
                        <div class="col s12 m12 left-align">
                            <button type="button" class="btn-floating btn-medium waves-effect waves-light red remove-experiencia"><i class="material-icons">remove</i></button>
                        </div>
                    </div>
                `);
                $('.remove-experiencia').off('click').on('click', function() {
                    $(this).closest('.experiencia').remove();
                });
            });

            $('.remove-formacao').on('click', function() {
                $(this).closest('.formacao').remove();
            });

            $('#add-formacao').on('click', function() {
                formacaoCount++;
                $('#formacao_academica').append(`
                    <div class="row formacao">
                        <div class="input-field col s12 m4">
                            <input type="text" name="instituicao${formacaoCount}" class="validate">
                            <label>Escola/Faculdade/Instituto onde estudou</label>
                        </div>
                        <div class="input-field col s12 m4">
                            <input type="text" name="curso${formacaoCount}" class="validate">
                            <label>Curso/Formação que fez</label>
                        </div>
                        <div class="input-field col s12 m4">
                            <input type="text" name="tempoestudo${formacaoCount}" class="validate">
                            <label>Período que levou a estudar</label>
                        </div>
                        <div class="col s12 m12 left-align">
                            <button type="button" class="btn-floating btn-medium waves-effect waves-light red remove-formacao"><i class="material-icons">remove</i></button>
                        </div>
                    </div>
                `);
                $('.remove-formacao').off('click').on('click', function() {
                    $(this).closest('.formacao').remove();
                });
            });

            $('.remove-habilidade').on('click', function() {
                $(this).closest('.habilidades').remove();
            });

            $('#add-habilidade').on('click', function() {
                habilidadeCount++;
                $('#habilidades_container').append(`
                    <div class="row habilidades">
                        <div class="input-field col s10 m10">
                            <input type="text" name="habilidade${habilidadeCount}" class="validate">
                            <label>Habilidades que possui</label>
                        </div>
                        <div class="col s2 m2 right-align">
                        <button type="button" class="btn-floating btn-medium waves-effect waves-light red remove-habilidade"><i class="material-icons">remove</i></button>
                        </div>
                    </div>
                `);
                $('.remove-habilidade').off('click').on('click', function() {
                    $(this).closest('.habilidades').remove();
                });
            });

            $('.remove-lingua').on('click', function() {
                $(this).closest('.linguas').remove();
            });

            $('#add-lingua').on('click', function() {
                linguaCount++;
                $('#linguas_container').append(`
                    <div class="row linguas">
                        <div class="input-field col s10 m10">
                            <input type="text" name="lingua${linguaCount}" class="validate">
                            <label>Línguas que fala</label>
                        </div>
                        <div class="col s2 m2 right-align">
                        <button type="button" class="btn-floating btn-medium waves-effect waves-light red remove-lingua"><i class="material-icons">remove</i></button>
                        </div>
                    </div>
                `);
                $('.remove-lingua').off('click').on('click', function() {
                    $(this).closest('.linguas').remove();
                });
            });
        });
    </script>
<script>
$(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
<script>
 document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll(".materialboxed");
  M.Materialbox.init(elems);
});
</script>

<script>
  var currYear = (new Date()).getFullYear();
$(document).ready(function() {
  $(".datepicker").datepicker({
    defaultDate: new Date(currYear-5,1,31),
    // setDefaultDate: new Date(2000,01,31),
    maxDate: new Date(currYear-5,12,31),
    yearRange: [1928, currYear-5],
    format: "mmm-yyyy"    
  });
});
</script>

</body>
</html>