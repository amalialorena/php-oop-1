<!-- 
   /**
     * DEFINIRE CLASSE Film:
     *   ok    Attributi:
     *      - titolo
     *      - sottotiolo
     *      - regista
     * 
     *      Metodi:
     *   ok   - costruttore che accetta titolo
     *   ok   - getFullTitle: 
     *          Se sottotitolo presente:
     *            restituisce "titolo: sottotitolo" 
     *          Se sottotiolo assente:
     *            restituisce "titolo" 
     *    ok  - __toString: 
     *          Se regista presente:
     *            restituisce "fullTitle | regista"
     *          Se regista assente:
     *            restituisce "fullTitle | ???"
     * 
     * UTILIZZO OGGETTI Film:
     * 
     *    ok  Generare 3 istanze della classe Film:
     *      - uno con solo il titolo
     *      - uno con titolo e sottotitolo
     *      - uno con titolo, sottotiolo e regista
     * 
     *    ok Stampare tutti gli oggetti tramite toString (implicito)
     * 
     *  RISULTATO ATTESO:
     * 
     *      Matrix | ???
     *      Fantozzi 2: il ritorno di fantozzi | ???
     *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
     */ -->
     <?php
        class Film {

          public $title;
          public $subtitle;
          public $movieDirector;

          public function __construct($title) {
            return $this -> title = $title;
          }

          public function getFullTitle() {
            if ($this -> subtitle) {
              return $this -> title . ": " . $this -> subtitle;
            } else {
              return $this ->title;
            }
          }

          public function __toString() {
            if($this -> movieDirector) {
              return $this -> getFullTitle() . " | " .  $this -> movieDirector . "</br>";
            } else {
              return $this -> getFullTitle() . " | " .  " ???" . "</br>";
            }
          }
        }
        
        $f1 = new Film("Matrix");
        
        $f2 = new Film("Fantozzi 2");
        $f2 -> subtitle = "il ritorno di fantozzi";

        $f3 = new Film("Peter Pan");
        $f3 -> subtitle = "il ritorno all'isola che non c'e'";
        $f3 -> movieDirector = "Robin Budd";

        echo $f1;
        echo $f2;
        echo $f3;
     ?>
