// Aktuelle Fehler: Statt Einhundertvier schreibt das Programm Einshundertvier und statt Fünfzehn schreibt es Fünfundzehn

function zahlenuebersetzer(zahl){
  let wort = ""
  if(zahl < 10){
    wort = einstellig(zahl);
    if(wort === "eins"){
      wort = "ein";
    }
  }else if(zahl < 100){
    wort = zweistellig(zahl);
  }else if(zahl < 1000){
    wort = dreistellig(zahl);
  }
  return wort
}

function einstellig(zahl){ // hier wird eine einstellige Zahl eingegeben
  let wort = "";
  let zahl_str = zahl.toString();
  zahlenwoerter = {
        "1":"eins",
        "2":"zwei",
        "3":"drei",
        "4":"vier",
        "5":"fünf",
        "6":"sechs",
        "7":"sieben",
        "8":"acht",
        "9":"neun",
        }
   wort = zahlenwoerter[zahl_str];
   return wort
}

function zweistellig(zahl){ //hier wird eine zweistellige zahl eingegeben
  let zahlenwort = "";
  zahlenwoerter = {
    "10":"zehn",
    "11":"elf",
    "12":"zwölf",
    "20":"zwanzig",
    "30":"dreißig",
    "40":"vierzig",
    "50":"fünfzig",
    "60":"sechzig",
    "70":"siebzig",
    "80":"achtzig",
    "90":"neunzig",
  }
  if (zahl < 100) {
      if (zahl === 10 || zahl === 11 || zahl === 12 || zahl === 20 || zahl === 30 || zahl === 40 || zahl === 50 || zahl === 60 || zahl === 70 || zahl === 80 || zahl === 90) { //gerade zehner sind unregelmäßig
        zahlenwort = zahlenwoerter[zahl.toString()]
      }else if(zahl.toString()[0] === "1"){
        zahl_str = zahl.toString()
        zehner = zahl_str[0]+"0"
        zehner = zahlenwoerter[zehner]
        zahlenwort = einstellig(zahl_str[1])+zehner
      }else if(zahl.toString()[1] === "1"){
        zahl_str = zahl.toString()
        zehner = zahl_str[0]+"0"
        zehner = zahlenwoerter[zehner]
        zahlenwort = "ein"+"und"+zehner
      }else{
        zahl_str = zahl.toString()
        zehner = zahl_str[0]+"0"
        zehner = zahlenwoerter[zehner]
        zahlenwort = einstellig(zahl_str[1])+"und"+zehner
      }
    }
    return zahlenwort
  }

//100, 200, 300, ...
//101, 102, 103, ...
//110, 111, 112, ...

function dreistellig(zahl){
  let zahlenwort = "";
  let zahl_str = zahl.toString()
  if(zahl_str[1] === "0" && zahl_str[2] === "0"){ // wenn die letzten beiden stellen null sind
      if(zahl_str[0] === "1"){
        hunderter = "ein"+"hundert"
      }else{
        hunderter = einstellig(zahl_str[0])+"hundert"
      }
      zahlenwort = hunderter
  }else if(zahl_str[1] === "0"){ //wenn die mittlere stelle null ist
      if(zahl_str[0] === "1"){
        hunderter = "ein"+"hundert"
      }else{
        hunderter = einstellig(zahl_str[0])+"hundert"
      }
      letzte_stelle = einstellig(zahl_str[2])
      zahlenwort = hunderter+"und"+letzte_stelle
  }else{ //wenn ein zehner dazu kommt
      if(zahl_str[0] === "1"){
        hunderter = "ein"+"hundert"
      }else{
        hunderter = einstellig(zahl_str[0])+"hundert"
      }
      zehner = zahl_str[1]+zahl_str[2]
      letzte_stelle = zweistellig(parseInt(zehner))
      zahlenwort = hunderter+"und"+letzte_stelle
  }
  return zahlenwort
}

//1000, 2000, 3000
//1001, 1002, 1003
//1010, 1011, 1012
//1100, 1101, 1110
