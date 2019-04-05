<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
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
