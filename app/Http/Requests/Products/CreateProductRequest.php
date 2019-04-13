<?php

namespace App\Http\Requests\Products;
use Illuminate\Foundation\Http\FormRequest;

    class CreateProductRequest extends FormRequest
    {
        public function authorize()
        {
            return true;
        }

        public function rules()
        {
            return [
                'nameProduct' => 'required',
                'quantidade' => 'required',
                'precoUnitario' => 'required',
                'UnidadeEmEstoque' => 'required',
                'UnidadeEmOrdem' => 'required',
                'NivelDeReposicao' => 'required',
                'descontinuado' => 'required',
            ];
        }
    }

