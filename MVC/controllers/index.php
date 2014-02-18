<?php

class IndexController extends Controller {
    
	public function index($change=0){
	    $data = array();
        $data['title'] = 'VertexBilling СМС Биллинг';

        HTML::setUserLanguage('ru');
        $data['newGuest']=false;
        $data['locale']='ru_RU';

        
		renderView('header', $data);
        echo '<body class="page-main">';
		if(Clients::isAuth()) renderView('clientMenu', $data);
		else renderView('menu', $data);
		renderView('pages/index', $data);
		renderView('footer', $data);
	}
	

}