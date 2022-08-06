<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Staf;

class UpdateStafRequest extends FormRequest
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
        $rules = Staf::$rules;
        $rules['phone'] = $rules['phone'].",".$this->route("staf");$rules['email'] = $rules['email'].",".$this->route("staf");
        return $rules;
    }
}
