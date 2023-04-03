<?php

namespace App\Http\Requests\Application;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "user_name" => ['required', 'string', 'max:36'],
            "title" => ['required', 'string', 'max:50', 'min:3'],
            "description" => ['required', 'string', 'max:255', 'min:12'],
            "images" => ['nullable', 'array'],
            "user_id" => ['required', 'integer'],
        ];
    }
}
