<?php

class CountriesController extends Controller {
    
	public function index($id=0){
        //possible get options
        $options=$_GET;
        if($id!=0){
            $options['ID']=$id;
        }
        $options = API_helper::authorize($options);
        $http_verb = strtoupper($_SERVER['REQUEST_METHOD']);
        switch ($http_verb) {
        case 'GET':
            $this->indexGET($options);
        break;
        case 'POST':
            $this->indexPOST($options);
        break;
        }
	}
    
    protected function indexGET($options){
        $resultData=Countries::getCountries();
        API_helper::successResponse($resultData);
    }


}