<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<script type='text/javascript' src='http://datos.org.py/sites/all/themes/open_framework/js/jQuery.circleMenu.js'></script>


<script src="http://d3js.org/d3.v3.min.js"></script>

<script src="http://datos.org.py/sites/all/themes/open_framework/js/d3.layout.cloud.js"></script>
<script src="http://datos.org.py/sites/all/themes/open_framework/js/tagcloud-call.js"></script>
<script src="http://datos.org.py/sites/all/themes/open_framework/js/tag-cloudfunc.js"></script>

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
    background: #F1F3F2 url('http://datos.org.py/sites/all/themes/open_framework/images/bgGral.jpg') center top no-repeat;
  }
</style>

<div class="wrap fondo relative">

  <header class="front">
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
    <li><a href="#">Compartir</a></li>
  </ul>

  <ul id="catalogo">

      
    <li><a href="http://www.datos.org.py/datos/dataset" class="circulos">Catalogo</a></li>
    <li><a href="http://www.datos.org.py/datos/dataset">Conjunto de datos</a></li>
    <li><a href="http://www.datos.org.py/datos/organization">Organizaciones</a></li>
    <li><a href="http://www.datos.org.py/datos/group">Grupos</a></li>
    <li><a href="http://www.datos.org.py/datos/dataset/new">Crear DataSet</a></li>
<style type="text/css">
#tag-cloud{
  z-index: 1000;
  position: relative;
  text-align: center;
  top: 0px; 
  left: -105px; 
  right: 0;
  cursor: pointer;
}
#tag-cloud svg{
  width: 350px !important;
  height: 190px !important;
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

  width: 100%;
}

</style>
<footer>
     <link rel="stylesheet" type="text/css" href="/datos/fanstatic/datospy_theme/datospy_theme.css">

    <div class="left">
      <div class="padding2010">
        Con el apoyo del <a href="http://ceamso.org.py/es/proyectos/20-programa-de-democracia-y-gobernabilidad">Programa de Democracia y Gobernabilidad (USAID-CEAMSO)</a>
      </div>

    
            
            <a href="/datos/about">Acerca de DatosPY</a><br>
       
             <a href="#" style="display:inline-block" class="tw" title="Twitter"></a>
             <a href="#" style="display:inline-block" class="fb" title="Facebook"></a>
             <a href="https://github.com/datospy" style="display:inline-block" class="git" title="github"></a>
          

            
         
    </div>



    
        
        
  

</footer>
