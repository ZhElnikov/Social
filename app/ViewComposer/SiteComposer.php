<?php
	namespace App\ViewComposer;
	
	use illuminate\Contracts\View\View;
	
	class siteComposer{
		public function compose(View $view){
			$test='Ok';
			$view->with('test',$test);
		}
	}
?>