<?


class components extends AppController{

	public function __construct(){}


	function index(){
		$data = '<link rel="stylesheet" href="../assets/css/carousel.css">';
		$this->getView("header",array("pagename"=>"welcome"));
		$this->GenerateNav();
		$this->getView("comp", $data);
		$this->getView("footer");
	}
	function GenerateNav(){
		$menu = array(
			"home"=>"/", 
			"api"=>"/welcome/getApi", 
			"contact"=>"/welcome/getContact",
			"components"=>"/components",
			"login"=> "/welcome/getLogin"
			);
		$this->getView("navigation", $menu);
	}


}

?>