<?php

use SilverStripe\Control\Controller;
use SilverStripe\Control\HTTPRequest;

class ContactController extends Controller {

    private static $allowed_actions = [
        'count'
    ];
    
    public function count(HTTPRequest $request) {
    	$this->getResponse()->setBody(json_encode([
	        'count' => Contact::get()->count()
	    ]));

	    $this->getResponse()->addHeader("Content-type", "application/json");

	    return $this->getResponse();
    }

}
