<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Teste</title>
</head>

<body>
    <h3>Cadastro Teste</h3>
    <form action={{route ('noticias.teste')}} method="post"></form>
    @csrf
    <input type="text" name="name" placeholder="Nome">
    <input type="text" name="description" placeholder="Descrição">
    <button type="submit">Enviar</button>
    
</body>
</html>