<?php

namespace App\Http\Requests\API\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class AiAgentFetchRequest extends FormRequest
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
            'worker_id' => 'required|string|bail',
            'agents' => 'required|array|bail',
            'agents.*.role' => 'required|string',
            'agents.*.goal' => 'required|string',
            'agents.*.instruction' => 'required|string',
            'agents.*.agent_tasks' => 'required|array',
            'agents.*.agent_tasks.*.instruction' => 'required|string',
            'agents.*.agent_tasks.*.expected_output' => 'required|string',
            'agents.*.agent_tasks.*.tasks_tools' => 'required|array',
            'agents.*.agent_tasks.*.tasks_tools.*.type' => 'required|string',
            'agents.*.agent_tasks.*.tasks_tools.*.inputs' => 'required|string',
            'webhook' => 'string|nullable',
        ];
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'worker_id' => $this->request->get('worker_id', Str::uuid()),
        ]);
    }
}
