<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<script type='text/javascript' src='http://datos.org.py/sites/all/themes/open_framework/js/jQuery.circleMenu.js'></script>


<script src="http://d3js.org/d3.v3.min.js"></script>

<script src="http://datos.org.py/sites/all/themes/open_framework/js/d3.layout.cloud.min.js"></script>
<script src="http://datos.org.py/sites/all/themes/open_framework/js/tagcloud-call.js"></script>
<script src="http://datos.org.py/sites/all/themes/open_framework/js/tag-cloudfunci.js"></script>

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

  $(".inline").colorbox({inline:true, width:"50%"});

});
</script>
<style>
  body{ 
    text-align: center;
    background: #F1F3F2 url('http://www.datos.org.py/sites/all/themes/open_framework/images/bgGral.jpg') center top no-repeat !important;
  }
</style>

<!-- This contains the hidden content for inline calls -->
<div style='display:none'>
  <div id='inline_content' style='padding:10px; background:#fff; text-align: center;'>
  <span class='st_facebook_vcount' displayText='Facebook'></span>
  <span class='st_twitter_vcount' displayText='Tweet'></span>
  <span class='st_googleplus_vcount' displayText='Google +'></span>
  <span class='st_linkedin_vcount' displayText='LinkedIn'></span>
  <span class='st_print_vcount' displayText='Print'></span>
  <span class='st_email_vcount' displayText='Email'></span>
  </div>
</div>


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
    <li><a href="#inline_content" title="Compartir" class="inline">Compartir</a></li>
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
          

            
         
    </div>



    
        
        
  

</footer>
