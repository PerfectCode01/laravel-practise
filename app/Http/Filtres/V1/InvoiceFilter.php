<?php

namespace App\Http\Filtres\V1;


class InvoiceFilter extends ApiFilter {

    // les operqtions acceptes dans les requetes pour chaque column
    protected $safeParams = [
        'customerId'=>['eq'],
        'amount'=>['eq','gt','lt','gte','lte'],
        'status'=>['eq', 'ne'],
        'bailledDate'=>['eq', 'gt', 'lt'],
        'paidDate'=>['eq','gt', 'lt'],  
    ];

    // Mentionne toutes les requetes transforme lors de la creation des resources
    protected $columMap = [ 
        'customerId'=>'customer_id',
        'bailledDate'=>'bailled_date',
        'paidDate'=>'paidDate'
     ]; 

    // lier la correspondace des operateurs cite-ci haut a leurs equivalent laravel
    
    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'lt' => '<',
        'gte' => '>=',
        'lte' => '<=',
        'ne' => '!=',
    ];
}