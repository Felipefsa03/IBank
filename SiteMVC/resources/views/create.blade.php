<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('user.store') }}"  method="post">
        @csrf
        <label>
            Nome:
            <input type="text" name="name" id="">
        </label>
        <label>
            Email:
            <input type="email" name="email" id="">
        </label>
        <label>
            Senha:
            <input type="Password" name="senha" id="">
        </label>
        <label>
            CPF:
            <input type="text" name="cpf">
        </label>
        <label>
            Telefone:
            <input type="text" name="telefone" id="">
        </label>
    <input type="submit" value="Registrar">
    </form>
</body>
</html>