
<?php 
include 'conection.php';
$nome = $_POST['nome'];
$evento =$_POST['tipo'];
$email =$_POST['email'];
$whats = $_POST['whats'];
$data = $_POST['data'];
$convidados = $_POST['convidados'];
$obs = $_POST['obs'];
$pedido[] = $_POST["pedido"][0];

                  foreach ($values_gender as $values){

                    echo $values;

                  }
var_dump($pedido)
//	$result_usuario = "INSERT INTO pedido ('id','nome','email','whats','envento','data','convidados','obs','pedido')  VALUES (NULL,'$nome','$email','$whats','$evento','$data','$convidados','$obs','$pedido')";
//	$resultado_usuario = mysqli_query($conn, $result_usuario);

?>








<!---materialize css -->
<link rel="stylesheet" href="materialize/css/materialize.css">
<link rel="stylesheet" href="materialize/css/custom.css">
<link rel="stylesheet" href="materialize/css/reset.css">
<link rel="stylesheet" href="materialize/css/display.css">
<link rel="stylesheet" href="materialize/css/style.css">

<style>
   .gapernet{
       position:absolute;
       top:55px;
       color:#DDD;
   }
.voltar_img{
position:absolute;
top:170px;

}
.voltar{
    position:absolute;
    top:175px;
    left:5%;
    color:#000;
    font-family: roboto;

}
.ola_text{
 
    color:#D6522E;

}
.fim_text{

    color:#000;
    text-align:center;
    font-family: Roboto;
    font-weight: 100;

}


</style>


<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- javascript do materialize-->
<script src="materialize/js/materialize.js"></script>
<script src="materialize/noUiSlider/nouislider.js"></script>
<script>
    $(".mat-input").focus(function () {
        $(this).parent().addClass("is-active is-completed");
    });

    $(".mat-input").focusout(function () {
        if ($(this).val() === "")
            $(this).parent().removeClass("is-completed");
        $(this).parent().removeClass("is-active");
    })


    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function () {
        $('.carousel').carousel();
    });



    $(document).ready(function () {
        $('.parallax').parallax();
    });

</script>
<!--campo nome-efeito-->
<script>

    $(document).ready(function () {
        M.updateTextFields();
    });
</script>
<!--selects -->
<script>document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function () {
        $('select').formSelect();
    });</script>

<style>
    html {
    height: 100%;
    min-height: 100%;
}

body {
    display: flex;
    flex-direction: column;
    min-height: 100%;
}

footer {
    margin-top: auto;
}
    @font-face {
        font-family: petal;
        src: url(fontes/petal.ttf);
        font-weight: bold;
    }

    @font-face {
        font-family: Roboto, LightItalic;
        src: url(fontes/Roboto-LightItalic.ttf);
    }

    h7 {
        font-family: Roboto, LightItalic;

    }

    h4 {

        font-family: Roboto, LightItalic;
        position: absolute;
        left: 1%;
    }

    h1 {
        font-family: petal;
        font-size: 5.0em;

    }

    span,
    p {
        font-family: Roboto, Light;
        color: #999999;
    }

    .tab_menu {
        position: absolute;
        left: -2%;
    }

    .menu {
        position: absolute;
        left: 30%;
        right: 10%;
        top: 3%;

    }

    .xxx_fim {
        position: absolute;
        bottom: 16px;
        right: 0;

    }

    /*imagem no botão submit*/
    button {
        display: block;
        width: 200px;
        height: 400px;
        text-indent: -9000em;
        overflow: hidden;
        background: url('materialize/img/finalizar.png') no-repeat 0 0;
    }

    input-field {
        font-family: Roboto, Light, Italic;
    }


    /*botão contato*/
    .enviar_contato {

        display: block;
        width: 200px;
        height: 100px;
        text-indent: -9000em;
        overflow: hidden;
        background: url('materialize/img/enviar.png') no-repeat 0 0;
        position: absolute;
        right: 3%;
    }
.header_ajustavel{
    width: 100%;
}
 .fixarRodape {
        bottom: 0;
        position: absolute;
  
      
    }
</style>

</head>

<body>
<!--inicio fornecedores finalizar-->






    <div class="x"><img class="responsve-img" src="materialize/img/topo_fim.png" height="150" width="100%"></div>



















            <!--final inputs finalizar-->









        </div>



<div class=" body-content">

    <footer class="fixarRodape">
    <img class="responsve-img" src="materialize/img/footer.png" height="150" width="100%">






        <!--ondas-->
        <img class="ondas_fim" src="materialize/img/ONDAS_ORANGE.png" height="38">
        <!--xxx-->
        <img class="xxx_fim" src="materialize/img/xxx.png" height="45">

        <!--voltar para o inicio-->
        <a href="Siguiente" class="  middle-indicator-text waves-effect waves-light content-indicator">

        </a>
        <!--voltar ao inicio-->
        <a href="Siguiente" class="inicioCarousel">Voltar ao inicio</a>
        <!--gaper.net-->
        <h5 class="gapernet">gaper<h5 class="net">.net</h5>
        </h5>
        <h7 class="direitos">2019 - todos os direitos reservados.</h7>
        <!--redes sociais-->
        <a href="https://www.instagram.com/gaper.eventos"><img class="instagran" src="materialize/img/insta.png"
                height="35">
        </a>
        <a href="http://facebook.com/gaper.net"><img class="facebook" src="materialize/img/facebook.png" height="35">
        </a>


        <a href="http://facebook.com/gaper.net"><img class="whats" src="materialize/img/whats.png" height="35">
        </a>
        <h7 class="email">contato@gaper.net</h7>




  
       
        <!--logo-->
   
</div>



        <img class="logo_finalizar" src="materialize/img/simbolo.png" height="75">
      <a href="index.html" ><img class="voltar_img" src="materialize/img/prev_home.png" height="60"><h5 class="voltar">Voltar</h5></a>
    </div>

        
        <br><br><br>
        <div class="row">
        <div class=" center-align">
        <div class="texto">
    <h5 class="ola_text  center-align">OBA!</h4><br>
        <h5 class="fim_text  center-align">seu orçamento foi enviado<br>
        aos nossos fornecedores!<br>
        
        em breve eles entrarão em contato<br>
        pelo e-mail/whatsapp inseridos.</h5>
</div>
</div>
<br><br><br>
</div>



</div>
</form>

</div>
</div>
    </footer>
</body>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 800);
        });
    });
</script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
