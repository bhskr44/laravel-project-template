<?php

namespace App\Validators;

class LocationRules {

    public function locationGetCircles()
    {
        $rules = [
            'dist_code' => 'required|string|exists:location,dist_code',
            'subdiv_code' => 'required|string|exists:location,subdiv_code',

        ];
    
        $attributes = [
            'subdiv_code' => 'Sub-division Code',
            'dist_code' => 'District Code',
        ];
    
        return [
            'rules' => $rules,
            'attributes' => $attributes,
        ];
    }

    public function locationGetMauzas()
    {
        $rules = [
            'dist_code' => 'required|string|exists:location,dist_code',
            'subdiv_code' => 'required|string|exists:location,subdiv_code',
            'cir_code' => 'required|string|exists:location,cir_code',

        ];
    
        $attributes = [
            'subdiv_code' => 'Sub-division Code',
            'dist_code' => 'District Code',
            'cir_code' => 'Circle Code',
        ];
    
        return [
            'rules' => $rules,
            'attributes' => $attributes,
        ];
    }

    public function locationGetLots()
    {
        $rules = [
            'dist_code' => 'required|string|exists:location,dist_code',
            'subdiv_code' => 'required|string|exists:location,subdiv_code',
            'cir_code' => 'required|string|exists:location,cir_code',
            'mouza_pargona_code' => 'required|string|exists:location,cir_code',

        ];
    
        $attributes = [
            'subdiv_code' => 'Sub-division Code',
            'dist_code' => 'District Code',
            'cir_code' => 'Circle Code',
            'mouza_pargona_code' => 'Mouza Pargona Code',
        ];
    
        return [
            'rules' => $rules,
            'attributes' => $attributes,
        ];
    }

    public function locationGetVillage(){
        $rules = [
            'dist_code' => 'required|string|exists:location,dist_code',
            'subdiv_code' => 'required|string|exists:location,subdiv_code',
            'cir_code' => 'required|string|exists:location,cir_code',
            'mouza_pargona_code' => 'required|string|exists:location,cir_code',
            'lot_no' => 'required|string|exists:location,lot_no',
        ];
    
        $attributes = [
            'subdiv_code' => 'Sub-division Code',
            'dist_code' => 'District Code',
            'cir_code' => 'Circle Code',
            'mouza_pargona_code' => 'Mouza Pargona Code',
            'lot_no' => 'Lot No',
        ];
    
        return [
            'rules' => $rules,
            'attributes' => $attributes,
        ];
    }
}
