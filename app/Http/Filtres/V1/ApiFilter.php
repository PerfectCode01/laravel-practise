<?php

namespace App\Http\Filtres\V1;

use Illuminate\Http\Request;

class ApiFilter {

    // les operqtions acceptes dans les requetes pour chaque column
    protected $safeParams = [];

    // Mentionne toutes les requetes transforme lors de la creation des resources
    protected $columMap = []; 

    // lier la correspondace des operateurs cite-ci haut a leurs equivalent laravel
    
    protected $operatorMap = [];


    public function transform(Request $request){
        $finalQuery = [];
        
        foreach ($this->safeParams as $param => $operators) {
            $query = $request->query($param);
            if(!isset($query)){
                continue;
            }
            $column = $this->columMap[$param] ?? $param;
            foreach ($operators as $operator){
                if(isset($query[$operator])){
                    $finalQuery[] = [$column, $this->operatorMap[$operator],$query[$operator]];
                }
            }
        }
        return $finalQuery;
    }
}