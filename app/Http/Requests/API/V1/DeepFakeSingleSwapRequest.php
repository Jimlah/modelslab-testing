<?php

namespace App\Http\Requests\API\V1;

use App\Rules\ValidateImageUrlRule;
use Illuminate\Foundation\Http\FormRequest;

class DeepFakeSingleSwapRequest extends FormRequest
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
            'init_image' => ['required', 'url'],
            'target_image' => ['required', 'url'],
            'source_image' => ['required_unless:init_image,null', 'url'],
            'watermark' => 'nullable|boolean',
            'webhook' => 'nullable|url',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'source_image' => $this->input('init_image'),
        ]);
    }
}
