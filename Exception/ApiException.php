<?php

namespace BudapestBar\Bundle\HivataliKapu\HivataliKapuBundle\Exception;

/**
* 
*/
class ApiException extends \Exception
{
	
	// Redefine the exception so message isn't optional
    public function __construct($message, $code = 0, Exception $previous = null) {
        
        parent::__construct($message, $code, $previous);

    }

    // custom string representation of object
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
	
}