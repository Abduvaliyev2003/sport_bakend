<form method="POST" >
    @csrf
    <input type="hidden" name="id" value="{{ $user[0]['id'] }}">
    <input type="text" name="password" placeholder="{{__('New Password')}}">
    <input type="text" name="password_confirmation" placeholder="{{__('Confirm Password')}}">
    <button type="submit">{{ __("Submit") }}</button>
</form>

