<x-layout>

    <x-slot:title>
        Admins
    </x-slot:title>

    <div class="shadow mt-3">
        <div class>
            <a href="{{ route('auth.passport') }}" class="btn btn-dark pt-2 float-right mb-3 ">Create Admin</a>
        </div>
        <table class="table table-striped table-bordered text-dark">
            <thead>
            <tr>
                <th><strong>ID</strong></th>
                <th><strong>Login</strong></th>
                <th><strong>Role</strong></th>
                <th><strong>Passport</strong></th>
                <th><strong>Fillial</strong></th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user=>$value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->login }}</td>
                    <td>{{ $roles->find($value->role_id)->type }}</td>
                    <td>{{ $passports->find($value->pasport_id)->pnfl }}</td>
                    <td>{{ $fillials->find($value->fillial_id)->name_uz }}</td>
                    <td class="d-flex ">
                        <a href="{{ route('auth.edit', ['user'=>$value->id]) }}" class="btn btn-dark mr-2">Edit</a>
                        <form>
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $value->id }}">
                            <button type="submit" class="btn btn-dark">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>


    </div>


</x-layout>
