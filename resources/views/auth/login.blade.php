<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/connexions.css')}}">
    <title>Formulaire</title>
</head>

<body>
    <div class="box">

        <form class="formBloc" method="post" action="{{ route('login') }}">
            @csrf
            <h3><strong>Identifiez</strong>-vous</h3>

            <div class="formGroupe">
                <label for="utilisateur">E-mail</label>
                <input name="email" type="text" id="utilisateur">
            </div>

            <div class="formGroupe">
                <label for="mdp">Motde passe</label>
                <input name="password" type="password" id="mdp" required maxlength="16">
            </div>

            <div class="formGroupe">
            <button type="submit" class="buttonSub">CONNEXION</button>

</div>

            <div class="mdpPerdu">
                <a href="forgot-password">Mot de passe perdu ?</a>
                <a id="inscrit" href="{{ route('register') }}">S'nscrire ?</a>
            </div>
            
        </form>

    </div>
    <script src="{{asset('css/connexions.css')}}"></script>

</body>

</html>