<?php

namespace Grilar\Theme\Http\Requests;

use Grilar\Support\Http\Requests\Request;

class CustomHtmlRequest extends Request
{
    public function rules(): array
    {
        return [
            'header_html' => 'nullable|string|max:2500',
            'body_html' => 'nullable|string|max:2500',
            'footer_html' => 'nullable|string|max:2500',
        ];
    }
}
