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
            'name' => 'required',
            'surName' => 'required',
            'cpfCnpj' => 'required',
            'rg' => 'required',
            'dateBorn' => 'required',
            'photo' => 'required|image'
        ];
    }
}
