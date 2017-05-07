<?
class welcome extends AppController{


	public function __construct(){
		

	}
	function index(){
		$this->getView("header",array("pagename"=>"welcome"));
		$this->GenerateNav();
		$this->getView("welcome");
		$this->getView("footer");
	}
	function GenerateNav(){
		$menu = array(
			"home"=>"/", 
			"api"=>"/welcome/getApi", 
			"contact"=>"/welcome/getContact"
			);
		$this->getView("navigation", $menu);
	}
	function getContact(){
		$this->getView("header");
		$this->GenerateNav();
		$this->getView("contact");
		$this->getView("footer");
	}
	function getApi(){
		$this->getView("header");
		$this->GenerateNav();
		$this->getView("api");
		$this->getView("footer");
	}

	
}
?>