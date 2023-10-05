<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class RegisterRequest extends FormRequest
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
        
        Log::info($this->all());
        return [
            'rut' => 'required|string|max:10',
            'nombre' => 'required|string|max:20',
            'apellido' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|max:100',
        ];
    }
}
