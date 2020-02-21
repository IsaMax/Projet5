<?

class Biere {

    private $_id;
    private $_idBrasserie;
    private $_nom;
    private $_couleur;
    private $_degre;
    private $_gout;
    private $_alcool;
    private $_malt;
    private $_conservation;
    private $filtration;
    private $_type;
    private $_contenance;
    private $_presentation;
    private $_photo;

    // Liste des getters

    public function id() { return $_id; }
    public function idBrasserie() { return $_idBrasserie; }
    public function nom() { return $_nom; }
    public function couleur() { return $_couleur; }
    public function degree() { return $_degree; }
    public function gout() { return $_gout; }
    public function alcool() { return $_alcool; }
    public function malt() { return $_malt; }
    public function conservation() { return $_conservation; }
    public function filtration() { return $_filtration; }
    public function type() { return $_type; }
    public function contenance() { return $_contenance; }
    public function presentation() { return $_presentation; }
    public function photo() { return $_photo; }


    // Liste des Setters

    public function setIdBrasserie($idBrasserie) {

        $idBrasserie = (int) $idBrasserie;

        if($idBrasserie > 0) {
            $_idBrasserie = $idBrasserie;
        }
    }


    public function setNom($nom) {

        $nom = (string) $nom;

        if(strlen($nom) > 0) {
            $_nom = $nom;
        }
    }

    public function setCouleur($couleur) {

        $listeCouleur = Array('blonde', 'speciale', 'brune', 'noire', 'ambree', 'blanche');

        if(in_array($couleur, $listeCouleur)) {
            $_couleur = $couleur;
        }
    }

    public function setDegree($degree) {

        $degree = (int) $degree;

        if($degree > 0 && $degree < 50) {
            $_degree = $degree;
        }

    }

    public function setGout($gout) {
        return $_gout;
    }

    public function setAlcool() { return $_alcool; }

    public function setMalt() { return $_malt; }

    public function setConservation() { return $_conservation; }

    public function setFiltration() { return $_filtration; }

    public function setType() { return $_type; }

    public function setContenance() { return $_contenance; }

    public function setPresentation() { return $_presentation; }

    public function setPhoto() { return $_photo; }


}