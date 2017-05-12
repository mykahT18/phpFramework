<?

class profile extends AppController{

	public function _construct(){
		if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){
			
		}else{
			header("Location:/welcome");
		}

	}

	function index(){
		$this->getView("header", array('pagename' => 'welcome' ));
		echo "This is a protected area!";
	}
}



?>