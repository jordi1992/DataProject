<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
<script>
window.onload = function() {
	var year = <?php echo json_encode($year) ?>;
	var make = <?php echo  (json_encode($make)) ?>;
	var model = <?php echo (json_encode($model)) ?>;
	var dataset = [];
	var nameset = []
	make.sort();

	for(var x=0; x<year.length; x++){
	};
	
	var current = null;
	var cnt = 0;
    for (var i = 0; i < make.length; i++) {
        if (make[i] != current) {
            if (cnt > 0) {
                dataset.push(cnt);
                nameset.push(current);
            }
            current = make[i];
            cnt = 1;
        } else {
            cnt++;
        }
    }
    if (cnt > 0) {
         dataset.push(cnt);
         nameset.push(current);
    }
	
   var data = [{
    "year": 1904,
    "models_VW": 1,
    "models_Ford": 11
	}, {
    "year": 1915,
    "models_VW": 2,
    "models_Ford": 21
	}, {
    "year": 1920,
    "models_VW": 3,
    "models_Ford": 31
	}, {
    "year": 1925,
    "models_VW": 4,
    "models_Ford": 41
	}, {
    "year": 1930,
    "models_VW": 12,
    "models_Ford": 51
	}, {
    "year": 1935,
    "models_VW": 22,
    "models_Ford": 61
	}, {
    "year": 1940,
    "models_VW": 24,
    "models_Ford": 111
	}, {
    "year": 1945,
    "models_VW": 33,
    "models_Ford": 180
	}, {
    "year": 1950,
    "models_VW": 35,
    "models_Ford": 240
	}, {
    "year": 1960,
    "models_VW": 39,
    "models_Ford": 350    
	}, {
    "year": 2013,
    "models_VW": 120,
    "models_Ford": 648
}];
                   
var margin = {
    top: 10,
    right: 20,
    bottom: 100,
    left: 40
},
margin2 = {
    top: 630,
    right: 20,
    bottom: 20,
    left: 40
},
width = 920 - margin.left - margin.right,
    height = 700 - margin.top - margin.bottom,
    height2 = 700 - margin2.top - margin2.bottom;

var x = d3.scale.linear().range([0, width]),
    x2 = d3.scale.linear().range([0, width]),
    y = d3.scale.linear().range([height, 0]),
    y2 = d3.scale.linear().range([height2, 0]);

var color = d3.scale.ordinal()

var xAxis = d3.svg.axis().scale(x).orient("bottom"),
    xAxis2 = d3.svg.axis().scale(x2).orient("bottom"),
    yAxis = d3.svg.axis().scale(y).orient("left");

var brush = d3.svg.brush()
    .x(x2)
    .on("brush", brushed);


var area = function (Concent) {
    return d3.svg.area()
        .interpolate("path")
        .x(function (d) {
        return x(d.year);
    })
        .y0(height)
        .y1(function (d) {
        return y(d[Concent]);
    });
};
var area2 = function (Concent) {
    return d3.svg.area()
        .interpolate("path")
        .x(function (d) {
        return x2(d.year);
    })
        .y0(height2)
        .y1(function (d) {
        return y2(d[Concent]);
    });
};
	var xAxis = d3.svg.axis().scale(x).orient("bottom").tickFormat(d3.format("d"));

	var svg = d3.select(".content").append("svg")
	    .attr("width", width + margin.left + margin.right)
	    .attr("height", height + margin.top + margin.bottom);

	svg.append("defs").append("clipPath")
	    .attr("id", "clip")
	    .append("rect")
	    .attr("width", width)
	    .attr("height", height);

	var focus = svg.append("g")
	    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

	var context = svg.append("g")
	    .attr("transform", "translate(" + margin2.left + "," + margin2.top + ")");

	    color.domain(d3.keys(data[0]).filter(function (key) {
	        return key !== "year";
	    }));

	    x.domain(d3.extent(data.map(function (d) {
	        return d.year;
	    })));
	    y.domain([0, d3.max(data.map(function (d) {
	        return d.models_Ford+52;
	    }))]);
	    x2.domain(x.domain());
	    y2.domain(y.domain());

	    focus.selectAll('path')
	        .data(['models_VW', 'models_Ford'])
	        .enter()
	        .append('path')
	        .attr('clip-path', 'url(#clip)')
	        .attr('d', function (col) {
	        return area(col)(data);
	    })
	        .attr('class', function (col) {
	        return "path_" + col + " data";
	    });

	    focus.append("g")
	        .attr("class", "x axis")
	        .attr("transform", "translate(0," + height + ")")
	        .call(xAxis);

	    focus.append("g")
	        .attr("class", "y axis")
	        .call(yAxis);

	    context.selectAll('path')
	        .data(['models_VW', 'models_Ford'])
	        .enter()
	        .append('path')
	        .attr('d', function (col) {
	        return area2(col)(data);
	    })
	        .attr('class', function (col) {
	        return "path_" + col;
	    });

	    context.append("g")
	        .attr("class", "x axis")
	        .attr("transform", "translate(0," + height2 + ")")
	        .call(xAxis2);


	    context.append("g")
	        .attr("class", "x brush")
	        .call(brush)
	        .selectAll("rect")
	        .attr("y", -6)
	        .attr("height", height2 + 7);

	    function brushed() {
	        x.domain(brush.empty() ? x2.domain() : brush.extent());
	        focus.selectAll("path.data").attr("d", function (col) {
	            return area(col)(data);
	        });
	        focus.select(".x.axis").call(xAxis);
	    }
}
</script>