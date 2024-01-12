<x-layout>

    <x-slot:title>
        Users
    </x-slot:title>

    <div class="shadow mt-3">
        <table class="table table-light text-dark">
            <thead>
            <tr>
                <th><strong>ID</strong></th>
                <th><strong>Login</strong></th>
                <th><strong>Role</strong></th>
                <th><strong>Passport</strong></th>
                <th><strong>Fillial</strong></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user=>$value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->login }}</td>
                    <td>{{ $role->id === $value->role_id ? $role->type : "" }}</td>
                    <td>{{ $passports->find($value->pasport_id)->pnfl }}</td>
                    <td>{{ $fillials->find($value->fillial_id)->name_uz }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>


    </div>

</x-layout>
