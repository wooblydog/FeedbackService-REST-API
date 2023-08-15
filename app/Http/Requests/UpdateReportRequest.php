<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateReportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'status' => ['required', Rule::in(['N', 'W', 'D'])],
                'comment' => ['required']
            ];
        } else {
            return [
                'status' => ['sometimes','required', Rule::in(['N', 'W', 'D'])],
                'comment' => ['required']
            ];
        }
    }
}
