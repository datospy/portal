<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<script type='text/javascript' src='http://datos.org.py/sites/all/themes/open_framework/js/jQuery.circleMenu.js'></script>


<script src="http://d3js.org/d3.v3.min.js"></script>

<script src="http://datos.org.py/sites/all/themes/open_framework/js/d3.layout.cloud.min.js"></script>
<script src="http://datos.org.py/sites/all/themes/open_framework/js/tagcloud-call.js"></script>
<script src="http://datos.org.py/sites/all/themes/open_framework/js/tag-cloudfunci.js"></script>

<script type='text/javascript' src='http://datos.org.py/sites/all/themes/open_framework/js/jquery.sharrre.min.js'></script>

<script>
    $(function(){
        $('ul#comunidad').circleMenu({
          item_diameter: 150,
          circle_radius: 300,
          direction: 'left'
        });
        $('ul#catalogo').circleMenu({
          item_diameter: 150,
          circle_radius: 300,
          direction: 'right'
        });
    });
</script>
<script type="text/javascript">
  $(document).ready(function(){
  //menu usuario
  $('#botonUser').click(function(){
   $('#panelUser').toggle('fade',1500); 
  });
  $('#botonCerrarUser').click(function(){
   $('#panelUser').css("display","none");
  });

  //menu principal
  $("#boton1").click(function(){

      $('#panel2').attr("style","display:none;");
    $("#boton2").parents().removeClass("active");
    
    $("#panel1").slideToggle("slow");
    $(this).parents().toggleClass("active"); return false;
    
  }); 

  $("#boton2").click(function(){
    
    $('#panel1').attr("style","display:none;");
    $("#boton1").parents().removeClass("active");

    $("#panel2").slideToggle("slow");
    $(this).parents().toggleClass("active"); return false;

  }); 

  if(window.location.href.indexOf("dataset") > -1) {
       $('#panel1').attr("style","display:block;");
       $("#boton1").parents().addClass("active");
    }

});
</script>
<style>
  body{ 
    text-align: center;
    background: #F1F3F2 url('http://www.datos.org.py/sites/all/themes/open_framework/images/bgGral.jpg') center top no-repeat !important;
  }
</style>

<div class="wrap fondo relative">

  <header class="front">
     
 <?php if ($messages): ?>
            <div id="console" class="clearfix"><?php print $messages; ?></div>
            <?php endif; ?>
            <?php if ($page['help']): ?>
            <div id="help" class="clearfix"> <?php print render($page['help']); ?> </div>
            <?php endif; ?>
            <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
    <div class="logo">DatosPY</div>
    <div class="intro">
      <p><strong>Este es el portal de datos abiertos del Paraguay.</strong></p>
      <p> Aquí la sociedad civil, la academia, las empresas y el gobierno disponen sus datos en formatos abiertos para usar, re-usar, y compartir de forma libre y gratuita.</p>
    </div>
  </header>



  
  <ul id="comunidad">
    <li><a href="http://www.datos.org.py/blog/" class="circulos">Comunidad</a></li>
    <li><a href="http://www.datos.org.py/docs/">Docs</a></li>
    <li><a href="http://www.datos.org.py/forum/">Foros</a></li>
    <li><a href="http://www.datos.org.py/blog/">Blog</a></li>
  </ul>

  <ul id="catalogo">
    <li><a href="http://www.datos.org.py/datos/dataset" class="circulos">Catalogo</a></li>
    <li><a href="http://www.datos.org.py/datos/dataset">Conjunto de datos</a></li>
    <li><a href="http://www.datos.org.py/datos/organization">Organizaciones</a></li>
    <li><a href="http://www.datos.org.py/datos/group">Temas</a></li>
    <li><a href="http://www.datos.org.py/datos/dataset/new">Crear DataSet</a></li>
<style type="text/css">
#tag-cloud{
  z-index: 1000;
  position: relative;
  text-align: center;
  top: -17px;
  left: -105px; 
  right: 0;
  cursor: pointer;
}
#tag-cloud svg{
  width: 350px !important;
  height: 190px !important;
}


#tag-cloud svg text{
  -webkit-transition: all 0.3s ease;
-moz-transition: all 0.3s ease;
-o-transition: all 0.3s ease;
-ms-transition: all 0.3s ease;
}

#tag-cloud svg text:hover{
font-size: 30px !important;
}
</style>
    
  <div id="tag-cloud"></div>
  </ul>

  

  <a href="http://www.datos.org.py/app" class="circulos" id="app">App</a>
  <a href="http://www.datos.org.py/solicitudes" class="circulos" id="solicita">Docs</a>

</div>

<style type="text/css">
footer{
  position: absolute;
  left: 0;
  right: 0;
  width: 100%;
}
</style>

<footer>
     <link rel="stylesheet" type="text/css" href="/datos/fanstatic/datospy_theme/datospy_thememin.css">

    <div class="left">
      <div class="padding2010">
        Con el apoyo del <a href="http://ceamso.org.py/es/proyectos/20-programa-de-democracia-y-gobernabilidad">Programa de Democracia y Gobernabilidad (USAID-CEAMSO)</a>
      </div>

      <a href="/datos/about">Acerca de DatosPY</a><br>

      <a href="#" style="display:inline-block" class="tw" title="Twitter"></a>
      <a href="#" style="display:inline-block" class="fb" title="Facebook"></a>
      <a href="https://github.com/datospy" style="display:inline-block" class="git" title="github"></a>
      <div id="example2">
        <div id="shareme" data-url="http://www.datos.org.py/" data-text="Datos Abiertos del Paraguay"></div>
      </div>
      <script>
      $('#shareme').sharrre({
        share: {
          twitter: true,
          facebook: true,
          googlePlus: true
        },
        template: '<div class="box"><div class="left">Compartir</div><div class="middle"><a href="#" class="facebook">f</a><a href="#" class="twitter">t</a><a href="#" class="googleplus">+1</a></div><div class="right">{total}</div></div>',
        enableHover: false,
        enableTracking: true,
        render: function(api, options){
        $(api.element).on('click', '.twitter', function() {
          api.openPopup('twitter');
        });
        $(api.element).on('click', '.facebook', function() {
          api.openPopup('facebook');
        });
        $(api.element).on('click', '.googleplus', function() {
          api.openPopup('googlePlus');
        });
      }
      });
      </script>

      <style type="text/css">
        #example2{
          /*float:right;*/
          display: inline-block;
          /*margin: 10px 0 0 0;*/
        }
        .sharrre .box{
          background:#969FA8;
          background:-webkit-gradient(linear,left top,left bottom,color-stop(#969FA8,0),color-stop(#818790,1));
          background:-webkit-linear-gradient(top, #969FA8 0%, #818790 100%);
          background:-moz-linear-gradient(top, #969FA8 0%, #818790 100%);
          background:-o-linear-gradient(top, #969FA8 0%, #818790 100%);
          background:linear-gradient(top, #969FA8 0%, #818790 100%);
          filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#969FA8', endColorstr='#818790',GradientType=0 );
          -webkit-box-shadow:0 1px 1px #d3d3d3;
          -moz-box-shadow:0 1px 1px #d3d3d3;
          box-shadow:0 1px 1px #d3d3d3;
          height:22px;
          display:inline-block;
          position:relative;
          padding:0px 55px 0 8px;
          -webkit-border-radius:3px;
          -moz-border-radius:3px;
          border-radius:3px;
          font-size:12px;
          float:left;
          clear:both;
          overflow:hidden;
          -webkit-transition:all 0.3s linear;
          -moz-transition:all 0.3s linear;
          -o-transition:all 0.3s linear;
          transition:all 0.3s linear;
        }
        .sharrre .left{
          line-height:22px;
          display:block;
          white-space:nowrap;
          text-shadow:0px 1px 1px rgba(255,255,255,0.3);
          color:#ffffff;
          -webkit-transition:all 0.2s linear;
          -moz-transition:all 0.2s linear;
          -o-transition:all 0.2s linear;
          transition:all 0.2s linear;
        }
        .sharrre .middle{
          position:absolute;
          height:22px;
          top:0px;
          right:30px;
          width:0px;
          background:#818790;
          text-shadow:0px -1px 1px #363f49;
          color:#fff;
          white-space:nowrap;
          text-align:left;
          overflow:hidden;
          -webkit-box-shadow:-1px 0px 1px rgba(255,255,255,0.4), 1px 1px 2px rgba(0,0,0,0.2) inset;
          -moz-box-shadow:-1px 0px 1px rgba(255,255,255,0.4), 1px 1px 2px rgba(0,0,0,0.2) inset;
          box-shadow:-1px 0px 1px rgba(255,255,255,0.4), 1px 1px 2px rgba(0,0,0,0.2) inset;
          -webkit-transition:width 0.3s linear;
          -moz-transition:width 0.3s linear;
          -o-transition:width 0.3s linear;
          transition:width 0.3s linear;
        }
        .sharrre .middle a{
          color:#fff;
          font-weight:bold;
          padding:0 9px 0 9px;
          text-align:center;
          float:left;
          line-height:22px;
          -webkit-box-shadow:-1px 0px 1px rgba(255,255,255,0.4), 1px 1px 2px rgba(0,0,0,0.2) inset;
          -moz-box-shadow:-1px 0px 1px rgba(255,255,255,0.4), 1px 1px 2px rgba(0,0,0,0.2) inset;
          box-shadow:-1px 0px 1px rgba(255,255,255,0.4), 1px 1px 2px rgba(0,0,0,0.2) inset;
        }
        .sharrre .right{
          position:absolute;
          right:0px;
          top:0px;
          height:100%;
          width:45px;
          text-align:center;
          line-height:22px;
          color:#4b5d61;
          background:#D7DADB;
          background:-webkit-gradient(linear,left top,left bottom,color-stop(#D7DADB,0),color-stop(#C9CCCC,1));
          background:-webkit-linear-gradient(top, #D7DADB 0%, #C9CCCC 100%);
          background:-moz-linear-gradient(top, #D7DADB 0%, #C9CCCC 100%);
          background:-o-linear-gradient(top, #D7DADB 0%, #C9CCCC 100%);
          background:linear-gradient(top, #D7DADB 0%, #C9CCCC 100%);
          filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#D7DADB', endColorstr='#C9CCCC',GradientType=0 );
        }
        .sharrre .box:hover{
          padding-right:130px;
        }
        .sharrre .middle a:hover{
          text-decoration:none;
        }
        .sharrre .box:hover .middle{
          width:90px;
        }
      </style>

    </div>

</footer>
