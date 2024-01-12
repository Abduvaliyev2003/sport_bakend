<x-admin>
    <form action="{{ route('auth.update') }}" method="post" class="login100-form validate-form">
        @csrf
        @method('PUT')
        <span class="login100-form-title p-b-43">
            Change to continue
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
            <input class="input100" type="text" name="login" value="{{ $user->login }}">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password"  >
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Update
            </button>
        </div>
    </form>
</x-admin>

