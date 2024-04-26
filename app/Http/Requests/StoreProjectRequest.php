<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            
            "name"=> "unique:projects,name|max:255|required",
            "argument"=> "required",
            "cover_image"=> "file|size:2048|nullable",
        ];
    }

    public function messages(): array{

        return [
            
            "name:unique"=> "È già presente un progetto con questo nome",
            "name.max"=> "Il nome non può essere più lungo di :max carratteri",
            "name.required"=> "Il nome del progetto deve essere inserito",
            "argument.required"=> "L'argomento del progetto deve essere inserito", 
            "cover_image"=> "",

        ];
    }
}
