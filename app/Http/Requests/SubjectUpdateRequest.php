<?php

namespace App\Http\Requests;

use App\Models\School_info;
use App\Models\Subject;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SubjectUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

        // Rule::unique('subjects')->ignore($this->route('subject'))]

        $administratorId = Auth::user()->id;

        $schoolName = School_info::where('coordinatorId', $administratorId)->value('schName');

        return [
            'subTitle' => ['required','max:255'],
            'subCode' => ['required','max:255'],
            'subUnits' => ['required','numeric','digits_between:1,2'],
            'subField' => 'required|max:255',
        ];
    }
}
