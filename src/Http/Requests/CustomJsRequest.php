<?php

namespace Grilar\Theme\Http\Requests;

use Grilar\Support\Http\Requests\Request;

class CustomJsRequest extends Request
{
    public function rules(): array
    {
        return [
            'header_js' => 'nullable|string|max:2500',
            'body_js' => 'nullable|string|max:2500',
            'footer_js' => 'nullable|string|max:2500',
        ];
    }
}
