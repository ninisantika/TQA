<?php class karyawan {
    
    private $nama;
	private $title;
    public $sallary;
    public $companyname;
    public $depname;
    
	public function setnama($a){
		$this->nama = $a;
	}
	public function settitle($a){
		$this->title = $a;
	}
	public function setsallary($a){
		$this->sallary = $a;
	}
	public function setcompanyname($a){
		$this->companyname = $a;
    }
    public function setdepname($a){
		$this->depname = $a;
	}


	public function getnama() {
		return $this->nama; 
	}
	public function gettitle() {
		return $this->title;
	}
	public function getsallary() {
		return $this->sallary;
	}
	public function getcompanyname() {
		return $this->companyname;
    }
    public function getdepname() {
		return $this->depname;
	}
}

    $karyawan = new karyawan;
    $karyawan->setnama("Nini Santika");
    $karyawan->settitle("Junior Testing");
    $karyawan->setsallary("1JT");
    $karyawan->setcompanyname("PT. XXX");
    $karyawan->setdepname("Unit Testing");

    echo "Nama karyawan : <b>".$karyawan->getnama()."</b> <br>"; 
    echo "title karyawan : <b>".$karyawan->gettitle()."</b> <br>";
    echo "sallary karyawan : <b>".$karyawan->getsallary()."</b> <br>";
    echo "company karyawan : <b>".$karyawan->getcompanyname()."</b> <br>"; 
    echo "departemen karyawan : <b>".$karyawan->getdepname()."</b> <br>"; 
?>