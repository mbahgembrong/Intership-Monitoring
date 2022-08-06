<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Pembimbing;

class UpdatePembimbingRequest extends FormRequest
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
        $rules = Pembimbing::$rules;
        $rules['phone'] = $rules['phone'].",".$this->route("pembimbing");$rules['email'] = $rules['email'].",".$this->route("pembimbing");
        return $rules;
    }
}
