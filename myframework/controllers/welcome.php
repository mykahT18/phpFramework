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
		$this->getView("header");
		$this->GenerateNav('contact');
		$random = substr( md5(rand()), 0, 7);
		$_SESSION['captcha']= $random;
		// var_dump($_SESSION['captcha']);
		$this->getView("contact",array("cap"=>$random, "style"=> '<link rel="stylesheet" href="../assets/css/carousel.css">'));
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
		var_dump($_SESSION["captcha"]);
		if($_POST["captcha"]== $_SESSION["captcha"]){

			if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){

			echo "Email invalid";

			echo "<br><a href='/welcome/getcontact'>Click here to go back</a>";
			}else{

				echo "Email valid";
			}
		}else{
			echo "Invalid captcha";

			echo "<br><a href='/welcome/getContact'>Click here to go back</a>";

		}	

		// 
		// if($_POST["name"]!="" && $_POST["subject"]!="" ){
		// 	echo "<h1>Your message was sent!</h1>";
		// }else{
		// 	echo "<h1>You didn't fill in all the information.</h1>";
		// }

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