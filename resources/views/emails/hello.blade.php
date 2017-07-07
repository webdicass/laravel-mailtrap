@component('mail::message')
# Introduction

This email was sent from Laravel.

@component('mail::button', ['url' => 'https://github.com/hudsonpereira'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
