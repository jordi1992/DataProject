# DataProject
 
## What features will be exposed to the end user, what problem will be solved for the user?
Gebruikers die de visualisatie gebruiken zijn in staat een helder overzicht te zien van welk merk, welke auto heeft geproduceerd of gereproduceerd en in welk jaar dat is geweest. Tevens is er te zien welke bedrijven zogenaamde dochterbedrijven zijn. (denk aan Seat dat een onderdeel is van Volkswagen). Ook geeft het informatie over hoeveel auto’s er over dat jaar verkocht zijn en waar het merk vandaan komt (Renault uit Frankrijk, BMW uit Duitsland).

Verder worden er natuurlijk filters gemaakt waardoor gebruikers bijvoorbeeld kunnen sorteren op een bepaald merk of jaartal. Natuurlijk kan de gebruiker de conclusie trekken dat als een automerk na x jaar geen nieuw model meer heeft geproduceerd dat het merk niet meer bestaat. Het concrete probleem dat de WebApp oplost, is voor een specifieke groep gebruikers, die informatie willen over wat bijvoorbeeld de eerste of laatste auto was van een automerk. Welk model vaker is gemaakt, of welk bedrijf de meeste verschillende modellen heeft. Kortom, het lost op wat betreft de duidelijkheid die een gebruiker wil verkrijgen over automerken en hun automodellen.

## A preliminary sketch of what the application will look like
Nog niet nagedacht te hebben over een lay out kan er worden gesteld dat de volgende visualisaties soorten er aan toegevoegd gaan worden. Uiteraard in een nette HTML-pagina zodat het een eenheid en rust creeërt.

![](doc/image001.png)

## What data sets and data sources will you need, how you will get the data into the right form for your app?
Het meest gemakkelijke, en in mijn ogen een snelle manier is het gebruik van een database waar alle informatie in staat die er nodig is. Onderling is het gemakkelijk verschillende tabellen aan elkaar te koppelen en deze in een browser op te halen. Als de data uit de database is gehaald kan het worden toegeschreven aan variabelen, zowel als PHP, JS is dat gemakkelijk te doen. Als de waardes in JS zijn kan er gemakkelijk mee worden gewerkt door de D3 library. Door middel van JS is het gemakkelijk aan te geven welke data er wel en niet zichtbaar gemaakt moet worden om zo bijvoorbeeld views of filters te maken.

## What separate parts of the application can be defined (decomposing the problem) and how these should work together?
De standaard weergave, wat gaat de gebruiker zien als hij naar de WebApp gaat. De verschillende views, die bijvoorbeeld worden aangeroepen door middel van een filter. En de verschillende visualisaties, zoals een barchart, een net van het hoofdmerk, met haar dochterbedrijven. En andere vormen van grafieken die gaan gebruikt worden maar waar ik voor nu nog niet zeker van ben of ze wel voorkomen (piechart, linegraph).

## How the platform will facilitate creating your application, and what external components (APIs) you need to make certain features possible?
Gelukkig is er al veel mogelijk in een browser zelf, en is het gebruik van de D3 library verplicht. Tevens is een goede text-editor handig om veel werken uit handen te nemen bij het maken van de WebApp. Waar wel op gelet moet worden is dat niet alle functies in Chrome even goed werken op andere browsers.

## Potential problems that may arise during development and what possibilities you have to overcome these?
Dat data gaat overlappen, of dat er teveel data is dat het niet duidelijk meer is voor de gebruiker. Voornamelijk door een andere vorm van weergave en het opletten bij het ophalen van data uit de database, kunnen veel van deze problemen worden verholpen. Natuurlijk komen bij het maken van de WebApp de bugs vanzelf wel naar boven.


## A very short review of similar applications or visualizations in terms of features and possibly technical aspects (what do they offer? how have they implemented it?)
http://graphics.wsj.com/job-market-tracker/ heeft manieren van visualiseren die ook gebruikt kunnen worden bij het maken van mijn eigen WebApp. Daarbij moet ik natuurlijk wel letten op de gebreken van die website. http://guns.periscopic.com/?year=2013 maakt gebruik van een animatie, dat misschien ook toegepast kan worden op het verhaal dat mijn WebApp moet gaan vertellen.