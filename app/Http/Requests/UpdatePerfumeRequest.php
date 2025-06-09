<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePerfumeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'txtcasa' => 'required',
            'txtnombre' => 'required',
            'txtcantidad' => 'required',
            'txttipo' => 'required',
            'txtfrasco' => 'required',
            'txtfecha' => 'required',
            'txthora' => 'required',

        ];
    }

    public function messages()
    {
        return [

            'txtcasa' => 'El campo casa esta vacio',
            'txtnombre' => 'El campo nombre esta vacio',
            'txtcantidad' => 'El campo cantidad esta vacio',
            'txttipo' => 'El campo tipo esta vacio',
            'txtfrasco' => 'El campo frasco esta vacio',
            'txtfecha' => 'El campo fecha esta vacio',
            'txthora' => 'El campo hora esta vacio',
        ];
    }
}
