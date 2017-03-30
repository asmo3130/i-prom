<?php

	class Index extends Controller{
		public function __construct(){
			parent::__construct();
			echo "ми в контролере индекс";
			  $this->view->render('index/index');
		}
		public function index() {
  echo 'INSIDE INDEX INDEX';
}

public function details() {
  $this->view->render('index/index');
}

	}