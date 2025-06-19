<x-layout-simple :title="$pageTitle">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company"/>
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/register" method="POST">
                @csrf

                <div>
                    <label for="name" class="block text-sm/6 font-medium text-gray-900">Full Name</label>
                    <div class="mt-2">
                        <input type="text" name="name" id="name" autocomplete="name" required value="{{ old('name') }}"
                               class="{{ $errors->has('name') ? 'border-red-600' : '' }} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:border-2 focus:-border-offset-2 focus:border-indigo-600 sm:text-sm/6"/>
                    </div>

                    @error('name')
                    <p class="mt-2 text-sm/6 text-red-600" id="email-error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" autocomplete="email" required value="{{ old('email') }}"
                               class="{{ $errors->has('email') ? 'border-red-600' : '' }} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:border-2 focus:-border-offset-2 focus:border-indigo-600 sm:text-sm/6"/>
                    </div>

                    @error('email')
                    <p class="mt-2 text-sm/6 text-red-600" id="email-error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                    <div class="mt-2">
                        <input type="password" name="password" id="password" autocomplete="current-password" required
                               class="{{ $errors->has('password') ? 'border-red-600' : '' }} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:border-2 focus:-border-offset-2 focus:border-indigo-600 sm:text-sm/6"/>
                    </div>

                    @error('password')
                    <p class="mt-2 text-sm/6 text-red-600" id="email-error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm/6 font-medium text-gray-900">Confirm Password</label>
                    <div class="mt-2">
                        <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="current-password" required
                               class="{{ $errors->has('password_confirmation') ? 'border-red-600' : '' }} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:border-2 focus:-border-offset-2 focus:border-indigo-600 sm:text-sm/6"/>
                    </div>

                    @error('password_confirmation')
                    <p class="mt-2 text-sm/6 text-red-600" id="email-error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:border-2 focus-visible:border-offset-2 focus-visible:border-indigo-600">
                        Create Account
                    </button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-500">
                Have an account?
                <a href="/login" class="font-semibold text-indigo-600 hover:text-indigo-500">Login</a>
            </p>
        </div>
    </div>

</x-layout-simple>
