<?php
namespace app\home\controller;
use app\home\controller\Common;
	class About extends Common{
		public function about(){
			return $this->fetch();
		}
	}
 ?>