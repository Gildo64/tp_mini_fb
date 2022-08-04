<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/mdp_oublie.css')}}">
    <title>Mot de passe oublié</title>
</head>
<body>
    
<form class="formulaire" method="POST" action="{{ route('password.email') }}">
    @csrf
            <div class="champ_1">
                <label for="email">E-mail</label>
                <input type="email" name="email">
            </div>    
            <div class="buton">
                <button type="submit">Envoyé</button>
            </div>
    
</form>
</body>
</html>