@component('mail::message')
    {{ $data['data']->name }}
    /
    {{ trans('admin.welcome_user_text') }}
    @component('mail::button', ['url' => route('admin.postforgetPassword') . '/' . $data['token']])
        {{ trans('admin.click_here_to_reset_password') }}
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
