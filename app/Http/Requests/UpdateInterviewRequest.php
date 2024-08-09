<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInterviewRequest extends FormRequest
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
            'company_id' => ['integer', 'exists:companies,id'],
            'offer_id' => ['integer', 'exists:offers,id'],
            'employee_id' => ['integer', 'exists:employees,id'],
            'date' => ['date'],
            'notes' => ['string'],
        ];
    }
}
