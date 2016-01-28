<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
<script>
window.onload = function() {
	var make_id = <?php echo json_encode($make_id) ?>;
	var make = <?php echo  (json_encode($make)) ?>;
    var caryear = <?php echo json_encode($caryear) ?>;
    var carmake = <?php echo  (json_encode($carmake)) ?>;
    var carmodel = <?php echo json_encode($carmodel) ?>;
	var current = null;
    var cnt = 0;
	var dataset = [];
    var car_make = [];
    var none = "No data found!";
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
    
    make.sort();

    for (var i = 0; i < make.length; i++) {
        if (make[i] != current) {
            if (cnt > 0) {
                dataset.push(current);
            }
            current = make[i];
            cnt = 1;
        } else {
            cnt++;
        }
    } if (cnt > 0) {
        dataset.push(current);
    }
    // get the different countries
 	for (var x = 0; x < dataset.length; x++) {
	   	if(dataset[x] == "Volkswagen" || dataset[x] == "Opel" || dataset[x] == "BMW" || dataset[x] == "Mercedes Benz" || dataset[x] == "Porsche" || dataset[x] == "Audi" || dataset[x] == "Smart" || dataset[x] == "Wiesmann" || dataset[x] == "Trabant" || dataset[x] == "Wartburg"){
	   		germany.push("- " + dataset[x] + "</br>");
	   	}  if(dataset[x] == "Spyker"){
            netherlands.push("- " + dataset[x] + "</br>");
	    }  if(dataset[x] == "Aixim" || dataset[x] == "Bugatti" || dataset[x] == "Alpina" || dataset[x] == "Citroen" || dataset[x] == "Peugeot" || dataset[x] == "Renault" || dataset[x] == "Talbot"){
            france.push("- " + dataset[x] + "</br>");
        }  if(dataset[x] == "Acura" || dataset[x] == "Daihatsu" || dataset[x] == "Datsun" || dataset[x] == "Honda" || dataset[x] == "Infiniti" || dataset[x] == "Izusu" || dataset[x] == "Lexus" || dataset[x] == "Mazda" || dataset[x] == "Mitsubishi" || dataset[x] == "Nissan" || dataset[x] == "Subaru" || dataset[x] == "Suzuki" || dataset[x] == "Toyota"){
            japan.push("- " + dataset[x] + "</br>");
        }  if(dataset[x] == "Alfa Romeo" || dataset[x] == "Autobianchi" || dataset[x] == "Ferrari" || dataset[x] == "Fiat" || dataset[x] == "Lamborghini" || dataset[x] == "Lancia" || dataset[x] == "Maserati" || dataset[x] == "Tazzari"){
            italy.push("- " + dataset[x] + "</br>");
        }  if(dataset[x] == "Ariel" || dataset[x] == "Aston Martin" || dataset[x] == "Austin Healey" || dataset[x] == "Austin Morris" || dataset[x] == "Bentley" || dataset[x] == "Caterham" || dataset[x] == "Jaguar" || dataset[x] == "Land Rover" || dataset[x] == "Lotus" || dataset[x] == "MG" || dataset[x] == "Mini" || dataset[x] == "Rolls Royce" || dataset[x] == "Rover" || dataset[x] == "Vauxhall" || dataset[x] == "Panther" || dataset[x] == "Triumph" || dataset[x] == "TVR"){
            uk.push("- " + dataset[x] + "</br>");
        }  if(dataset[x] == "Buick" || dataset[x] == "Cadillac" || dataset[x] == "Chevrolet" || dataset[x] == "Chrysler" || dataset[x] == "Corvette" || dataset[x] == "Dodge" || dataset[x] == "Ford" || dataset[x] == "GMC" || dataset[x] == "GEO" || dataset[x] == "Hummer" || dataset[x] == "Jeep" || dataset[x] == "Lincoln" || dataset[x] == "Pontiac" || dataset[x] == "Rambler" || dataset[x] == "Cobra" || dataset[x] == "Mercury" || dataset[x] == "Oldsmobile" || dataset[x] == "Plymouth" || dataset[x] == "Villager"){
            usa.push("- " + dataset[x] + "</br>");
        }  if(dataset[x] == "China Motors" || dataset[x] == "Landwind" || dataset[x] == "FAW" || dataset[x] == "Zotye"){
            china.push("- " + dataset[x] + "</br>");
        }  if(dataset[x] == "Daewoo" || dataset[x] == "Hyundai" || dataset[x] == "Kia" || dataset[x] == "SsangYong"){
            korea.push("- " + dataset[x] + "</br>");
        }  if(dataset[x] == "Saab" || dataset[x] == "Volvo"){
            sweden.push("- " + dataset[x] + "</br>");
        }  if(dataset[x] == "Dacia"){
            romenia.push("- " + dataset[x]);
        }  if(dataset[x] == "Lada" || dataset[x] == "Uaz"){
            russia.push("- " + dataset[x] + "</br>");
        }  if(dataset[x] == "Ueec"){
            greece.push("- " + dataset[x] + "</br>");
        }  if(dataset[x] == "Seat"){
            spain.push("- " + dataset[x] + "</br>");
        }  if(dataset[x] == "Tata"){
            india.push("- " + dataset[x] + "</br>");
        }  if(dataset[x] == "Skoda"){
            czech.push("- " + dataset[x] + "</br>");        
        }
    }
   
  var car_data = {"name" : "Automakes", "children" : [
    {"name" : "Fiat", "children" : [ 
                {"name" : "Chrysler" , "children" : [
                {"name" : "Dodge" },
                {"name" : "Jeep" }]},
                {"name" : "Alfa-Romeo" },
                {"name" : "Ferrari" },
                {"name" : "Lancia" },
                {"name" : "Maserati" }
            ] },
        {"name" : "Volkswagen", "children" : [
                {"name" : "Seat" },
                {"name" : "Audi" },
                {"name" : "Skoda" },
                {"name" : "Bentley" },
                {"name" : "Porsche" },
                {"name" : "Lamborghini" },
                {"name" : "Bugatti" },
                {"name" : "Suzuki" }
            ] },
            {"name" : "Ford", "children" : [
                {"name" : "Lincoln" }
            ]},
            {"name" : "GM", "children" : [
                {"name" : "Chevrolet" },
                {"name" : "Buick" },
                {"name" : "GMC" },
                {"name" : "Cadillac" },
                {"name" : "Opel" },
                {"name" : "Vauxhall" },
                {"name" : "Daewoo" }
            ] },
            {"name" : "Toyota", "children" : [
                {"name" : "Lexus" },
                {"name" : "Daihatsu" }
            ] },
            {"name" : "BMW", "children" : [
                {"name" : "Mini" },
                {"name" : "Rolls Royce" }
            ] },
            {"name" : "Renault", "children" : [
                {"name" : "Nissan", "children" :[
                {"name" : "Infiniti" },
                {"name" : "Datsun" }]},
                {"name" : "Dacia" },
                {"name" : "Alpina" }
            ] },{"name" : "Stand Alone", "children" : [
                {"name" : "Mazda" },
                {"name" : "Subaru" },
                {"name" : "Lotus" },
                {"name" : "Volvo" },
                {"name" : "Aston-Martin" },
                {"name" : "Tesla" },
                {"name" : "Mitsubishi" }
            ] },
            {"name" : "Mercedes-Benz", "children" : [
                {"name" : "Smart" }
            ] },
            {"name" : "Honda", "children" : [
                {"name" : "Acura" }
            ] },{"name" : "Citroen", "children" : [
                {"name" : "Peugeot" }
            ] },
        {"name" : "Spyker", "children" : [
                {"name" : "Saab" }
            ]},
        {"name" : "Hyundai", "children" : [
                {"name" : "Kia" }
            ]},
        {"name" : "Jaguar", "children" : [
                {"name" : "Land-Rover" }]},
    ]};
 
    // Create a svg canvas
    var vis = d3.select("#viz").append("svg:svg")
    .attr("width", 450)
    .attr("height", 850)
    .append("svg:g")
    .attr("transform", "translate(20, 440)");

    // Create a cluster "canvas"
    var cluster = d3.layout.cluster()
    .size([150,350]);

    var diagonal = d3.svg.diagonal.radial()
    .projection(function(d) { return [d.y, d.x / 180 * Math.PI]; });

    var nodes = cluster.nodes(car_data);
    var links = cluster.links(nodes);

    var link = vis.selectAll("pathlink")
    .data(links)
    .enter().append("svg:path")
    .attr("class", "link")
    .attr("d", diagonal)

    // create node text
    var node = vis.selectAll("g.node")
    .data(nodes)
    .enter().append("svg:g")
    .attr("transform", function(d) { return "rotate(" + (d.x - 90) + ")translate(" + d.y + ")"; })

    var div = d3.select("body").append("div")   
    .attr("class", "tooltip")               
    .style("opacity", 0);

    // Add the dot at every node
    node.append("svg:circle")
    .attr("r", 5.5)
    .on('click', function(d){
        var nodeSelection = d3.select(this).style({opacity:'0.8'});
        nodeSelection.select("text").style({opacity:'1.0'});
        div.transition()        
                .duration(20)      
                .style("opacity", .9);      
            div .html("<strong>" + d.name + "</strong></br> <a href=https://en.wikipedia.org/wiki/" + d.name + ">Link to Wikipedia for " + d.name + "<br/>") 
                .style("left", (d3.event.pageX) + "px")     
                .style("top", (d3.event.pageY - 28) + "px");    
    })

    .attr("fill", "steelblue")
    .attr("stroke", "black");

    node.append("svg:text")
    .attr("dx", function(d) { return d.x < 180 ? 8 : -8; })
    .attr("dy", ".31em")
    .style("font-size","14px")
    .attr("text-anchor", function(d) { return d.x < 180 ? "start" : "end"; })
    .attr("transform", function(d) { return d.x < 180 ? null : "rotate(180)"; })
    .text(function(d) { return d.name; });

    // long data var for the graph
    var data=[{year:1909,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:0,Bugatti:0,Buick:0,Cadillac:0,Chevrolet:0,Chrysler:0,Citroen:0,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:1,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:0,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:0,Pontiac:0,Porsche:0,Rambler:0,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1926,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:0,Bugatti:0,Buick:0,Cadillac:0,Chevrolet:0,Chrysler:1,Citroen:0,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:1,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:0,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:0,Pontiac:0,Porsche:0,Rambler:0,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1948,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:0,Bugatti:0,Buick:0,Cadillac:0,Chevrolet:0,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:1,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:0,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:0,Pontiac:0,Porsche:0,Rambler:0,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1953,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:0,Bugatti:0,Buick:0,Cadillac:0,Chevrolet:1,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:1,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:0,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:0,Pontiac:0,Porsche:0,Rambler:0,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1954,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:0,Bugatti:0,Buick:0,Cadillac:1,Chevrolet:2,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:1,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:0,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:0,Pontiac:0,Porsche:0,Rambler:0,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1955,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:0,Bugatti:0,Buick:0,Cadillac:1,Chevrolet:3,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:2,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:0,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:0,Pontiac:0,Porsche:0,Rambler:0,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1956,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:0,Bugatti:0,Buick:0,Cadillac:1,Chevrolet:4,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:2,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:0,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:0,Pontiac:0,Porsche:0,Rambler:0,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1957,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:1,Bugatti:0,Buick:0,Cadillac:1,Chevrolet:5,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:2,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:0,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:0,Pontiac:0,Porsche:0,Rambler:0,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1958,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:2,Bugatti:0,Buick:0,Cadillac:1,Chevrolet:6,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:3,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:0,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:0,Pontiac:0,Porsche:0,Rambler:0,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1959,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:0,Cadillac:1,Chevrolet:7,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:3,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:0,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:0,Pontiac:0,Porsche:0,Rambler:0,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1960,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:0,Cadillac:1,Chevrolet:9,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:3,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:0,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:0,Pontiac:0,Porsche:0,Rambler:0,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1961,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:0,Cadillac:1,Chevrolet:10,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:3,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:0,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:0,Pontiac:1,Porsche:0,Rambler:0,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1962,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:11,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:3,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:0,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:0,Pontiac:2,Porsche:0,Rambler:0,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1963,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:13,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:4,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:2,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:0,Pontiac:3,Porsche:0,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1964,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:13,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:4,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:1,Pontiac:7,Porsche:0,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:0,Volvo:0},{year:1965,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:14,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:7,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:0,Peugeot:0,Plymouth:1,Pontiac:12,Porsche:0,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:1,Volvo:0},{year:1966,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:15,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:11,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:0,MG:0,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:1,Peugeot:0,Plymouth:1,Pontiac:17,Porsche:0,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:1,Volvo:0},{year:1967,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:18,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:0,Ferrari:0,Fiat:0,Ford:16,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:1,MG:0,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:1,Peugeot:0,Plymouth:1,Pontiac:23,Porsche:0,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:2,Volvo:0},{year:1968,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:20,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:1,Ferrari:0,Fiat:0,Ford:17,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:2,MG:0,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:1,Peugeot:0,Plymouth:1,Pontiac:28,Porsche:0,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:2,Volvo:0},{year:1969,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:22,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:2,Ferrari:0,Fiat:0,Ford:18,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:3,MG:0,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:1,Peugeot:0,Plymouth:2,Pontiac:31,Porsche:0,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:2,Volvo:0},{year:1970,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:24,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:3,Ferrari:0,Fiat:0,Ford:20,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:4,MG:0,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:1,Peugeot:0,Plymouth:2,Pontiac:33,Porsche:1,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:2,Volvo:0},{year:1971,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:26,Chrysler:1,Citroen:1,Daewoo:0,Daihatsu:0,Dodge:3,Ferrari:0,Fiat:0,Ford:21,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:4,MG:0,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:1,Peugeot:0,Plymouth:2,Pontiac:35,Porsche:1,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:2,Volvo:0},{year:1972,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:28,Chrysler:1,Citroen:2,Daewoo:0,Daihatsu:0,Dodge:3,Ferrari:0,Fiat:0,Ford:23,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:4,MG:0,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:1,Peugeot:0,Plymouth:2,Pontiac:36,Porsche:1,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:2,Volvo:0},{year:1973,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:31,Chrysler:1,Citroen:2,Daewoo:0,Daihatsu:0,Dodge:3,Ferrari:0,Fiat:0,Ford:25,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:4,MG:0,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:1,Peugeot:0,Plymouth:2,Pontiac:38,Porsche:1,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:2,Volvo:0},{year:1974,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:32,Chrysler:1,Citroen:3,Daewoo:0,Daihatsu:0,Dodge:3,Ferrari:0,Fiat:0,Ford:26,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:4,MG:0,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:1,Peugeot:0,Plymouth:2,Pontiac:40,Porsche:1,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:2,Volvo:0},{year:1975,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:35,Chrysler:1,Citroen:3,Daewoo:0,Daihatsu:0,Dodge:3,Ferrari:0,Fiat:0,Ford:26,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:4,MG:0,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:1,Peugeot:0,Plymouth:2,Pontiac:41,Porsche:1,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:0,Volkswagen:2,Volvo:0},{year:1976,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:36,Chrysler:1,Citroen:3,Daewoo:0,Daihatsu:0,Dodge:4,Ferrari:0,Fiat:0,Ford:26,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":0,Mercury:4,MG:0,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:1,Peugeot:0,Plymouth:3,Pontiac:42,Porsche:1,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:1,Volkswagen:3,Volvo:0},{year:1977,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:38,Chrysler:1,Citroen:3,Daewoo:0,Daihatsu:0,Dodge:4,Ferrari:0,Fiat:0,Ford:27,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":1,Mercury:4,MG:1,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:1,Peugeot:0,Plymouth:3,Pontiac:43,Porsche:1,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:1,Volkswagen:3,Volvo:0},{year:1978,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:1,Cadillac:1,Chevrolet:40,Chrysler:1,Citroen:3,Daewoo:0,Daihatsu:0,Dodge:5,Ferrari:0,Fiat:0,Ford:27,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":1,Mercury:4,MG:1,Mini:3,Mitsubishi:0,Nissan:0,Oldsmobile:1,Peugeot:0,Plymouth:4,Pontiac:44,Porsche:1,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:2,Volkswagen:3,Volvo:0},{year:1979,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:2,Cadillac:1,Chevrolet:42,Chrysler:1,Citroen:3,Daewoo:0,Daihatsu:0,Dodge:5,Ferrari:0,Fiat:0,Ford:28,GEO:0,GMC:0,Honda:0,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":1,Mercury:4,MG:1,Mini:3,Mitsubishi:0,Nissan:1,Oldsmobile:1,Peugeot:0,Plymouth:4,Pontiac:45,Porsche:1,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:2,Volkswagen:3,Volvo:0},{year:1980,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:2,Cadillac:1,Chevrolet:44,Chrysler:1,Citroen:3,Daewoo:0,Daihatsu:0,Dodge:5,Ferrari:0,Fiat:0,Ford:29,GEO:0,GMC:0,Honda:1,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":1,Mercury:4,MG:1,Mini:3,Mitsubishi:0,Nissan:1,Oldsmobile:1,Peugeot:0,Plymouth:4,Pontiac:46,Porsche:1,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:2,Volkswagen:3,Volvo:0},{year:1981,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:2,Cadillac:1,Chevrolet:45,Chrysler:1,Citroen:3,Daewoo:0,Daihatsu:0,Dodge:6,Ferrari:0,Fiat:0,Ford:29,GEO:0,GMC:0,Honda:1,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":2,Mercury:4,MG:1,Mini:3,Mitsubishi:0,Nissan:1,Oldsmobile:1,Peugeot:0,Plymouth:5,Pontiac:47,Porsche:1,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:2,Volkswagen:3,Volvo:0},{year:1982,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:2,Cadillac:1,Chevrolet:46,Chrysler:1,Citroen:3,Daewoo:0,Daihatsu:0,Dodge:6,Ferrari:0,Fiat:0,Ford:29,GEO:0,GMC:0,Honda:1,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:0,"Mercedes-Benz":2,Mercury:4,MG:1,Mini:3,Mitsubishi:0,Nissan:1,Oldsmobile:1,Peugeot:0,Plymouth:5,Pontiac:48,Porsche:1,Rambler:1,Renault:0,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:3,Volkswagen:3,Volvo:0},{year:1983,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:0,Bentley:0,BMW:3,Bugatti:0,Buick:2,Cadillac:1,Chevrolet:47,Chrysler:1,Citroen:3,Daewoo:0,Daihatsu:0,Dodge:6,Ferrari:0,Fiat:0,Ford:31,GEO:0,GMC:0,Honda:2,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:0,"Land-Rover":0,Lexus:0,Lincoln:0,Lotus:0,Maserati:0,Mazda:2,"Mercedes-Benz":3,Mercury:4,MG:1,Mini:3,Mitsubishi:0,Nissan:1,Oldsmobile:1,Peugeot:0,Plymouth:5,Pontiac:51,Porsche:2,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:0,Smart:0,Spyker:0,Subaru:0,Suzuki:0,Tesla:0,Toyota:3,Volkswagen:4,Volvo:0},{year:1985,Acura:0,"Alfa-Romeo":0,"Aston-Martin":0,Audi:5,Bentley:0,BMW:3,Bugatti:0,Buick:13,Cadillac:1,Chevrolet:50,Chrysler:1,Citroen:3,Daewoo:0,Daihatsu:0,Dodge:8,Ferrari:0,Fiat:0,Ford:59,GEO:0,GMC:0,Honda:8,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:1,"Land-Rover":0,Lexus:0,Lincoln:6,Lotus:2,Maserati:4,Mazda:9,"Mercedes-Benz":11,Mercury:16,MG:1,Mini:3,Mitsubishi:15,Nissan:1,Oldsmobile:1,Peugeot:0,Plymouth:6,Pontiac:70,Porsche:6,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:2,Smart:0,Spyker:0,Subaru:4,Suzuki:3,Tesla:0,Toyota:5,Volkswagen:16,Volvo:0},{year:1986,Acura:1,"Alfa-Romeo":0,"Aston-Martin":0,Audi:16,Bentley:0,BMW:3,Bugatti:0,Buick:27,Cadillac:1,Chevrolet:52,Chrysler:1,Citroen:3,Daewoo:0,Daihatsu:0,Dodge:8,Ferrari:0,Fiat:0,Ford:90,GEO:0,GMC:0,Honda:11,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:3,"Land-Rover":2,Lexus:0,Lincoln:12,Lotus:4,Maserati:7,Mazda:19,"Mercedes-Benz":19,Mercury:28,MG:1,Mini:3,Mitsubishi:35,Nissan:1,Oldsmobile:1,Peugeot:0,Plymouth:6,Pontiac:94,Porsche:13,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:6,Smart:0,Spyker:0,Subaru:11,Suzuki:9,Tesla:0,Toyota:7,Volkswagen:31,Volvo:0},{year:1987,Acura:2,"Alfa-Romeo":0,"Aston-Martin":0,Audi:21,Bentley:0,BMW:3,Bugatti:0,Buick:35,Cadillac:1,Chevrolet:53,Chrysler:1,Citroen:3,Daewoo:0,Daihatsu:0,Dodge:8,Ferrari:0,Fiat:0,Ford:105,GEO:0,GMC:0,Honda:11,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:4,"Land-Rover":3,Lexus:0,Lincoln:15,Lotus:5,Maserati:8,Mazda:25,"Mercedes-Benz":19,Mercury:33,MG:1,Mini:3,Mitsubishi:45,Nissan:1,Oldsmobile:1,Peugeot:0,Plymouth:6,Pontiac:104,Porsche:17,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:8,Smart:0,Spyker:0,Subaru:15,Suzuki:11,Tesla:0,Toyota:8,Volkswagen:39,Volvo:0},{year:1988,Acura:4,"Alfa-Romeo":0,"Aston-Martin":0,Audi:25,Bentley:0,BMW:3,Bugatti:0,Buick:43,Cadillac:1,Chevrolet:54,Chrysler:1,Citroen:3,Daewoo:0,Daihatsu:0,Dodge:8,Ferrari:0,Fiat:0,Ford:121,GEO:0,GMC:0,Honda:14,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:5,"Land-Rover":4,Lexus:0,Lincoln:18,Lotus:6,Maserati:8,Mazda:31,"Mercedes-Benz":23,Mercury:38,MG:1,Mini:3,Mitsubishi:55,Nissan:1,Oldsmobile:1,Peugeot:0,Plymouth:6,Pontiac:115,Porsche:21,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:10,Smart:0,Spyker:0,Subaru:18,Suzuki:13,Tesla:0,Toyota:8,Volkswagen:47,Volvo:0},{year:1989,Acura:4,"Alfa-Romeo":0,"Aston-Martin":0,Audi:29,Bentley:0,BMW:4,Bugatti:0,Buick:52,Cadillac:1,Chevrolet:55,Chrysler:1,Citroen:4,Daewoo:0,Daihatsu:0,Dodge:9,Ferrari:0,Fiat:0,Ford:135,GEO:0,GMC:0,Honda:16,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:6,"Land-Rover":5,Lexus:2,Lincoln:21,Lotus:7,Maserati:12,Mazda:39,"Mercedes-Benz":27,Mercury:43,MG:1,Mini:3,Mitsubishi:65,Nissan:1,Oldsmobile:1,Peugeot:0,Plymouth:7,Pontiac:125,Porsche:24,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:12,Smart:0,Spyker:0,Subaru:22,Suzuki:16,Tesla:0,Toyota:9,Volkswagen:53,Volvo:0},{year:1990,Acura:5,"Alfa-Romeo":0,"Aston-Martin":0,Audi:35,Bentley:0,BMW:4,Bugatti:0,Buick:61,Cadillac:1,Chevrolet:55,Chrysler:1,Citroen:4,Daewoo:0,Daihatsu:0,Dodge:9,Ferrari:0,Fiat:0,Ford:149,GEO:0,GMC:0,Honda:18,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:8,"Land-Rover":6,Lexus:4,Lincoln:24,Lotus:9,Maserati:16,Mazda:47,"Mercedes-Benz":31,Mercury:47,MG:1,Mini:3,Mitsubishi:75,Nissan:3,Oldsmobile:1,Peugeot:0,Plymouth:8,Pontiac:136,Porsche:27,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:14,Smart:0,Spyker:0,Subaru:26,Suzuki:19,Tesla:0,Toyota:9,Volkswagen:61,Volvo:0},{year:1991,Acura:5,"Alfa-Romeo":0,"Aston-Martin":0,Audi:41,Bentley:0,BMW:4,Bugatti:0,Buick:70,Cadillac:1,Chevrolet:56,Chrysler:1,Citroen:4,Daewoo:0,Daihatsu:0,Dodge:9,Ferrari:0,Fiat:0,Ford:163,GEO:0,GMC:0,Honda:20,Hummer:0,Hyundai:0,Infiniti:0,Jaguar:0,Jeep:0,Kia:0,Lamborghini:9,"Land-Rover":8,Lexus:6,Lincoln:27,Lotus:11,Maserati:17,Mazda:56,"Mercedes-Benz":35,Mercury:53,MG:1,Mini:3,Mitsubishi:83,Nissan:5,Oldsmobile:1,Peugeot:0,Plymouth:9,Pontiac:145,Porsche:30,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:16,Smart:0,Spyker:0,Subaru:30,Suzuki:22,Tesla:0,Toyota:10,Volkswagen:69,Volvo:0},{year:1992,Acura:9,"Alfa-Romeo":2,"Aston-Martin":0,Audi:46,Bentley:0,BMW:9,Bugatti:0,Buick:79,Cadillac:7,Chevrolet:79,Chrysler:6,Citroen:4,Daewoo:0,Daihatsu:2,Dodge:35,Ferrari:0,Fiat:0,Ford:184,GEO:4,GMC:19,Honda:23,Hummer:0,Hyundai:4,Infiniti:3,Jaguar:1,Jeep:3,Kia:0,Lamborghini:10,"Land-Rover":10,Lexus:9,Lincoln:31,Lotus:13,Maserati:17,Mazda:70,"Mercedes-Benz":51,Mercury:59,MG:1,Mini:3,Mitsubishi:98,Nissan:12,Oldsmobile:10,Peugeot:0,Plymouth:16,Pontiac:154,Porsche:32,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:18,Smart:0,Spyker:0,Subaru:35,Suzuki:26,Tesla:0,Toyota:21,Volkswagen:78,Volvo:4},{year:1993,Acura:12,"Alfa-Romeo":4,"Aston-Martin":0,Audi:50,Bentley:0,BMW:14,Bugatti:0,Buick:87,Cadillac:12,Chevrolet:103,Chrysler:12,Citroen:4,Daewoo:0,Daihatsu:2,Dodge:62,Ferrari:0,Fiat:0,Ford:206,GEO:8,GMC:38,Honda:27,Hummer:1,Hyundai:8,Infiniti:6,Jaguar:2,Jeep:3,Kia:0,Lamborghini:11,"Land-Rover":14,Lexus:13,Lincoln:34,Lotus:15,Maserati:17,Mazda:83,"Mercedes-Benz":73,Mercury:66,MG:1,Mini:3,Mitsubishi:113,Nissan:21,Oldsmobile:18,Peugeot:0,Plymouth:23,Pontiac:161,Porsche:35,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:20,Smart:0,Spyker:0,Subaru:41,Suzuki:30,Tesla:0,Toyota:33,Volkswagen:88,Volvo:8},{year:1994,Acura:16,"Alfa-Romeo":6,"Aston-Martin":0,Audi:57,Bentley:0,BMW:18,Bugatti:0,Buick:94,Cadillac:16,Chevrolet:126,Chrysler:17,Citroen:4,Daewoo:0,Daihatsu:2,Dodge:81,Ferrari:0,Fiat:0,Ford:228,GEO:11,GMC:56,Honda:32,Hummer:2,Hyundai:12,Infiniti:9,Jaguar:3,Jeep:6,Kia:1,Lamborghini:12,"Land-Rover":18,Lexus:17,Lincoln:37,Lotus:17,Maserati:17,Mazda:96,"Mercedes-Benz":77,Mercury:73,MG:1,Mini:3,Mitsubishi:128,Nissan:29,Oldsmobile:26,Peugeot:0,Plymouth:30,Pontiac:168,Porsche:38,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:22,Smart:0,Spyker:0,Subaru:47,Suzuki:34,Tesla:0,Toyota:44,Volkswagen:95,Volvo:11},{year:1995,Acura:20,"Alfa-Romeo":7,"Aston-Martin":0,Audi:62,Bentley:0,BMW:23,Bugatti:0,Buick:106,Cadillac:20,Chevrolet:152,Chrysler:26,Citroen:4,Daewoo:0,Daihatsu:2,Dodge:103,Ferrari:0,Fiat:0,Ford:250,GEO:14,GMC:74,Honda:38,Hummer:3,Hyundai:20,Infiniti:12,Jaguar:4,Jeep:9,Kia:3,Lamborghini:12,"Land-Rover":23,Lexus:21,Lincoln:40,Lotus:18,Maserati:17,Mazda:109,"Mercedes-Benz":81,Mercury:79,MG:1,Mini:3,Mitsubishi:141,Nissan:37,Oldsmobile:33,Peugeot:0,Plymouth:34,Pontiac:175,Porsche:41,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:24,Smart:0,Spyker:0,Subaru:51,Suzuki:39,Tesla:0,Toyota:60,Volkswagen:104,Volvo:14},{year:1996,Acura:25,"Alfa-Romeo":7,"Aston-Martin":0,Audi:66,Bentley:0,BMW:28,Bugatti:0,Buick:114,Cadillac:24,Chevrolet:178,Chrysler:32,Citroen:4,Daewoo:0,Daihatsu:2,Dodge:122,Ferrari:0,Fiat:0,Ford:272,GEO:17,GMC:92,Honda:44,Hummer:4,Hyundai:23,Infiniti:16,Jaguar:5,Jeep:11,Kia:5,Lamborghini:13,"Land-Rover":25,Lexus:26,Lincoln:43,Lotus:19,Maserati:17,Mazda:119,"Mercedes-Benz":89,Mercury:85,MG:1,Mini:3,Mitsubishi:153,Nissan:45,Oldsmobile:41,Peugeot:0,Plymouth:38,Pontiac:181,Porsche:42,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:26,Smart:0,Spyker:0,Subaru:55,Suzuki:43,Tesla:0,Toyota:75,Volkswagen:110,Volvo:16},{year:1997,Acura:31,"Alfa-Romeo":7,"Aston-Martin":0,Audi:71,Bentley:0,BMW:34,Bugatti:0,Buick:120,Cadillac:28,Chevrolet:202,Chrysler:37,Citroen:4,Daewoo:0,Daihatsu:2,Dodge:140,Ferrari:0,Fiat:0,Ford:293,GEO:20,GMC:108,Honda:51,Hummer:5,Hyundai:27,Infiniti:20,Jaguar:7,Jeep:14,Kia:8,Lamborghini:14,"Land-Rover":29,Lexus:26,Lincoln:43,Lotus:20,Maserati:17,Mazda:128,"Mercedes-Benz":94,Mercury:92,MG:1,Mini:3,Mitsubishi:163,Nissan:52,Oldsmobile:50,Peugeot:0,Plymouth:43,Pontiac:187,Porsche:44,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:28,Smart:0,Spyker:0,Subaru:59,Suzuki:47,Tesla:0,Toyota:90,Volkswagen:117,Volvo:20},{year:1998,Acura:37,"Alfa-Romeo":7,"Aston-Martin":0,Audi:76,Bentley:0,BMW:39,Bugatti:0,Buick:126,Cadillac:32,Chevrolet:225,Chrysler:41,Citroen:4,Daewoo:0,Daihatsu:2,Dodge:157,Ferrari:0,Fiat:0,Ford:307,GEO:20,GMC:125,Honda:57,Hummer:6,Hyundai:27,Infiniti:20,Jaguar:9,Jeep:17,Kia:10,Lamborghini:15,"Land-Rover":31,Lexus:31,Lincoln:47,Lotus:20,Maserati:17,Mazda:135,"Mercedes-Benz":102,Mercury:99,MG:1,Mini:3,Mitsubishi:173,Nissan:60,Oldsmobile:59,Peugeot:0,Plymouth:47,Pontiac:193,Porsche:46,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:28,Smart:0,Spyker:0,Subaru:62,Suzuki:51,Tesla:0,Toyota:104,Volkswagen:124,Volvo:25},{year:1999,Acura:43,"Alfa-Romeo":7,"Aston-Martin":0,Audi:79,Bentley:0,BMW:44,Bugatti:0,Buick:131,Cadillac:37,Chevrolet:250,Chrysler:48,Citroen:4,Daewoo:3,Daihatsu:2,Dodge:176,Ferrari:0,Fiat:0,Ford:322,GEO:20,GMC:141,Honda:63,Hummer:7,Hyundai:31,Infiniti:24,Jaguar:11,Jeep:20,Kia:12,Lamborghini:16,"Land-Rover":34,Lexus:37,Lincoln:50,Lotus:20,Maserati:17,Mazda:142,"Mercedes-Benz":110,Mercury:106,MG:1,Mini:3,Mitsubishi:183,Nissan:66,Oldsmobile:67,Peugeot:0,Plymouth:52,Pontiac:202,Porsche:48,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:32,Smart:0,Spyker:0,Subaru:65,Suzuki:55,Tesla:0,Toyota:115,Volkswagen:132,Volvo:29},{year:2e3,Acura:47,"Alfa-Romeo":7,"Aston-Martin":0,Audi:84,Bentley:0,BMW:52,Bugatti:0,Buick:135,Cadillac:42,Chevrolet:274,Chrysler:56,Citroen:4,Daewoo:6,Daihatsu:2,Dodge:193,Ferrari:0,Fiat:0,Ford:343,GEO:20,GMC:154,Honda:71,Hummer:8,Hyundai:35,Infiniti:28,Jaguar:14,Jeep:23,Kia:15,Lamborghini:17,"Land-Rover":37,Lexus:43,Lincoln:54,Lotus:21,Maserati:17,Mazda:150,"Mercedes-Benz":118,Mercury:112,MG:1,Mini:3,Mitsubishi:191,Nissan:73,Oldsmobile:71,Peugeot:0,Plymouth:72,Pontiac:208,Porsche:50,Rambler:1,Renault:1,"Rolls-Royce":0,Saab:34,Smart:0,Spyker:0,Subaru:69,Suzuki:59,Tesla:0,Toyota:129,Volkswagen:140,Volvo:35}];

    carmake.sort();
      
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
        y.domain([0,350]);
        x2.domain(x.domain());
        y2.domain(y.domain());

        var box = d3.select("body").append("div")   
            .attr("class", "toolbox")               
            .style("opacity", 0);
        // create the paths for the carmakes
        focus.selectAll('path')
            .data(['Acura', 'Alfa-Romeo', 'Aston-Martin', 'Audi', 'Bentley', 'BMW', 'Bugatti', 'Buick', 'Cadillac',
            'Chevrolet', 'Citroen', 'Daewoo', 'Daihatsu', 'Dodge', 'Ferrari', 'Fiat', 'Ford', 'GEO', 'GMC', 'Honda',
            'Hummer', 'Hyundai', 'Infiniti', 'Jaguar', 'Jeep','Kia', 'Lamborghini', 'Land-Rover', 'Lexus', 'Lincoln',
            'Lotus', 'Maserati', 'Mazda', 'Mercedes-Benz', 'Mercury', 'MG','Mini', 'Mitsubishi', 'Nissan', 'Oldsmobile', 'Peugeot',
            'Plymouth', 'Pontiac', 'Porsche', 'Rambler', 'Renault','Rolls-Royce', 'Saab', 'Smart', 'Spyker', 'Subaru',
            'Suzuki', 'Tesla', 'Toyota', 'Volkswagen', 'Volvo'])
            .enter()
            .append('path')
            .on('mouseover', function(d){
            d3.select(this).style({stroke:'gray'});
            var coordinates = [0, 0];
            coordinates = d3.mouse(this);
            box.transition() 
                .duration(20)
                .style("opacity", 1)     
            box .html("<h2>" + d +"</h2> Year:"+ Math.floor(x.invert(coordinates[0])) + "</br>Total amount of models produced: " + parseInt(y.invert(coordinates[1]))) 
                .style("left", (d3.event.pageX) + "px")     
                .style("top", (d3.event.pageY - 28) + "px");    
            })
            .on("mouseout", function(d) {
            d3.select(this).style({stroke:'steelblue'});    
            // box.transition()        
            //     .duration(500)     
            //     .style("opacity", 0);   
        })
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

        // same again this time for the brush part underneath
        context.selectAll('path')
           .data(['Acura', 'Alfa-Romeo', 'Aston-Martin', 'Audi', 'Bentley', 'BMW', 'Bugatti', 'Buick', 'Cadillac',
            'Chevrolet', 'Citroen', 'Daewoo', 'Daihatsu', 'Dodge', 'Ferrari', 'Fiat', 'Ford', 'GEO', 'GMC', 'Honda',
            'Hummer', 'Hyundai', 'Infiniti', 'Jaguar', 'Jeep','Kia', 'Lamborghini', 'Land-Rover', 'Lexus', 'Lincoln',
            'Lotus', 'Maserati', 'Mazda', 'Mercedes-Benz', 'Mercury', 'MG','Mini', 'Mitsubishi', 'Nissan', 'Oldsmobile', 'Peugeot',
            'Plymouth', 'Pontiac', 'Porsche', 'Rambler', 'Renault','Rolls-Royce', 'Saab', 'Smart', 'Spyker', 'Subaru',
            'Suzuki', 'Tesla', 'Toyota', 'Volkswagen', 'Volvo'])
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

        svg.append("g")
        .append("text")
            .attr("transform", "rotate(-90)")
            .attr("y", 6)
            .attr("dy", "2")
            .style("text-anchor", "end")
            .text("Total models produced");

        svg.append("text")
        .attr("x", 440)             
        .attr("y", 40 )
        .attr("text-anchor", "middle")  
        .style("font-size", "16px") 
        .text("Total amount of produced models each year");

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
    // datamap for the world
    var map = new Datamap({
        scope: 'world',
        element: document.getElementById('container1'),
        projection: 'mercator',
        height:1200, 
        geographyConfig: {
            highlightOnHover: true,
            highlightFillColor: 'lightgray',
            highlightBorderColor: 'white',
            highlightBorderWidth: 1,
            popupTemplate: function (geo, data) {
                if ( !data ) return;
                return ['<div class="hoverinfo">','<h1>Names of the car makes in ' + geo.properties.name,'</h1>' + data.country_makes, '</div>'].join('');
                },
        },
    fills: {
      defaultFill: 'gray',
      none :'gray',
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