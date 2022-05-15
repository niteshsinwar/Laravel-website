@extends('layouts.userLayout')

@section('content')
    <div class="text-blueGray-700">
        <div class="container items-center shadowdark:bg-gray-800 px-7 py-20 lg:px-10">
            <div class="flex flex-col w-full max-w-md p-6 mx-auto my-1 bg-white rounded-lg md:mt-0">
                <div class="self-center -mb-4 text-xl font-light text-gray-600 sm:text-2xl dark:text-black font-bold">
                    Welcome Back
                </div>
                <div class="mt-8">
                    <div class="mt-6">
                        <form method="POST" action="{{ route('login') }}" class="space-y-5">
                            @csrf
                            <div>
                                <label for="email" class="block text-sm font-medium text-neutral-600">{{ __('Email Address') }}</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="block w-full px-4 py-1 text-base text-neutral-600 placeholder-gray-300 border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 @error('email') is-invalid @enderror" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="space-y-1">
                                <label for="password" class="block text-sm font-medium text-neutral-600">{{ __('Password') }}</label>
                                <div class="mt-1">
                                    <input id="password" name="password" type="password" required autocomplete="current-password" class="block w-full px-4 py-1 text-base text-neutral-600 placeholder-gray-300 border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 @error('password') is-invalid @enderror" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center">
                                    <input name="remember" id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }} class="w-4 h-4 text-blue-600 border-gray-200 rounded focus:ring-blue-500" />
                                    <label for="remember" class="block ml-2 text-sm text-neutral-600">{{ __('Remember Me') }}</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <div class="text-sm">
                                        <!-- <a href="{{ route('password.request') }}" class="font-medium text-blue-600 hover:text-blue-500">{{ __('Forgot Your Password?') }}</a> -->
                                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500">{{ __('Forgot Your Password?') }}</a>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <button type="submit" class="py-2 px-4 bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">{{ __('Login') }}</button>
                            </div>
                        </form>
                        <!-- <div class="relative my-4">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300" />
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 text-neutral-600 bg-white"> Or continue with </span>
                            </div>
                        </div> -->
                        <!-- <div>
                            <button type="submit" class=" w-full items-center block px-10 py-1 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                <div class="flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48">
                                        <defs>
                                            <path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                                        </defs>
                                        <clipPath id="b">
                                            <use xlinkHref="#a" overflow="visible" />
                                        </clipPath>
                                        <path clipPath="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
                                        <path clipPath="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z" />
                                        <path clipPath="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z" />
                                        <path clipPath="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z" />
                                    </svg>
                                    <span class="ml-4"> Log in with Google</span>
                                </div>
                            </button>
                        </div> -->
                        <div class="flex items-center justify-center mt-6">
                            <a class="inline-flex items-center text-xs font-thin text-center text-gray-500 hover:text-black dark:text-black dark:hover:text-black">
                                <span class="ml-2">
                                    Don't have an account?
                                    <a href="/user/register" class="text-sm text-blue-500 underline hover:text-blue-700 ml-2">
                                        Register
                                    </a>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
