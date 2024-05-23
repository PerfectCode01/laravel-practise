<?php

namespace App\Http\Filtres\V1;

use Illuminate\Http\Request;

class CustomerFilter extends ApiFilter {

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
}