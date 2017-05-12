<?
class welcome extends AppController{


	public function __construct(){}

	function index(){
		$this->getView("header",array("pagename"=>"welcome"));
		$this->GenerateNav("home");
		$this->getView("welcome");
		$this->getView("footer");
	}
	function GenerateNav($page= "welcome"){
		$menu = array(
			"home"=>"/", 
			"api"=>"/welcome/getApi", 
			"contact"=>"/welcome/getContact",
			"components"=>"/components",
			"login"=> "/welcome/getLogin"
			);
		$this->getView("navigation", $menu, $page);
	}
	function getContact(){
		$style = '<link rel="stylesheet" href="../assets/css/carousel.css">';
		$this->getView("header");
		$this->GenerateNav('contact');
		$this->getView("contact", $style);
		$this->getView("footer");
	}
	function getApi(){
		$style = '<link rel="stylesheet" href="../assets/css/carousel.css">';
		$this->getView("header");
		$this->GenerateNav("api");
		$this->getView("api", $style);
		$this->getView("footer");
	}
	function getLogin(){
		$this->getView("header");
		$this->GenerateNav("login");
		$style = '<link rel="stylesheet" href="../assets/css/carousel.css">';
		$this->getView("login", $style);
		$this->getView("footer");

	}

	function reciveContact(){
		$this->getView("header");
		// $this->GenerateNav();
		var_dump($_POST);
		if($_POST["name"]!="" && $_POST["subject"]!="" ){
			echo "<h1>Your message was sent!</h1>";
		}else{
			echo "<h1>You didn't fill in all the information.</h1>";
		}

	}
	function checkLogin(){
		if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
			echo "Email is invalid";
		}else{
			echo "Email is valid";
		}
	}
	function ajaxPars(){
		if (@$_REQUEST["email"]=="luke@gmail.com" && $_REQUEST["password"]=="1234") {
			echo "Welcome!!";
		}else{
			echo "Sorry! Bad Login";
		}
	}

	
}
?>