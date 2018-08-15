<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render(){

    	return ['error' => 'Sorry! You are not authorize user.'];

    }
}
