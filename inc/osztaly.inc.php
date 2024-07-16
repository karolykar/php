		
<?php 

class Gyerek {
	
	public $nev;
	public $kor;
	public static $korhatar=18;   //statikus tagváltozó
	const PI = 3.14;	//konstans tagváltozó
	
	function __construct($nev,$kor) {
		$this->nev=$nev;
		$this->kor=$kor;
	}
	
	public function bemutatkozik() {
		echo $this->nev." vagyok, ".$this->kor." éves.";
	}
	
	public function getNev() {
		return $this->nev;
	}
	
	public function getKor() {
		return $this->kor;
	}
	
	public static function ihate(Gyerek $gyerek) {   //statikus metódus
		if ($gyerek->getKor()<self::$korhatar) {
			echo $gyerek->nev." még nem ihat alkoholt!";}
		else {echo $gyerek->nev." ihat alkoholt!";}
	}
	
}

//leszármazott osztály
class Lany extends Gyerek {
	
	public $babanev;
	
	function __construct($nev,$kor,$babanev) {
		parent::__construct($nev,$kor);
		$this->babanev=$babanev;
	}
	
	public function bemutatkozik() {
		parent::bemutatkozik();
		echo " A babám neve: ".$this->babanev.".";
	}
	
	public function getBabanev() {
		return $this->babanev;
	}
	
}


































		
?>		
		
