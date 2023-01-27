<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'model' => ['required', 'min:3', 'max:60', 'string'],
            'number' => ['required', 'min:8', 'max:9', 'string'],
            'color_id' => ['required', 'integer', 'exists:App\Models\Color,id'],
            'comment' => ['string', 'min:1', 'max:255']
        ];
    }
}
