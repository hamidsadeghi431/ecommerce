{{--<x-guest-layout>--}}
{{--    <x-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-validation-errors class="mb-4" />--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="flex items-center">--}}
{{--                    <x-checkbox id="remember_me" name="remember" />--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-authentication-card>--}}
{{--</x-guest-layout>--}}


<x-guest-layout>
<!-- login section start -->
    <section class="form-section px-15 top-space section-b-space">

        <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
            <i class="iconly-Danger icli"></i>
            <div>
                <x-validation-errors class="mb-4" />
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <h1>مشتری عزیز سلام, <br>اکنون وارد شوید</h1>
    <form name="frm-login" method="POST" action="{{route('login')}}" >
        @csrf
        <div class="form-floating mb-4">
            <input name="login" type="login" class="form-control" id="one" placeholder="نام کاربری یا ایمیل" :value="old('login')" required autofocus>
            <label for="one">نام کاربری یا ایمیل</label>
        </div>
        <div class="form-floating mb-2">
            <input name="password" type="password" class="form-control" id="two" placeholder="رمز عبور" required autocomplete="current-password">
            <label for="two">رمز عبور</label>
        </div>
        <div class="text-end mb-4">
            <a href="{{route('password.request')}}" class="theme-color">رمز عبور را فراموش کرده اید؟</a>
        </div>
        <input name="submit" value="وارد شوید" type="submit" class="btn btn-solid w-100">
    </form>
    <div class="or-divider">
        <span>یا وارد شوید</span>
    </div>
    <div class="social-auth">
        <ul>
            <li>
                <a href="#"><img src="{{asset('assets/images/social/google.png')}}" class="img-fluid" alt=""></a>
            </li>
            <li>
                <a href="#"><img src="{{asset('assets/images/social/fb.png')}}" class="img-fluid" alt=""></a>
            </li>
            <li>
                <a href="#"><img src="{{asset('assets/images/social/apple.png')}}" class="img-fluid" alt=""></a>
            </li>
        </ul>
    </div>
    <div class="bottom-detail text-center mt-3">
        <h4 class="content-color"><a class="title-color text-decoration-underline" href="{{route('register')}}">ثبت نام </a></h4>
    </div>
</section>
<!-- login section end -->
</x-guest-layout>
