{{--<x-guest-layout>--}}
{{--    <x-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-validation-errors class="mb-4" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-label for="name" value="{{ __('Name') }}" />--}}
{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--                <div class="mt-4">--}}
{{--                    <x-label for="terms">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <x-checkbox name="terms" id="terms" required />--}}

{{--                            <div class="ml-2">--}}
{{--                                {!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
{{--                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',--}}
{{--                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',--}}
{{--                                ]) !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </x-label>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-authentication-card>--}}
{{--</x-guest-layout>--}}
<x-guest-layout>
    <section class="form-section px-15 top-space section-b-space">
        <h1>سلام، <br>ثبت نام کنید</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
            <div class="form-floating mb-4">
                <input name="name" :value="name" type="text" class="form-control" id="one" placeholder="نام" required autofocus autocomplete="name">
                <label for="one">نام</label>
            </div>
            <div class="form-floating mb-4">
                <input name="mobile" type="mobile" :value="mobile" class="form-control" id="two" placeholder="موبایل">
                <label for="two">موبایل</label>
            </div>
            <div class="form-floating mb-4">
                <input name="email" type="email" :value="email" class="form-control" id="two" placeholder="ایمیل">
                <label for="two">ایمیل</label>
            </div>
            <div class="form-floating mb-4">
                <input name="password" required autocomplete="new-password" type="password" id="txtPassword" class="form-control" placeholder="رمز عبور">
                <label>رمز عبور</label>
                <div id="btnToggle" class="password-hs">
                    <i id="eyeIcon" class="iconly-Hide icli hide"></i>
                </div>
            </div>
                    <div class="form-floating mb-4">
                        <input name="password_confirmation" required autocomplete="new-password" type="password" id="txtPassword" class="form-control" placeholder="رمز عبور">
                        <label>تکرار رمز عبور</label>
                        <div id="btnToggle" class="password-hs">
                            <i id="eyeIcon" class="iconly-Hide icli hide"></i>
                        </div>
                    </div>
            <input name="register" value="ثبت نام" type="submit" class="btn btn-solid w-100">
        </form>
        <div class="or-divider">
            <span>یا ورود توسط</span>
        </div>
        <div class="social-auth">
            <ul>
                <li>
                    <a href="#"><img src="assets/images/social/google.png" class="img-fluid" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="assets/images/social/fb.png" class="img-fluid" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="assets/images/social/apple.png" class="img-fluid" alt=""></a>
                </li>
            </ul>
        </div>
        <div class="bottom-detail text-center mt-3">
            <h4 class="content-color">حساب کاربری داری؟ <a class="title-color text-decoration-underline"
                                                           href="login.html">وارد شوید</a></h4>
        </div>
    </section>
</x-guest-layout>
