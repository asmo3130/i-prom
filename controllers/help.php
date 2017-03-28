<?php
	
	class Help extends Controller{
		public function __construct(){
			parent::__construct();
			echo "мы в конструкторе хелп<br />";
		}
		
   		public function other($arg = false) {
    		echo "Мы в методе other контроллера Help";
    		echo "Args: ".$arg;

    		require 'models/help_model.php';
    		$model = new Help_Model();

   		}
	}
?>