# Final Report

## Inleiding

Mijn visualisatie gaat over automerken want over automerken is er heel veel te vertellen.
In deze visualisatie kun je zien waar welk automerk vandaan komt, het land van oorsprong dus.
Daarnaast zijn de onderlinge relaties tussen automerken ook uitgebeeld. Denk hierbij aan welke
autogroep welke andere automerken bezitten (Zoals Volkswagen bijvoorbeeld Skoda bezit). Als laatste
is er ook nog een grote grafiek te zien waarin per jaar wordt aangegeven hoeveel modellen elk automerk
in totaal heeft uitgebracht in dat jaar. De bedoeling is dat deze visualisatie meer inzicht geeft voor gebruikers
die weinig of zelfs niets van automerken af weten en toch graag zijn of haar kennis wilt uitbreiden.
Ook is het voor ervaren gebruikers die bijvoorbeeld in deze branche werken gemakkelijk te zien hoe het ook alweer zat
met bijvoorbeeld welk automerk er bij welke autogroep hoort.


## Technisch Design

De visualisatie waar je op landt is een wereldkaart waarop een bepaald aantal landen zijn ingekleurd.
Dit geeft aan hoeveel automerken er van oorsprong uit dat land komen, hoe donkerder de kleur, hoe meer automerken
er van origine van dat land komen. Als de gebruiker met zijn muis over de land gaat verschijnt er over welke merken
het gaat. Om dit te doen is er een connectie gemaakt met de database waarin per land staat beschreven welk automerk hier vandaan komt.
Deze worden opgehaald en in een array gezet zodat ze in JavaScript te gebruiken zijn. Daarna wordt er per land over deze gehele lijst gegaan
en in een array gestopt welk bij dat land land horen. vervolgens worden die arrays ingeladen bij de desbetreffende landcode en positie.
Als de gebruiker dan over dit land heen gaat met de muis verschijnt er een pop-up met daarin de data die uit de database komt. Is er geen
data bekend dan krijgt de gebruiker hier ook een melding van. Daaronder vindt de gebruiker een netwerk visualisatie, waarin de relaties staan tussen
de automerken die er zijn. De gebruiker kan op de bolletjes drukken om naar de Wikipedia link van dat automerk te gaan. De kennis die de gebruiker daarbij
opdoet is een verdieping op mijn visualisatie. Als laatste is er een grote multiline grafiek te vinden onderaan de pagina. Deze grafiek laat per jaar zien
hoeveel modellen er in totaal door dat merk zijn geproduceerd. De bedoeling is om een beeld te geven hoe snel automerken zijn gegroeid in over de jaren heen.
Tevens staat overal wat tekst er bij om het een en ander wat toe te lichten. Zodat de gebruiker weet waar de data over gaat en hoe deze daar mee om kan gaan.


## Uitdagingen

Het was voor mij een uitdaging om een onderwerp te zoeken waar genoeg data mee te vinden was en waarmee ik de gebruiker voor een langere tijd geboeid kon houden.
Uiteindelijk heb ik er voor gekozen om het dus over automerken en hun relaties te doen, ook door persoonlijke interesse maar ook omdat het in mijn ogen een onderwerp
is waar niet iedereen bekend mee is. Daarnaast was het lastig om een gratis (en complete) dataset te vinden die genoeg data bevatte om mee te werken. Dit heeft mij redelijk wat tijd gekost om iets bruikbaars te vinden en wat compleet genoeg was om mee te gaan werken. Uiteindelijk heb ik dan ook twee verschillende datasets gebruikt om mee te werken. Verder was het ook lastig om verschillende bruikbare visualisaties te zoeken die gebruikt konden worden om mijn onderwerp zo gemakkelijk en duidelijk mogelijk weer te geven. De enige echte visualisatie die in mijn hoofd vast stond was de multiline grafiek die nu onderaan de pagina staat. Uit feedback van de presentaties is gebleken dat dat een betere plek was dan om de pagina mee te beginnen, omdat het anders meteen heel druk zou zijn voor de gebruiker. Daarnaast hebben de feedback momenten mij geholpen om de andere twee visualisaties te kiezen die bij mijn onderwerp pastten. Deze waren voor mijn gevoel ook een stuk gemakkelijker in gebruik dan de multilijn grafiek die als laatste op de planning stond. Nadat ik mijn data uit mijn dataset had gehaald liep ik al tegen het probleem aan hoe ik de waardes in de correcte codering in de grafiek kreeg. Dit bleek met een dictionairy te kunnen. Ik had er nog heel weinig ervaring mee en het lukte mij dan ook niet om zelf tot een oplossing te komen. Daarom heb ik de hulp van de assistent ingeschakeld in de hoop dat we er eventueel samen 
uit konden komen. Helaas na veel getest en dingen geprobeerd te hebben is het zelfs met de begeleider het niet gelukt om door middel van een dictionairy de data in te laden voor de grafiek. Hier baalde ik zelf echt enorm van, en het was dan ook een flinke tegenslag op mijn moraal. Uiteindelijk ben ik er toch grotendeels op een andere manier uit gekomen maar het had mij wel flink wat vertraging opgeleverd, waardoor functies niet helemaal kloppend of af zijn. Zo zijn bijvoorbeeld de visualisaties niet gelinkt aan elkaar, iets wat ik wel graag had gewild, zoals dat als je bijvoorbeeld op een merk klikt dat zowel het land van oorsprong als op de multilijn grafiek deze geselecteerd werd en daar de waardes van zou laten zien. In mijn ogen is dit het grootste punt wat ik niet bereikt heb met mijn visualisatie, mede door tijdgebrek dat ik heb opgelopen door problemen waar ik tegen aan ben gelopen. Als mede doordat mijn kennis nog niet ver genoeg gaat om dit individueel kloppend te maken. Misschien heb ik het mezelf te moeilijk gemaakt, ondanks het incomplete eindresultaat ben ik alsnog trots op wat er nu staat.

## Argumentatie van gemaakte keuzes

Allereerst is het voor de indeling beter als de gebruiker verwelkomt wordt op de pagina zonder dat de gebruiker meteen overvallen/overladen wordt met data. Daarom is het een verstandige keuze geweest om de multilijn grafiek naar ondere te verplaatsen. Daardoor heeft de gebruiker meer rust in het ontdekken van de webpagina. Een andere belangrijke verandering die plaats heeft gevonden is diegene met betrekking op de data van de multilijn grafiek. Deze data was bedoeld om dynamisch te zijn, maar helaas om eerder genoemde redenen is dit niet gelukt. Daar door is de data nu in een grote variabele gezet om toch wat te laten zien. Deze keuze heb ik vooral gemaakt omdat door tijdsgebrek de bewegingsruimte beperkt was. Het is geen nette oplossing, maar voor de gebruiker is het niet te zien op de voorgrond, pas als er in de code gekeken wordt gaat zoiets pas opvallen. Maar mijn voornaamste reden dat ik het zo heb gedaan is omdat ik toch vond dat de multilijn grafiek er in moest, en hoe dat nu gedaan is is in mijn ogen de nog meest handige manier.
Natuurlijk was het beter geweest  als de data dynamisch was, dat geef ik toe. Maar ondanks dat dat niet gelukt is staat er toch een grote grafiek met data, en dat is voor mij wat nu het belangrijkste is; Dat het op de voorgrond een werkend geheel is.

## Conclusie

Er zijn toch een hoop tegenslagen die ik te verduren heb gekregen en niet alles is even efficiënt in elkaar gezet. En als ik meer tijd had gehad had ik ook zeker meer naar functionaliteiten gekeken. Toch vond ik het leuk om hier aan te werken, ondanks de tegenslagen. Je werkt toch aan iets waar je interesses in liggen en wat andere misschien wel nog nooit hebben gemaakt. Dat is toch een unieke ervaring.

