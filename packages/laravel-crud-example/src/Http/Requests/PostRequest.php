<?php

namespace Hamidreza\LaravelCrudExample\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PostRequest extends FormRequest
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
    public function rules(Request $request, Route $route)
    {
        $rules = [];

        switch ($route->getActionMethod()) {
            case 'store':
            {
                $rules =
                    [
                        'title' => 'required',
                        'content' => 'required',
                    ];
                break;
            }

            case 'update':
            {
                $rules =
                    [
                        'title' => 'required',
                        'content' => 'required',
                    ];
                break;
            }
        }
        return $rules;
    }


    public function messages()
    {
        return
            [
                'title.required' => 'لطفا عنوان خود را وارد نمایید.',
                'content.required' => 'لطفا محتوای خود را وارد نمایید.',
            ];
    }
}
