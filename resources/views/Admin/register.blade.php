<x-admin>
    <form action="{{ route('auth.create') }}" method="post" class="login100-form validate-form">
        @csrf
        <span class="login100-form-title p-b-43">
            Register to continue
        </span>

        <select name="fillial_id" class="wrap-input100 validate-input form-control mb-3" >
            <option disabled selected value="0" >Fillials</option>
            @foreach($fillials as $fillial)
                <option value="{{ $fillial->id }}" class="input100">{{ $fillial->name_uz }}</option>
            @endforeach
        </select>

        <select name="role_id" class="wrap-input100 validate-input form-control mb-3" >
            <option disabled selected >Role</option>
            @foreach($roles as $role)
                <option value="{{$role->id}}" class="input100">{{ $role->type }}</option>
            @endforeach
        </select>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="login">
            <input  type="hidden" name="passport_id" value="{{ $passport_id }}">
            <span class="focus-input100"></span>
            <span class="label-input100">Login</span>
        </div>


        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
        </div>





        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Login
            </button>
        </div>

        <div class="text-center p-t-46 p-b-20">
                <span class="txt2">
                    or sign up using
                </span>
        </div>

        <div class="login100-form-social flex-c-m">
            <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                <i class="fa fa-facebook-f" aria-hidden="true"></i>
            </a>

            <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
        </div>
    </form>
</x-admin>
