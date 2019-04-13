<?php

namespace App\Http\Requests\Clients;
use Illuminate\Foundation\Http\FormRequest;

class CreateClientRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nameCompany' => 'required',
            'nameContact' => 'required',
            'titleContact' => 'required',
            'address' => 'required',
            'city' => 'required',
            'region' => 'required',
            'zipCode' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'fax' => 'required'
        ];
    }
}
