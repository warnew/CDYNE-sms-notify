#SMS autoresponder with CDYNE Notify! api

##What's this?##
 
We [learned](link a kozossegepito cikkre) from the guys at (a site neve) there are a few key things in early community development.

Mint megtanultuk a sracoktol ott..., a korai kozossegfejlesztesnek egyik fontos eleme, hogy ha valaki ir a forumon, akkor hamar kapjon - lehetoleg minosegi - valaszt. Nem varjuk el a kulcsfiguraktol, hogy folyamatosan figyeljek az oldalt, de szeretnenk ha ennek ellenere idoben ertesulnenek az oket erinto kerdesekrol. 

Eleg hamar megfogalmazodott, hogy egy autoresponder alkalmas lehet a problema megoldasara, de sokaknak nincs okostelefonja, igy az email/mobil web ertesitok kiesnek, maradt az SMS!

Szerencsere a CDYNE SMS Notify! API-ja, amivel az sms-ek kuldese (es fogadasa) meglehetosen egyszeru.


So, we have a new project in development, where we want to cultivate a communitysome of the key figures in our young community don't have smartphones or simply they can't (or won't) do email or check our forums when they're offline.  
 
There is a professional and simple to use SMS Notify api at CDYNE, so that's the weapon of choice in this example. Let's see how to do something like this:  
 


##Hogyan?##

Volt par szempont, mikor elkezdtem ezt a projectet megvalositani:

- egyedulallo
- kis eroforras igenyu
- egyszeruen konfiguralhato
- biztonsagos (idegenek ne nagyon kuldjenek sms-t vele)

Hat, ez lett belole.

##Hasznalat:##

van 3 file: 
  a config
    ide irjuk, a dolgokat amit a ket masik hasznal
  a szerver
    ez kuldi az smst
  a 'kliens'
    ezzel kuldjuk az smst

##Jogok:##

GPL

