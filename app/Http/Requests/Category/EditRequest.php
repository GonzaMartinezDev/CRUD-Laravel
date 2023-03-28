<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class EditRequest extends FormRequest
{

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->title)
        ]);
    }

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
        return [
            'title' => 'required|min:5|max:500', 
            'slug' => 'required|min:5|max:500|unique:posts,slug,'.$this->route('post')->id,
        ];
    }
}
