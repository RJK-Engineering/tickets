<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTicketRequest extends FormRequest
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
            'createdBy' => ['required', 'integer'],
            'assignedTo' => ['required', 'integer'],
            'title' => ['required', 'max:255'],
            'status' => ['required', 'max:255'],
            'category_ids' => ['required'],
        ];
    }
}
