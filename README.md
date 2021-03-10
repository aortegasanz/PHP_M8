# PHP_M8
PHP i Objectes

* Descripció
    Ha arribat l'hora de posar en pràctica una teoria tan important com la de l'orientació a objectes en PHP. Desenvoluparem en tres fases(que s'acumularan) un projecte bàsic que representarà un inventari de productes que bé podrien ser les compres de la nostra llar. Després, desenvoluparem opcions relacionades amb els productes que comprem, de tal forma que aquest projecte bé podria ser la llavor d'una eina més complexa que ens permetrès obtenir dades rellevants sobre les nostres compres domèstiques.
    Quasi res ! 
    Es valorarà com repartiu responsabilitats entre diferents objectes. Sabem que tot el que us proposarem en aquest exercici es pot fer tranquilament en un unic arxiu .php, però la idea és que apliqueu POO  ;).
    No es valorarà presentació en aquest exercici, però ja sabeu que la vida és molt més bonica amb colors i estils :)

    - Nivell 1
        * Exercici 1
            - Necessitarem crear una base de dades amb una taula "Compra" que tingui com a atributs:
                Nom del producte comprat.
                Preu unitari del producte.
                Quantitat adquirida del producte.
                Id de la fila en la taula.
                Podeu crear-al al vostre gust o fer servir l'arxiu adjunt "php_m8_n1.sql".

            - El fluxe d'execució principal vindrà donat a l'arxiu index.php que en aquesta primera fase haurà de :
            - Connectarse a una base de dades(pots crear una classe per a aïllar aquesta lògica del fluxe principal d'execució).
            - Inserir al menys 3 productes a la taula "producte" de la base de dades.
            - Crear una classe Taula, que ens servirà per a invocar els mètodes que hi implementem per dibuixar una taula amb els productes registrats a la base de dades d'una manera semblant(que no té perquè igual) a aquesta:
            - Desconnectarse de la base de dades.

    - Nivell 2
        * Exercici 2
            - Afegeix a sobre de la taula un botó "Nou Producte" que condueixi a la pàgina insereix.php on haurem de crear un formulari que ens permeti crear un producte a inserir a la base de dades.

        * Exercici 3
            - Afegeix a cada fila de la Taula de productes comprats una columna que inclogui opcions per modificar i eliminar cadascun dels productes. Podeu indicar les opcions com vulgueu(mitjançant icones, botons...) de tal forma que: 
            - La opció de modificar ens porti a una pàgina modificar.php que inclogui un formulari per editar dades d'aquell producte.
            - La opció d'eliminar ens permetrà esborrar aquell producte de la base de dades. Lògica que implementarem al nivell 3.

    - Nivell 3
        * Exercici 4
            - Implementar les lògiques d'inserció, esborrat i modificació dels productes.