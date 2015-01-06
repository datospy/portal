

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//datos.org.py/datos/analytics.js','ga');

  ga('create', 'UA-57141550-1', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript">
    window.doorbellOptions = {
        appKey: 'tGIBajOKiOiKufLJjtXNVzm61v3d68LSYkez60puiZ8kGGlj5vXtXtzh3v4q1ZXY'
    };
    (function(d, t) {
        var g = d.createElement(t);g.id = 'doorbellScript';g.type = 'text/javascript';g.async = true;g.src = 'https://doorbell.io/button/697';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(g);
    }(document, 'script'));
</script>


<style type="text/css">

footer{
  /*position: absolute;
  left: 0;
  right: 0;
  bottom: 0;*/
}
.rightx {
float: right;
margin-right: 2% !important;
text-align: right;
width: 48% !important;
}
.leftx {
float: left;
margin-left: 2% !important;
width: 48% !important;
}
.clearfix:after {
  display: table;
}
.unstyled li{
  padding-right: 0 !important;
}
</style>

<footer class="site-footer">

    <div class="leftx">
      <div class="padding2010">
        Con el apoyo del <a href="http://ceamso.org.py/es/proyectos/20-programa-de-democracia-y-gobernabilidad">Programa de Democracia y Gobernabilidad (USAID-CEAMSO)</a>
      </div>
    </div>
    
    <div class="rightx">
      <ul class="unstyled">
          <li><a href="/datos/about">Acerca de DatosPY</a></li>
          <li><a href="#" class="tw" title="Twitter"></a></li>
          <li><a href="#" class="fb" title="Facebook"></a></li>
          <li><a href="https://github.com/datospy" class="git" title="Github"></a></li>
      </ul>


      <script type='text/javascript' src='http://datos.org.py/sites/all/themes/open_framework/js/jquery.sharrre.min.js'></script>
      <div id="example2">
        <div id="shareme" data-url="http://www.datos.org.py/" data-text="Datos Abiertos del Paraguay"></div>
      </div>
      <script>
        var url      = window.location.href;
      $("#shareme").attr("data-url", url);
      
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
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <style type="text/css">
        #example2{
          float:right;
          display: block;
          margin: 10px 0 0 0;
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


        /* AYUDANOS A MEJORAR*/
#doorbell-button {

position: static;
/* visibility: visible!important; */
/* cursor: pointer; */
text-align: left;
/* height: 15px; */
margin-top: 6px;
/* bottom: 0; */
width: 100%;
/* border: 0; */
font-size: 14px;
background: #EEEEEE;
color: #666;
padding: 2px;
padding-left: 3%;
/* padding-bottom: 16px; */
margin: 0;
z-index: 0;
/* -webkit-border-radius: 5px 5px 0 0; */
border-radius: none;
/* border-radius: 5px 5px 0 0; */

}

.site-footer {

  padding-bottom: 0px;
}




/* AYUDANOS A MEJORAR*/


      </style>


    </div>
        
          


</footer>
