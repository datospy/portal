$( document ).ready(function() {
    console.log( "ready!" );

    var path = window.location.pathname ;


 // TTUTORIAL DE ORGANIZACION 
      if (window.location.hash.substring(1)=="multipageorg") {
        console.log("adentro");
        $("a[href$='ceamso']").attr("data-step","7");
        $("a[href$='ceamso']").attr("data-intro","Mirá los detalles y datasets de cada organización haciendo click");
        $("a[href$='organization/new']").attr("data-step","8");
        $("a[href$='organization/new']").attr("data-intro","Creá un perfil a una organización");
            
        introJs().setOptions({ 'skipLabel': 'Finalizar' , 'doneLabel': 'Siguiente página', 'nextLabel': 'Sgte', 'prevLabel': 'Ant.'}).goToStep(6).start().oncomplete(function() {
          window.location.href = 'group/#multipagegroup';
        });
      }
 // TUTORIAL DE GRUPO 
       if (window.location.hash.substring(1)=="multipagegroup") {
        console.log("adentro");
        $("a[href$='academia']").attr("data-step","7");
        $("a[href$='academia']").attr("data-intro","Hacé click en el grupo de tu interés y mirá qué datasets relacionados hay");
        $("a[href$='group/new']").attr("data-step","8");
        $("a[href$='group/new']").attr("data-intro","Creá un nuevo grupo");
       

        introJs().setOptions({ 'skipLabel': 'Finalizar' , 'doneLabel': 'Fin', 'nextLabel': 'Sgte', 'prevLabel': 'Ant.'}).goToStep(6).start();

      }

      
 // TUTORIAL DE DATASET 
document.getElementById('comienzo').onclick = function() {
  $("a[href$='dataset/new']").attr("data-step","6");
  $("a[href$='dataset/new']").attr("data-intro","Creá un nuevo dataset");


       introJs().setOptions({ 'skipLabel': 'Finalizar' , 'doneLabel': 'Siguiente página', 'nextLabel': 'Sgte', 'prevLabel': 'Ant.'}).start();

};


//TUTORIAL DE CREAR DATASET



if ( path == "/datos/dataset/new"){

 console.log("Tutorial nuevo dataset");

 

 $('<h2 class="module-heading"><a id="tuto-create-dataset" href="javascript:void(0);" >Tutorial</a></h2>').insertAfter(".module-heading");


document.getElementById("tuto-create-dataset").onclick = function() {
  $("#field-title").attr("data-step","4");
  $("#field-title").attr("data-intro","Agregá un titulo que describa el Conjunto de Datos que estás creando");

 

   $("#field-notes").attr("data-step","5");
  $("#field-notes").attr("data-intro","Escribe una breve descripcion del dataset. Ej: fuente, la forma en que lo conseguiste, historia, responsable, los campos, cantidad de registros, etc.");

   $("#s2id_field-tags").attr("data-step","6");
  $("#s2id_field-tags").attr("data-intro","Agregá palabras clave relacionadas para que pueda ser más fácil de encontrar");

   $("#s2id_field-license").attr("data-step","7");
  $("#s2id_field-license").attr("data-intro","Es importante el correcto uso de las licencias. Esto permite que las personas puedan o no usar con total libertad los datos");



  


       introJs().setOptions({ 'skipLabel': 'Finalizar' , 'doneLabel': 'Fin', 'nextLabel': 'Sgte', 'prevLabel': 'Ant.'}).goToStep(4).start().oncomplete(function() {
          window.location.href = 'organization/#multipageorg';
        });

};




}





});