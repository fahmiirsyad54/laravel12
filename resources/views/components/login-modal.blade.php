<div id="login-modal" tabindex="-1" aria-hidden="true"
    class="hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full h-full bg-black/50">

    <div class="relative bg-white rounded-lg shadow dark:bg-gray-800 w-full max-w-md p-6">

        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Login
            </h3>
            <button type="button" data-modal-hide="login-modal"
                class="text-gray-400 hover:text-gray-900">
                ✕
            </button>
        </div>

        @if ($errors->has('login_error'))
            <div class="mb-4 text-sm text-red-600">
                {{ $errors->first('login_error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.process') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1 text-sm text-gray-700 dark:text-gray-300">
                    Email
                </label>
                <input type="email" name="email"
                    class="w-full rounded-lg border border-gray-300 p-2.5 text-sm"
                    required>
            </div>

            <div>
                <label class="block mb-1 text-sm text-gray-700 dark:text-gray-300">
                    Password
                </label>
                <input type="password" name="password"
                    class="w-full rounded-lg border border-gray-300 p-2.5 text-sm"
                    required>
            </div>

            <button type="submit"
                class="w-full bg-indigo-600 text-white rounded-lg px-5 py-2.5 text-sm hover:bg-indigo-700">
                Login
            </button>
        </form>
    </div>
</div>
