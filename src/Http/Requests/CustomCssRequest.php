<?php

namespace Grilar\Theme\Http\Requests;

use Grilar\Support\Http\Requests\Request;

class CustomCssRequest extends Request
{
    public function rules(): array
    {
        return [
            'custom_css' => 'nullable|string',
        ];
    }
}
