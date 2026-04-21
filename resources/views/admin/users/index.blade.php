<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('users.create') }}">Criar usuário</a>
    <h1>{{'Olá ' . $users->first()->name }}</h1>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Name</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>Ações</td>
                </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum usuário encontrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}
</body>
</html>