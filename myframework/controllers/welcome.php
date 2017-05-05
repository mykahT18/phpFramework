<?
class welcome extends AppController{


	public function __construct(){

		$this->getView("header",array("pagename"=>"welcome"));
		$this->GenerateNav();
		$this->getView("body");
		$this->getView("footer");

	}
	function GenerateNav(){
		$menu = array(
			"home"=>"/home", 
			"api"=>"/api", 
			"contact"=>"/contact"
			);
		$this->getView("navigation", $menu);
	}
}
?>