<x-mail::message>
# Verify Your Account

Welcome to {{ config('app.name') }}!

To complete your registration, please verify your account by entering the code below on the verification page.

## Your Verification Code
**{{ $data['code'] }}**

<x-mail::button :url="route('verification.page')">
Go to Verification Page
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
