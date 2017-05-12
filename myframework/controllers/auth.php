<?

class auth extends AppController{

	public function __construct(){}

	function login(){
		if($_REQUEST["username"] && $_REQUEST["password"]){

			if($_REQUEST["username"]=="luke@gmail.com" && $_REQUEST["password"]=="1234"){

				$_SESSION["loggedin"] =1;

				header("Location:/welcome");
			}else{

				header("Location:/welcome?msg=Bad Login");
			}
		}else{
			header("Location:/welcome?msg=Bad Login");
		}
	}

  function logout(){
    session_destroy();
    header("Location:/welcome");
  }
}



?>
