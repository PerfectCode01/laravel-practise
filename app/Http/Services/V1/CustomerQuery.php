<?php

namespace App\Http\Services\V1;

use Illuminate\Http\Request;

class CustomerQuery {

    // les operqtions acceptes dans les requetes pour chaque column
    protected $safeParams = [
        'name'=>['eq'],
        'type'=>['eq'],
        'adress'=>['eq'],
        'postalCode'=>['eq','gt', 'lt']  
    ];

    // Mentionne toutes les requetes transforme lors de la creation des resources
    protected $columMap = [ 'postalCode'=>'postal_code' ]; 

    // lier la correspondace des operateurs cite-ci haut a leurs equivalent laravel
    
    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'lt' => '<',
    ];


    public function transform(Request $request){
        $finalQuery = [];
        
        return $finalQuery;
    }
}