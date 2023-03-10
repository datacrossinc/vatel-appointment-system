<?php

namespace App\Http\Requests;

use App\Models\Employee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_edit');
    }

    public function rules()
    {
        return [
            'names' => [
                'string',
                'required',
            ],
            'title' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
                'unique:employees,email,' . request()->route('employee')->id,
            ],
            'phone' => [
                'string',
                'required',
            ],
        ];
    }
}
