<a href="#main" class="element-invisible element-focusable"><?php print t('Skip to content'); ?></a>
<?php if ($main_menu): ?>
<a href="#main-nav" class="element-invisible element-focusable" data-target=".nav-collapse" data-toggle="collapse"><?php print t('Skip to navigation'); ?></a>
<?php endif; ?>
<!-- /#skipnav -->
<?php if ((($user->uid) && ($page['admin_shortcuts'])) || (($user->uid) && ($secondary_nav))): ?>


<!--<div id="admin-shortcuts" class="admin-shortcuts clearfix"> <?php //print render($secondary_nav); ?> <?php// print render($page['admin_shortcuts']); ?> </div>-->
<?php endif; ?>

<!-- ---------------------------------------------------------------------------- -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<style>
  #main, .main, [role=main]{
    background: #FFF !important;
    background-image: none !important;
  }
</style>



<script type="text/javascript">
  $(document).ready(function(){
  //menu usuario
  $("#botonUser").click(function () {
      $("#panelUser").each(function() {
        displaying = $(this).css("display");
        if(displaying == "block") {
          $(this).fadeOut('slow',function() {
           $(this).css("display","none");
          });
        } else {
          $(this).fadeIn('slow',function() {
            $(this).css("display","block");
          });
        }
      });
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

  if(window.location.href.indexOf("forum") > -1 || window.location.href.indexOf("blog") > -1 || window.location.href.indexOf("docs") > -1) {
       $('#panel2').attr("style","display:block;");
       $("#boton2").parents().addClass("active");
  } else if (window.location.href.indexOf("app") > -1){
      $("#boton3").parents().addClass("active");
  } else if (window.location.href.indexOf("solicitudes") > -1){
      $("#boton4").parents().addClass("active");
  }

});
</script>
    <!--[if lte ie 8]><script type="text/javascript" src="http://datos.org.py/datos/datos/fanstatic/vendor/:version:2014-11-04T18:07:34.47/html5.min.js"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="http://datos.org.py/datos/fanstatic/vendor/select2/select2.css" />
<link rel="stylesheet" type="text/css" href="http://datos.org.py/datos/fanstatic/css/main.min.css" />
<link rel="stylesheet" type="text/css" href="http://datos.org.py/datos/fanstatic/vendor/font-awesome/css/font-awesome.min.css" />
<!--[if ie 7]><link rel="stylesheet" type="text/css" href="http://datos.org.py/datos/datos/fanstatic/vendor/:version:2014-11-04T18:07:34.47/font-awesome/css/font-awesome-ie7.min.css" /><![endif]-->
<link rel="stylesheet" type="text/css" href="http://datos.org.py/datos/datos/fanstatic/ckanext-harvest/styles/harvest.css" />
<link rel="stylesheet" type="text/css" href="/datos/fanstatic/datospy_theme/datospy_theme.css">
<link rel="stylesheet" type="text/css" href="http://datos.org.py/datos/datos/fanstatic/datospy_theme/styles/introjs.css" />


<style type="text/css">

.masthead .account #botonCerrarUser {
color: #333;
text-decoration: none;
position: absolute;
top: 0px;
right: 3px;
font-size: 11px;
}

.clearfix:after {
content: "";
display: block;
height: 0;
clear: both;
visibility: hidden;
}

.node-blog {
border: solid 1px #ddd;
margin-bottom: 10px;
padding-left: 10px;
border-radius: 10px;
}
.node-blog .user-picture {
float: left;
margin-right: 20px;
margin-top: 10px;
}

.node-blog .user-picture img {
border: solid;
border-radius: 55px;
border: solid #187794;

}


.node-blog h2{
  margin-bottom: 0px;
}

.node-app {

 border: solid 1px #ddd;
margin-bottom: 10px;
padding-left: 10px;
border-radius: 10px;


}

.node .submitted {
margin-bottom: 1em;
font-size: 10px;
margin-top: -7px;}



.node-solicitudes {
border: solid 1px #ddd;
margin-bottom: 10px;
padding-left: 10px;
border-radius: 10px;
}
.node-solicitudes .user-picture {
float: left;
margin-right: 20px;
margin-top: 10px;
}

.node-solicitudes .user-picture img {
border: solid;
border-radius: 55px;
border: solid #187794;

}


.node-solicitudes h2{
  margin-bottom: 0px;
}

.field-name-field-voto-solicitud .field-label {

  display: none;
}


.field-name-field-voto-solicitud .fivestar-oxygen {
float: left;
}

/* FORO*/
.forum-post-panel-main {
margin-left: 150px;
 min-height: 100px; 
height: auto !important;
height: 230px;
border-left: solid #ddd;
}

.forum-post {
border: solid #ddd;
border-radius: 14px;
}


.user-picture img {
border-radius: 60px;
border: solid #6EBCDB;
}

.forum-post-info.clearfix {
border-top-left-radius: 10px;
border-top-right-radius: 10px;
background-color: #ddd;
}

.forum-post-footer.clearfix {
background-color: #ddd;
border-bottom-left-radius: 10px;
border-bottom-right-radius: 10px;
}

.author-pane {
text-align: center;
position: relative;

}
.author-pane a {
}

.forum-post a.username {
position: absolute;
/* top: 19px; */
right: 45px;
text-align: left;
/* height: 50px; */
bottom: -11px;



}



.forum-post .user-picture img:hover {
border-radius: 60px;
border: solid #6EBCDB;
 opacity: 0.4;
filter: alpha(opacity=40);

}



/* FIN FORO*/
.comment {
border: solid #ddd 1px;
border-radius: 10px;
padding-left: 10px;
}



</style>

<header class="masthead">
  <div class="container">
    <hgroup class="header-image">

          <a class="logo" href="/"><img data-step="1" data-intro='Bienvenidos al portal de Datos abiertos de la Sociedad Civil' src="/datos/img/logo_final_blanco_chico.png" alt="DatosPy Logo" title="DatosPy Logo" /></a>

    </hgroup>

    <div class="content">
        <nav class="section navigation">
          <ul class="nav nav-pills">
            <li><a href="/">Inicio</a></li>
            <li><a href="#" title="Catálogo" id="boton1">Catálogo</a></li>
            <li><a href="#" title="Comunidad" id="boton2">Comunidad</a></li>
            <li><a href="/app" title="Aplicaciones" id="boton3">Aplicaciones</a></li>
            <li><a href="/solicitudes" title="Solicitá datos" id="boton4">Solicitá datos</a></li>
          </ul>
        </nav>

        <form data-step="2" data-intro='Desde aquí podés buscar los datos que necesitás' class="section site-search simple-input" action="/datos/dataset" method="get">
          <div class="field">
            <label for="field-sitewide-search">Buscar datos</label>
            <input id="field-sitewide-search" type="text" name="q" placeholder="Buscar datos" />
            <button class="btn-search" type="submit"><i class="icon-search"></i></button>
          </div>
        </form>
      

      <a href="javascript:void(0);" title="Ayuda" class="ayuda" id="comienzo">Ayuda</a>

    </div>
 

    <div  data-step="3" data-intro='Editá tu perfil y mirá tus nofificaciones desde acá' class="account avatar authed" data-module="me" data-me="1c0a6e49-87df-4d57-a047-8161c4270340" style="display: none;" id="panelUser">
            <div class="arrow1"></div>

            <?php if ((($user->uid) && ($page['admin_shortcuts'])) || (($user->uid) && ($secondary_nav))): ?>

                <?php echo ' <a href="#" id="botonCerrarUser">[x]</a>
            <ul class="unstyled">
              
              
              
                <li>
                  <a href="/user" title="Mi Cuenta">
                    <i class="icon-legal"></i>
                    Mi Cuenta
                  </a>
                </li>       
          
                <li>
                  <a href="/user/logout" title="Salir">
                    <i class="icon-signout"></i>
                    Salir
                  </a>
                </li>
              
              
            </ul>';?>

              <?php else:

                echo '
                <ul class="unstyled"> 
                  <li>
                    <a href="/user/login" class="image" title="Ver perfil">Iniciar Sesión</a>
                  </li>           
                </ul>';

               ?>

              <?php endif; ?>


           
          </div>

          <a href="#" title="Opciones para usuarios" class="user" id="botonUser">User</a>

  </div>
</header>

<div class="sub-menu" id="panel1"> 
  <div class="container">
    <ul>
    <li><a href="/datos/dataset">Conjuntos de datos</a></li>
    <li><a href="/datos/organization">Organizaciones</a></li>
    <li><a href="/datos/group">Grupos</a></li>
    <li><a href="/datos/dataset/new" title="Crear DataSet">Crear DataSet</a></li>
    </ul>
  </div>
</div>

<div class="sub-menu" id="panel2"> 
  <div class="container">
    <ul>
      <li><a href="/blog" title="Blog">Blog</a></li>
      <li><a href="/forum" title="Foro">Foro</a></li>
      <li><a href="/docs" title="Docs">Docs</a></li>
      <li><a href="#">Compartir</a></li>
    </ul>
  </div>
</div>



<!-- ---------------------------------------------------------------------------- -->

<div id="main" class="clearfix main" role="main">
  <div class="container">
    <?php if (!($is_front) && ($breadcrumb)): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>
    <?php if ($page['main_top']): ?>
    <div id="main-top" class="row-fluid main-top"> <?php print render($page['main_top']); ?> </div>
    <?php endif; ?>
    <?php if ($page['main_upper']): ?>
    <div id="main-upper" class="row-fluid main-upper"> <?php print render($page['main_upper']); ?> </div>
    <?php endif; ?>
    <div id="main-content" class="row main-content">
      <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="sidebar span3 site-sidebar-first">
        <div class="row-fluid"><?php print render($page['sidebar_first']); ?></div>
      </div>
      <!-- /#sidebar-first -->
      <?php endif; ?>
      <div id="content" class="mc-content <?php if (($page['sidebar_first']) && ($page['sidebar_second'])): print 'span6'; elseif (($page['sidebar_first']) || ($page['sidebar_second'])): print 'span9'; else: print 'span12'; endif; ?>">
        <div id="content-wrapper" class="content-wrapper">
          <div id="content-head" class="row-fluid content-head">
            <?php if ($page['highlighted']): ?>
            <div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div>
            <?php endif; ?>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1 class="title" id="page-title"> <?php print $title; ?> </h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
            <div class="tabs"> <?php print render($tabs); ?> </div>
            <?php endif; ?>
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
          </div>
          <?php if ($page['content_top']): ?>
          <div id="content-top" class="row-fluid content-top"> <?php print render($page['content_top']); ?> </div>
          <?php endif; ?>
          <?php if ($page['content_upper']): ?>
          <div id="content-upper" class="row-fluid content-upper"> <?php print render($page['content_upper']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content']) || ($feed_icons)): ?>
          <div id="content-body" class="row-fluid content-body"> <?php print render($page['content']); ?> <?php print $feed_icons; ?> </div>
          <?php endif; ?>
          <?php if ($page['content_row2']): ?>
          <div id="content-row2" class="row-fluid content-row2"> <?php print render($page['content_row2']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col2-1']) || ($page['content_col2-2'])): ?>
          <div id="content-col2" class="row-fluid content-col2">
            <?php if ($page['content_col2-1']): ?>
            <div class="span6">
              <div id="content-col2-1" class="span12 clearfix clear-row"> <?php print render($page['content_col2-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col2-2']): ?>
            <div class="span6">
              <div id="content-col2-2" class="span12 clearfix clear-row"> <?php print render($page['content_col2-2']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_row3']): ?>
          <div id="content-row3" class="row-fluid content-row3"> <?php print render($page['content_row3']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col3-1']) || ($page['content_col3-2']) || ($page['content_col3-3'])): ?>
          <div id="content-col3" class="row-fluid content-col3">
            <?php if ($page['content_col3-1']): ?>
            <div class="span4">
              <div id="content-col3-1" class="span12 clearfix clear-row"> <?php print render($page['content_col3-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col3-2']): ?>
            <div class="span4">
              <div id="content-col3-2" class="span12 clearfix clear-row"> <?php print render($page['content_col3-2']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col3-3']): ?>
            <div class="span4">
              <div id="content-col3-3" class="span12 clearfix clear-row"> <?php print render($page['content_col3-3']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_row4']): ?>
          <div id="content-row4" class="row-fluid content-row4"> <?php print render($page['content_row4']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col4-1']) || ($page['content_col4-2']) || ($page['content_col4-3']) || ($page['content_col4-4'])): ?>
          <div id="content-col4" class="row-fluid content-col4">
            <?php if ($page['content_col4-1']): ?>
            <div class="span3">
              <div id="content-col4-1" class="span12 clearfix clear-row"> <?php print render($page['content_col4-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-2']): ?>
            <div class="span3">
              <div id="content-col4-2" class="span12 clearfix clear-row"> <?php print render($page['content_col4-2']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-3']): ?>
            <div class="span3">
              <div id="content-col4-3" class="span12 clearfix clear-row"> <?php print render($page['content_col4-3']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-4']): ?>
            <div class="span3">
              <div id="content-col4-4" class="span12 clearfix clear-row"> <?php print render($page['content_col4-4']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_lower']): ?>
          <div id="content-lower" class="row-fluid content-lower"> <?php print render($page['content_lower']); ?> </div>
          <?php endif; ?>
          <?php if ($page['content_bottom']): ?>
          <div id="content-bottom" class="row-fluid content-bottom"> <?php print render($page['content_bottom']); ?> </div>
          <?php endif; ?>
        </div>
        <!-- /#content-wrap --> 
      </div>
      <!-- /#content -->
      <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="sidebar span3 site-sidebar-second">
        <div class="row-fluid"><?php print render($page['sidebar_second']); ?></div>
      </div>
      <!-- /#sidebar-second -->
      <?php endif; ?>
    </div>
    <?php if ($page['main_lower']): ?>
    <div id="main-lower" class="row-fluid main-lower"> <?php print render($page['main_lower']); ?> </div>
    <?php endif; ?>
    <?php if ($page['main_bottom']): ?>
    <div id="main-bottom" class="row-fluid main-bottom"> <?php print render($page['main_bottom']); ?> </div>
    <?php endif; ?>
  </div>
</div>
<!-- /#main, /#main-wrapper -->
<?php if ($page['footer']): ?>
<?php print render($page['footer']); ?>
<!-- /#footer -->
<?php endif; ?>
