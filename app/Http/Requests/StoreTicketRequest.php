<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:255'],
            'created_by' => ['required', 'integer'],
            'assigned_to' => ['required', 'integer'],
            'title' => ['required', 'max:255'],
            'status' => ['required', 'max:255'],
        ];
    }
}
