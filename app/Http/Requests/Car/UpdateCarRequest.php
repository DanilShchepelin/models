<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'model' => ['string', 'min:3', 'max:60'],
            'number' => ['min:8', 'max:9', 'string'],
            'color_id' => ['integer', 'exists:App\Models\Color,id'],
            'comment' => ['string', 'min:1', 'max:255']
        ];
    }
}
