<div>
    <h1>Live filter user</h1>


    <form wire:submit.prevent='searching'>
        <input wire:model='name' type="search" name="name" id="" placeholder="Name">
        <input wire:model='email' type="search" name="email" id="" placeholder="email">
        <input type="submit" value="Search">
    </form>


    <h5>Search Result</h5>
    <table class="table table-bordered border-primary table-user">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>email verified at</th>
                <th>createdat</th>
                <th>update at</th>
            </tr>
        </thead>
        <tbody>
            @if (count($user) > 0)
                @foreach ($user as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->email_verified_at }}</td>
                        <td>{{ $item->create_at }}</td>
                        <td>{{ $item->update_at }}</td>
                    </tr>
                @endforeach
            @else
                    <p>Data  not found !!!</p>
            @endif
        </tbody>
    </table>
</div>
