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


}