<?php

namespace App\Services;

use App\Validators\FieldMutationRules;
use App\Validators\LocationRules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidatorService
{
    public function validate(string $rule, Request $request): array
    {
        // Initialize LocationRules

       
        $locationRules = new LocationRules();

        // Define validation rules and attributes
        $validationData = [];

        // Check which rule we need to apply
        if ($rule == 'get-circles') {
            $validationData = $locationRules->locationGetCircles();
        } elseif ($rule == 'get-mouzas-from-circle') {
            $validationData = $locationRules->locationGetMauzas();
        }elseif ($rule == 'get-lots-from-mouza') {
            $validationData = $locationRules->locationGetLots();
        }elseif ($rule == 'get-villages-from-lot') {
            $validationData = $locationRules->locationGetVillage();
        }
        //Event Validation
      





        
        // Check if the provided rule exists in the validation rules array
        if (empty($validationData)) {
            return ['is_validated' => false, 'errors' => ['Invalid validation rule']];
        }

        $rules = $validationData['rules'];

        // Create the validator with the request data
        $validator = Validator::make($request->all(), $rules);

        if(isset( $validationData['attributes'])){
            $attributes = $validationData['attributes'];
            $validator->setAttributeNames($attributes);
        }

        // Return validation result
        return [
            'is_validated' => !$validator->fails(),
            'errors' => $validator->errors()->all(),
        ];
    }
}
