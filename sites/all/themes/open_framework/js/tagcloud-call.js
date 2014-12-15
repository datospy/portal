$(document).ready(function() {

  /* list=new Array;
   $.getJSON("http://datos.org.py/datos/api/3/action/tag_list?all_fields=True", function(data){

   		//console.log(data);

   
   		

   		var arrayLength = data.result.length;
   		//console.log(arrayLength);
		for (var i = 0; i < arrayLength; i++) {
		    //console.log(data.result[i]);

		    url = "http://datos.org.py/datos/api/3/action/tag_search?q=" + data.result[i].name;

		    //console.log(url);
		     $.getJSON(url, function(data){
		     	list.push(data);

		   });
		}

   });

        frequencyList = list.map(function(t){
        return {"text":t["lisdisplay_name"], "size":t["count"]}
   });*/




pag = '';

$tag=new Array;
$List = new Array;

    $.get( "/datos/", function( data ) {
  //console.log(data);


$first_step = data.split('<div id="datos" style="display:none;">') ;
pag = $first_step[1].split("</div>")[0];
$tag = $.parseJSON(pag);
$List = $tag.map(function(t){
        return {"text":t["display_name"], "size":t["count"]}
   });

createCloud($List);



});





   
});
