var cwidth = 290;
var cheight = 200;

var words_array = new Array();
var count_array = new Array();

var fill = d3.scale.category20();

function draw(words) {
    d3.select("#tag-cloud").append("svg")
    .attr("width", cwidth)
    .attr("height", cheight)
    .append("g")
    .attr("transform", "translate(215,110)")
    .selectAll("text")
    .data(words)
    .enter().append("text")
    //.style("class", "click")
    .style("font-size", function(d) { return d.size + "px"; })
    .style("font-family", "Impact")
    .style("fill", function(d, i) { return fill(i); })
    .attr("text-anchor", "middle")
    .on("click", function(d) {
         //window.location.href="datos/"+"dataset?tags="+d.text;

         var win = window.open("datos/"+"dataset?tags="+d.text, '_blank');
         win.focus();

         //alert(d.text);
     })
    .attr("transform", function(d) {
    	return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
    })
    .text(function(d) { return d.text; });
}

function createCloud(data) {

	for(var i = 0 ; i<data.length ; i++){
		words_array[i] = data[i].text;
		count_array[i] = data[i].size;
		//if(i>80) break;
	}

	var minCount = Math.min.apply(null, count_array);
	var maxCount = Math.max.apply(null, count_array);
	var minSize = 18;
	var maxSize = 30;

	d3.layout.cloud()
	.size([cwidth*0.9, cheight*0.9])
	.words(words_array
		.map(
			function(d) {
				var count = count_array[words_array.indexOf(d)];
				var factor = (maxSize-minSize)/(maxCount-minCount);
                var size = minSize + ((maxCount-(maxCount-(count-minCount)))*factor);
				return {text: d, size: size};
      		}
		)
	)
	.rotate(0)
    .font("Impact")
    .fontSize(function(d) { return d.size; })
    .on("end", draw)
	.start();
}

