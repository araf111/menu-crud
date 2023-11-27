<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class MasterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    
    public function rules()
    {
        return [
            "eng_name"      => "required",
            "bng_name"      => "required",
            "email"         => "required",
            "mobile"        => "required",
            "title"         => "required",
            "subtitle"      => "required",
            "description"   => "required",
            "footer_one"    => "required",
            "footer_two"    => "required",
            "image_one"     => "required",
            "image_two"     => "required"
        ];
    }

    public function messages()
    {
        return [
            'eng_name.required' => 'The field is required.',
            'bng_name.required' => 'The field is required.',
            'email.required' => 'The field is required.',
            'mobile.required' => 'The field is required.',
            'title.required' => 'The field is required.',
            'subtitle.required' => 'The field is required.',
            'footer_one.required' => 'The field is required.',
            'footer_two.required' => 'The field is required.',
            'image_one.required' => 'The field is required.',
            'image_two.required' => 'The field is required.'
        ];
    }

    protected function failedValidation(Validator $validator)
    {

        // Customize the response for validation errors
        $response = response()->json([
            'errors' => $validator->errors(),
            'message' => 'Validation failed'
        ], 422);

        throw new HttpResponseException($response);
    }
}
