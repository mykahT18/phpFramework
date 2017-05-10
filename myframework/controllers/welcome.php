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
			"contact"=>"/welcome/getContact",
			"components"=>"/components",
			"login"=> "/welcome/getLogin"
			);
		$this->getView("navigation", $menu);
	}
	function getContact(){
		$data = '<link rel="stylesheet" href="../assets/css/carousel.css">';
		$this->getView("header");
		$this->GenerateNav();
		$this->getView("contact", $data);
		$this->getView("footer");
	}
	function getApi(){
		$this->getView("header");
		$this->GenerateNav();
		$this->getView("api");
		$this->getView("footer");
	}
	// function getCom(){
	// 	$data = '<link rel="stylesheet" href="../assets/css/carousel.css">';
	// 	$this->getView("header");
	// 	$this->GenerateNav();
	// 	$this->getView("comp", $data);
	// 	$this->getView("footer");
	// }
	function getLogin(){
		$this->getView("header");
		$this->GenerateNav();
		$data = '<link rel="stylesheet" href="../assets/css/carousel.css">';
		$this->getView("login", $data);

	}

	function recieveAjx(){

	}
	function getFormValues(){
		if($__REQUEST["username"]=="joe" && $__REQUEST["username"]=="1234" ){
			echo "good";
		}else{
			echo "bad";
		}

	}

	
}
?>