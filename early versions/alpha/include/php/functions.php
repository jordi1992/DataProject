<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
<script>
window.onload = function() {
	var make_id = <?php echo json_encode($make_id) ?>;
	var make = <?php echo  (json_encode($make)) ?>;
	var model = <?php echo  (json_encode($model)) ?>;
	var model_id = <?php echo (json_encode($model_id)) ?>;
	var current = null;
    var cnt = 0;
	var dataset = [];
	make.sort();

    for (var i = 0; i < make.length; i++) {
        if (make[i] != current) {
            if (cnt > 0) {
                // console.log(current + " has been found");
                dataset.push(current);
            }
            current = make[i];
            cnt = 1;
        } else {
            cnt++;
        }
    }
    if (cnt > 0) {
        // console.log(current + " has been found");
        dataset.push(current);
    }

    var none = "Doesn't produce any cars!"
    var germany = [];
    var netherlands = [];
    var france = [];
    var japan = [];
    var italy = [];
    var uk = [];
    var usa = [];
    var china = [];
    var korea = [];
    var sweden = [];
    var romenia = [];
    var russia = [];
    var greece = [];
    var spain = [];
    var india = [];
    var czech = [];
    var all = [germany, netherlands, france, japan, italy, uk, usa, china, korea, sweden, romenia, russia, greece, spain, india, czech];
    
 	for (var x = 0; x < dataset.length; x++) {
	   	if(dataset[x] == "Volkswagen" || dataset[x] == "Opel" || dataset[x] == "BMW" || dataset[x] == "Mercedes Benz" || dataset[x] == "Porsche" || dataset[x] == "Audi" || dataset[x] == "Smart" || dataset[x] == "Wiesmann" || dataset[x] == "Trabant" || dataset[x] == "Wartburg"){
	   		germany.push(dataset[x]);
            germany.push("</br>");
	   	}  if(dataset[x] == "Spyker"){
            netherlands.push(dataset[x]);
            netherlands.push("</br>");
	    }  if(dataset[x] == "Aixim" || dataset[x] == "Bugatti" || dataset[x] == "Alpina" || dataset[x] == "Citroen" || dataset[x] == "Peugeot" || dataset[x] == "Renault" || dataset[x] == "Talbot"){
            france.push(dataset[x]);
            france.push("</br>");
        }  if(dataset[x] == "Acura" || dataset[x] == "Daihatsu" || dataset[x] == "Datsun" || dataset[x] == "Honda" || dataset[x] == "Infiniti" || dataset[x] == "Izusu" || dataset[x] == "Lexus" || dataset[x] == "Mazda" || dataset[x] == "Mitsubishi" || dataset[x] == "Nissan" || dataset[x] == "Subaru" || dataset[x] == "Suzuki" || dataset[x] == "Toyota"){
            japan.push(dataset[x]);
            japan.push("</br>");
        }  if(dataset[x] == "Alfa Romeo" || dataset[x] == "Autobianchi" || dataset[x] == "Ferrari" || dataset[x] == "Fiat" || dataset[x] == "Lamborghini" || dataset[x] == "Lancia" || dataset[x] == "Maserati" || dataset[x] == "Tazzari"){
            italy.push(dataset[x]);
            italy.push("</br>");
        }  if(dataset[x] == "Ariel" || dataset[x] == "Aston Martin" || dataset[x] == "Austin Healey" || dataset[x] == "Austin Morris" || dataset[x] == "Bentley" || dataset[x] == "Caterham" || dataset[x] == "Jaguar" || dataset[x] == "Land Rover" || dataset[x] == "Lotus" || dataset[x] == "MG" || dataset[x] == "Mini" || dataset[x] == "Rolls Royce" || dataset[x] == "Rover" || dataset[x] == "Vauxhall" || dataset[x] == "Panther" || dataset[x] == "Triumph" || dataset[x] == "TVR"){
            uk.push(dataset[x]);
            uk.push("</br>");
        }  if(dataset[x] == "Buick" || dataset[x] == "Cadillac" || dataset[x] == "Chevrolet" || dataset[x] == "Chrysler" || dataset[x] == "Corvette" || dataset[x] == "Dodge" || dataset[x] == "Ford" || dataset[x] == "GMC" || dataset[x] == "GEO" || dataset[x] == "Hummer" || dataset[x] == "Jeep" || dataset[x] == "Lincoln" || dataset[x] == "Pontiac" || dataset[x] == "Rambler" || dataset[x] == "Cobra" || dataset[x] == "Mercury" || dataset[x] == "Oldsmobile" || dataset[x] == "Plymouth" || dataset[x] == "Villager"){
            usa.push(dataset[x]);
            usa.push("</br>");
        }  if(dataset[x] == "China Motors" || dataset[x] == "Landwind" || dataset[x] == "FAW" || dataset[x] == "Zotye"){
            china.push(dataset[x]);
            china.push("</br>");
        }  if(dataset[x] == "Daewoo" || dataset[x] == "Hyundai" || dataset[x] == "Kia" || dataset[x] == "SsangYong"){
            korea.push(dataset[x]);
            korea.push("</br>"); 
        }  if(dataset[x] == "Saab" || dataset[x] == "Volvo"){
            sweden.push(dataset[x]);
            sweden.push("</br>"); 
        }  if(dataset[x] == "Dacia"){
            romenia.push(dataset[x]);
            romenia.push("</br>");
        }  if(dataset[x] == "Lada" || dataset[x] == "Uaz"){
            russia.push(dataset[x]);
            russia.push("</br>");
        }  if(dataset[x] == "Ueec"){
            greece.push(dataset[x]);
            greece.push("</br>");
        }  if(dataset[x] == "Seat"){
            spain.push(dataset[x]);
            spain.push("</br>");
        }  if(dataset[x] == "Tata"){
            india.push(dataset[x]);
            india.push("</br>"); 
        }  if(dataset[x] == "Skoda"){
            czech.push(dataset[x]);
            czech.push("</br>");         
        }
    }
   
    //    for (x=0; x<all.length;x++){
    //     console.log(all[x].length /2);
    // }

    var links = [
        {source: "Volkswagen", target: "Car makes"},
        {source: "Seat", target: "Volkswagen"},
        {source: "Audi", target: "Volkswagen"},
        {source: "Skoda", target: "Volkswagen"},
        {source: "Bentley", target: "Volkswagen"},
        {source: "Porsche", target: "Volkswagen"},
        {source: "Lamborghini", target: "Volkswagen"},
        {source: "Bugatti", target: "Volkswagen"},
        {source: "Suzuki", target: "Volkswagen"},
        {source: "GM", target: "Car makes"},
        {source: "Chevrolet", target: "GM"},
        {source: "Buick", target: "GM"},
        {source: "GMC", target: "GM"},
        {source: "Cadillac", target: "GM"},
        {source: "Opel", target: "GM", },
        {source: "Vauxhall", target: "GM"},
        {source: "Daewoo", target: "GM"},
        {source: "Toyota", target: "Car makes"},
        {source: "Lexus", target: "Toyota"},
        {source: "Daihatsu", target: "Toyota"},
        {source: "BMW", target: "Car makes"},
        {source: "Mini", target: "BMW"},
        {source: "Rolls Royce", target: "BMW"},
        {source: "Renault", target: "Car makes"},
        {source: "Nissan", target: "Renault"},
        {source: "Infiniti", target: "Nissan"},
        {source: "Datsun", target: "Nissan"},
        {source: "Dacia", target: "Renault"},
        {source: "Alpina", target: "Renault"},
        {source: "Stand alone", target: "Car makes"},
        {source: "Mazda", target: "Stand alone"},
        {source: "Subaru", target: "Stand alone"},
        {source: "Lotus", target: "Stand alone"},
        {source: "Volvo", target: "Stand alone"},
        {source: "Aston Martin", target: "Stand alone"},
        {source: "Mitsubishi", target: "Stand alone"},
        {source: "Mercedes Benz", target: "Car makes"},
        {source: "Smart", target: "Mercedes Benz"},
        {source: "Fiat", target: "Car makes"},
        {source: "Alfa Romeo", target: "Fiat"},
        {source: "Chrysler", target: "Fiat"},
        {source: "Ferrari", target: "Fiat"},
        {source: "Lancia", target: "Fiat"},
        {source: "Maserati", target: "Fiat"},
        {source: "Honda", target: "Car makes"},
        {source: "Acura", target: "Honda"},
        {source: "Citroen", target: "Car makes"},
        {source: "Peugeot", target: "Citroen"},
        {source: "Dodge", target: "Chrysler"},
        {source: "Jeep", target: "Chrysler"},
        {source: "Spyker", target: "Car makes"},
        {source: "Saab", target: "Spyker"},
        {source: "Ford", target: "Car makes"},
        {source: "Lincoln", target: "Ford"},
        {source: "Hyundai", target: "Car makes"},
        {source: "Kia", target: "Hyundai"},
        {source: "Jaguar", target: "Car makes"},
        {source: "Land Rover", target: "Jaguar"},
    ];

    var nodes = {};

    // Compute the distinct nodes from the links.
    links.forEach(function(link) {
      link.source = nodes[link.source] || (nodes[link.source] = {name: link.source});
      link.target = nodes[link.target] || (nodes[link.target] = {name: link.target});
    });

    var width = 600,
        height = 650;

    var force = d3.layout.force()
        .size([width, height])
        .linkDistance(50)
        .charge(-500)
        .on("tick", tick)
        .nodes(d3.values(nodes))
        .links(links)
        .start();

    var drag = force.drag()
        .on("dragstart", dragstart)

    var svg = d3.select("#network").append("svg")
        .attr("width", width)
        .attr("height", height);

    var link = svg.selectAll(".link")
        .data(force.links())
        .enter().append("line")
        .attr("class", "link");

    var node = svg.selectAll(".node")
        .data(force.nodes())
        .enter().append("g")
        .attr("class", "node")

    node.append("circle")
        .attr("r", 6)
        .on("dblclick", dblclick)
        .call(drag);

    node.append("text")
        .attr("x", 7)
        .attr("dy", ".25em")
        // .attr("transform", "rotate(90)")
        .text(function(d) { return d.name; });

        function dblclick(d) {
            d3.select(this).classed("fixed", d.fixed = false);
        }

        function dragstart(d) {
            d3.select(this).classed("fixed", d.fixed = true);
        }

    function tick() {
      link
          .attr("x1", function(d) { return d.source.x; })
          .attr("y1", function(d) { return d.source.y; })
          .attr("x2", function(d) { return d.target.x; })
          .attr("y2", function(d) { return d.target.y; });

      node
          .attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; });
    }

    var map = new Datamap({
        scope: 'world',
        element: document.getElementById('container1'),
        projection: 'mercator',
        height:1200, 
        geographyConfig: {
            highlightOnHover: true,
            highlightFillColor: 'steelblue',
            highlightBorderColor: 'white',
            highlightBorderWidth: 1,
            popupTemplate: function (geo, data) {
                if ( !data ) return;
                return ['<div class="hoverinfo">','<h1>Names of the car makes in ' + geo.properties.name,'</h1>' + data.country_makes, '</div>'].join('');
                },
        },
    fills: {
      defaultFill: '#D6E4E1',
      none :' #D6E4E1',
      color1 :"#d0d1e6", // 1
      color2 :"#a6bddb", // 4
      color3 :"#74a9cf", // 7
      color4 :"#3690c0", // 10
      color5 :"#0570b0", // 13
      color6 :"#045a8d", // 16
      color7 :"#023858"  // 19
    }, data: {
    'ABW': {country_makes: none, fillKey: 'none'},
    'AFG': {country_makes: none, fillKey: 'none'},
    'AGO': {country_makes: none, fillKey: 'none'},
    'AIA': {country_makes: none, fillKey: 'none'},
    'ALA': {country_makes: none, fillKey: 'none'},
    'ALB': {country_makes: none, fillKey: 'none'},
    'AND': {country_makes: none, fillKey: 'none'},
    'ARE': {country_makes: none, fillKey: 'none'},
    'ARG': {country_makes: none, fillKey: 'none'},
    'ARM': {country_makes: none, fillKey: 'none'},
    'ASM': {country_makes: none, fillKey: 'none'},
    'ATA': {country_makes: none, fillKey: 'none'},
    'ATF': {country_makes: none, fillKey: 'none'},
    'ATG': {country_makes: none, fillKey: 'none'},
    'AUS': {country_makes: none, fillKey: 'none'},
    'AUT': {country_makes: none, fillKey: 'none'},
    'AZE': {country_makes: none, fillKey: 'none'},
    'BDI': {country_makes: none, fillKey: 'none'},
    'BEL': {country_makes: none, fillKey: 'none'},
    'BEN': {country_makes: none, fillKey: 'none'},
    'BES': {country_makes: none, fillKey: 'none'},
    'BFA': {country_makes: none, fillKey: 'none'},
    'BGD': {country_makes: none, fillKey: 'none'},
    'BGR': {country_makes: none, fillKey: 'none'},
    'BHR': {country_makes: none, fillKey: 'none'},
    'BHS': {country_makes: none, fillKey: 'none'},
    'BIH': {country_makes: none, fillKey: 'none'},
    'BLM': {country_makes: none, fillKey: 'none'},
    'BLR': {country_makes: none, fillKey: 'none'},
    'BLZ': {country_makes: none, fillKey: 'none'},
    'BMU': {country_makes: none, fillKey: 'none'},
    'BOL': {country_makes: none, fillKey: 'none'},
    'BRA': {country_makes: none, fillKey: 'none'},
    'BRB': {country_makes: none, fillKey: 'none'},
    'BRN': {country_makes: none, fillKey: 'none'},
    'BTN': {country_makes: none, fillKey: 'none'},
    'BVT': {country_makes: none, fillKey: 'none'},
    'BWA': {country_makes: none, fillKey: 'none'},
    'CAF': {country_makes: none, fillKey: 'none'},
    'CAN': {country_makes: none, fillKey: 'none'},
    'CCK': {country_makes: none, fillKey: 'none'},
    'CHE': {country_makes: none, fillKey: 'none'},
    'CHL': {country_makes: none, fillKey: 'none'},
    'CHN': {country_makes: china, fillKey:'color2'},
    'CIV': {country_makes: none, fillKey: 'none'},
    'CMR': {country_makes: none, fillKey: 'none'},
    'COD': {country_makes: none, fillKey: 'none'},
    'COG': {country_makes: none, fillKey: 'none'},
    'COK': {country_makes: none, fillKey: 'none'},
    'COL': {country_makes: none, fillKey: 'none'},
    'COM': {country_makes: none, fillKey: 'none'},
    'CPV': {country_makes: none, fillKey: 'none'},
    'CRI': {country_makes: none, fillKey: 'none'},
    'CUB': {country_makes: none, fillKey: 'none'},
    'CUW': {country_makes: none, fillKey: 'none'},
    'CXR': {country_makes: none, fillKey: 'none'},
    'CYM': {country_makes: none, fillKey: 'none'},
    'CYB': {country_makes: none, fillKey: 'none'},
    'CZE': {country_makes: czech, fillKey: 'color1'},
    'DEU': {country_makes: germany, fillKey: 'color4'},
    'DJI': {country_makes: none, fillKey: 'none'},
    'DMA': {country_makes: none, fillKey: 'none'},
    'DNK': {country_makes: none, fillKey: 'none'},
    'DOM': {country_makes: none, fillKey: 'none'},
    'DZA': {country_makes: none, fillKey: 'none'},
    'ECU': {country_makes: none, fillKey: 'none'},
    'EGY': {country_makes: none, fillKey: 'none'},
    'ERI': {country_makes: none, fillKey: 'none'},
    'ESH': {country_makes: none, fillKey: 'none'},
    'ESP': {country_makes: spain, fillKey: 'color1'},
    'EST': {country_makes: none, fillKey: 'none'},
    'ETH': {country_makes: none, fillKey: 'none'},
    'FIN': {country_makes: none, fillKey: 'none'},
    'FJI': {country_makes: none, fillKey: 'none'},
    'FLK': {country_makes: none, fillKey: 'none'},
    'FRA': {country_makes: france, fillKey: 'color2'},
    'FRO': {country_makes: none, fillKey: 'none'},
    'FSM': {country_makes: none, fillKey: 'none'},
    'GAB': {country_makes: none, fillKey: 'none'},
    'GBR': {country_makes: uk, fillKey: 'color7'},
    'GEO': {country_makes: none, fillKey: 'none'},
    'GGY': {country_makes: none, fillKey: 'none'},
    'GHA': {country_makes: none, fillKey: 'none'},
    'GIB': {country_makes: none, fillKey: 'none'},
    'GIN': {country_makes: none, fillKey: 'none'},
    'GLP': {country_makes: none, fillKey: 'none'},
    'GMB': {country_makes: none, fillKey: 'none'},
    'GNB': {country_makes: none, fillKey: 'none'},
    'GNQ': {country_makes: none, fillKey: 'none'},
    'GRC': {country_makes: greece, fillKey: 'color1'},
    'GRD': {country_makes: none, fillKey: 'none'},
    'GRL': {country_makes: none, fillKey: 'none'},
    'GTM': {country_makes: none, fillKey: 'none'},
    'GUF': {country_makes: none, fillKey: 'none'},
    'GUM': {country_makes: none, fillKey: 'none'},
    'GUY': {country_makes: none, fillKey: 'none'},
    'HKG': {country_makes: none, fillKey: 'none'},
    'HMD': {country_makes: none, fillKey: 'none'},
    'HND': {country_makes: none, fillKey: 'none'},
    'HRV': {country_makes: none, fillKey: 'none'},
    'HTI': {country_makes: none, fillKey: 'none'},
    'HUN': {country_makes: none, fillKey: 'none'},
    'IDN': {country_makes: none, fillKey: 'none'},
    'IMN': {country_makes: none, fillKey: 'none'},
    'IND': {country_makes: india, fillKey: 'color1'},
    'IOT': {country_makes: none, fillKey: 'none'},
    'IRL': {country_makes: none, fillKey: 'none'},
    'IRN': {country_makes: none, fillKey: 'none'},
    'IRQ': {country_makes: none, fillKey: 'none'},
    'ISL': {country_makes: none, fillKey: 'none'},
    'ISR': {country_makes: none, fillKey: 'none'},
    'ITA': {country_makes: italy, fillKey: 'color4'},
    'JAM': {country_makes: none, fillKey: 'none'},
    'JEY': {country_makes: none, fillKey: 'none'},
    'JOR': {country_makes: none, fillKey: 'none'},
    'JPN': {country_makes: japan, fillKey: 'color5'},
    'KAZ': {country_makes: none, fillKey: 'none'},
    'KEN': {country_makes: none, fillKey: 'none'},
    'KGZ': {country_makes: none, fillKey: 'none'},
    'KHM': {country_makes: none, fillKey: 'none'},
    'KIR': {country_makes: none, fillKey: 'none'},
    'KNA': {country_makes: none, fillKey: 'none'},
    'KOR': {country_makes: korea, fillKey: 'color2'},
    'KWT': {country_makes: none, fillKey: 'none'},
    'LAO': {country_makes: none, fillKey: 'none'},
    'LBN': {country_makes: none, fillKey: 'none'},
    'LBR': {country_makes: none, fillKey: 'none'},
    'LBY': {country_makes: none, fillKey: 'none'},
    'LCA': {country_makes: none, fillKey: 'none'},
    'LIE': {country_makes: none, fillKey: 'none'},
    'LKA': {country_makes: none, fillKey: 'none'},
    'LSO': {country_makes: none, fillKey: 'none'},
    'LTU': {country_makes: none, fillKey: 'none'},
    'LUX': {country_makes: none, fillKey: 'none'},
    'LVA': {country_makes: none, fillKey: 'none'},
    'MAC': {country_makes: none, fillKey: 'none'},
    'MAF': {country_makes: none, fillKey: 'none'},
    'MAR': {country_makes: none, fillKey: 'none'},
    'MCO': {country_makes: none, fillKey: 'none'},
    'MDA': {country_makes: none, fillKey: 'none'},
    'MDG': {country_makes: none, fillKey: 'none'},
    'MDV': {country_makes: none, fillKey: 'none'},
    'MEX': {country_makes: none, fillKey: 'none'},
    'MHL': {country_makes: none, fillKey: 'none'},
    'MKD': {country_makes: none, fillKey: 'none'},
    'MLI': {country_makes: none, fillKey: 'none'},
    'MLT': {country_makes: none, fillKey: 'none'},
    'MMR': {country_makes: none, fillKey: 'none'},
    'MNE': {country_makes: none, fillKey: 'none'},
    'MNG': {country_makes: none, fillKey: 'none'},
    'MNB': {country_makes: none, fillKey: 'none'},
    'MOZ': {country_makes: none, fillKey: 'none'},
    'MRT': {country_makes: none, fillKey: 'none'},
    'MSR': {country_makes: none, fillKey: 'none'},
    'MTQ': {country_makes: none, fillKey: 'none'},
    'MUS': {country_makes: none, fillKey: 'none'},
    'MWI': {country_makes: none, fillKey: 'none'},
    'MYS': {country_makes: none, fillKey: 'none'},
    'MYT': {country_makes: none, fillKey: 'none'},
    'NAM': {country_makes: none, fillKey: 'none'},
    'NCL': {country_makes: none, fillKey: 'none'},
    'NER': {country_makes: none, fillKey: 'none'},
    'NFK': {country_makes: none, fillKey: 'none'},
    'NGA': {country_makes: none, fillKey: 'none'},
    'NIC': {country_makes: none, fillKey: 'none'},
    'NIU': {country_makes: none, fillKey: 'none'},
    'NLD': {country_makes: netherlands, fillKey: 'color1'},
    'NOR': {country_makes: none, fillKey: 'none'},
    'NPL': {country_makes: none, fillKey: 'none'},
    'NRU': {country_makes: none, fillKey: 'none'},
    'NZL': {country_makes: none, fillKey: 'none'},
    'OMN': {country_makes: none, fillKey: 'none'},
    'PAK': {country_makes: none, fillKey: 'none'},
    'PAN': {country_makes: none, fillKey: 'none'},
    'PCN': {country_makes: none, fillKey: 'none'},
    'PER': {country_makes: none, fillKey: 'none'},
    'PHL': {country_makes: none, fillKey: 'none'},
    'PLB': {country_makes: none, fillKey: 'none'},
    'PNG': {country_makes: none, fillKey: 'none'},
    'POL': {country_makes: none, fillKey: 'none'},
    'PRI': {country_makes: none, fillKey: 'none'},
    'PRK': {country_makes: none, fillKey: 'none'},
    'PRT': {country_makes: none, fillKey: 'none'},
    'PRY': {country_makes: none, fillKey: 'none'},
    'PSE': {country_makes: none, fillKey: 'none'},
    'PYF': {country_makes: none, fillKey: 'none'},
    'QAT': {country_makes: none, fillKey: 'none'},
    'REU': {country_makes: none, fillKey: 'none'},
    'ROU': {country_makes: romenia, fillKey: 'color1'},
    'RUS': {country_makes: russia, fillKey: 'color1'},
    'RWA': {country_makes: none, fillKey: 'none'},
    'SAU': {country_makes: none, fillKey: 'none'},
    'SDN': {country_makes: none, fillKey: 'none'},
    'SEN': {country_makes: none, fillKey: 'none'},
    'SGT': {country_makes: none, fillKey: 'none'},
    'SGS': {country_makes: none, fillKey: 'none'},
    'SHN': {country_makes: none, fillKey: 'none'},
    'SJM': {country_makes: none, fillKey: 'none'},
    'SLB': {country_makes: none, fillKey: 'none'},
    'SLE': {country_makes: none, fillKey: 'none'},
    'SLV': {country_makes: none, fillKey: 'none'},
    'SMR': {country_makes: none, fillKey: 'none'},
    'SOM': {country_makes: none, fillKey: 'none'},
    'SPM': {country_makes: none, fillKey: 'none'},
    'SRB': {country_makes: none, fillKey: 'none'},
    'SSD': {country_makes: none, fillKey: 'none'},
    'STP': {country_makes: none, fillKey: 'none'},
    'SUR': {country_makes: none, fillKey: 'none'},
    'SVK': {country_makes: none, fillKey: 'none'},
    'SVN': {country_makes: none, fillKey: 'none'},
    'SWE': {country_makes: sweden, fillKey: 'color1'},
    'SWZ': {country_makes: none, fillKey: 'none'},
    'SXM': {country_makes: none, fillKey: 'none'},
    'SYC': {country_makes: none, fillKey: 'none'},
    'SYR': {country_makes: none, fillKey: 'none'},
    'TCA': {country_makes: none, fillKey: 'none'},
    'TCD': {country_makes: none, fillKey: 'none'},
    'TGO': {country_makes: none, fillKey: 'none'},
    'THA': {country_makes: none, fillKey: 'none'},
    'TJK': {country_makes: none, fillKey: 'none'},
    'TKL': {country_makes: none, fillKey: 'none'},
    'TKM': {country_makes: none, fillKey: 'none'},
    'TLS': {country_makes: none, fillKey: 'none'},
    'TOM': {country_makes: none, fillKey: 'none'},
    'TTO': {country_makes: none, fillKey: 'none'},
    'TUM': {country_makes: none, fillKey: 'none'},
    'TUR': {country_makes: none, fillKey: 'none'},
    'TUV': {country_makes: none, fillKey: 'none'},
    'TWN': {country_makes: none, fillKey: 'none'},
    'TZA': {country_makes: none, fillKey: 'none'},
    'UGA': {country_makes: none, fillKey: 'none'},
    'UKR': {country_makes: none, fillKey: 'none'},
    'UMI': {country_makes: none, fillKey: 'none'},
    'URY': {country_makes: none, fillKey: 'none'},
    'USA': {country_makes: usa, fillKey: 'color7'},
    'UZB': {country_makes: none, fillKey: 'none'},
    'VAT': {country_makes: none, fillKey: 'none'},
    'VCT': {country_makes: none, fillKey: 'none'},
    'VEN': {country_makes: none, fillKey: 'none'},
    'VGB': {country_makes: none, fillKey: 'none'},
    'VIR': {country_makes: none, fillKey: 'none'},
    'VNM': {country_makes: none, fillKey: 'none'},
    'VUT': {country_makes: none, fillKey: 'none'},
    'WLF': {country_makes: none, fillKey: 'none'},
    'WSM': {country_makes: none, fillKey: 'none'},
    'YEM': {country_makes: none, fillKey: 'none'},
    'ZAF': {country_makes: none, fillKey: 'none'},
    'ZMB': {country_makes: none, fillKey: 'none'},
    'ZWE': {country_makes: none, fillKey: 'none'}
    }
  })

}
</script>