<x-admin>
    <form action="{{ route('auth.passport') }}" method="post" class="login100-form validate-form">
        @csrf
        <span class="login100-form-title p-b-43">
            Passport to continue
        </span>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="pnfl">
            <span class="focus-input100"></span>
            <span class="label-input100">PNFL</span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="pasport_seria">
            <span class="focus-input100"></span>
            <span class="label-input100">Passport Series  </span>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="pasport_seria_code">
            <span class="focus-input100"></span>
            <span class="label-input100">Passport Series Number </span>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Continue
            </button>
        </div>
    </form>
</x-admin>
