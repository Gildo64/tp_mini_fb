<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8" />
      <link rel="stylesheet" type="text/css" href="{{asset('css/inscription.css')}}" />
   </head>
   <body id="exercice1_body">
      <div id="exercice1_conteneur">
         <form class="form" name="inscription" method="POST" action="{{ route('register') }}">
         @csrf
            <fieldset class="exercice1_fieldset">
               <legend class="exercice1_legend">Inscription</legend>
               <div class="exercice1_label">
                  Pseudo
               </div>
               <div class="exercice1_input">
                  <input type="text" name="name" class="exercice1_champ" />
               </div><br />
               <div class="exercice1_label">
                  Email
               </div>
               <div class="exercice1_input">
                  <input type="email" name="email" class="exercice1_champ" required />
               </div><br />
               <div class="exercice1_label">
                  Mot de passe
               </div>
               <div class="exercice1_input">
                  <input type="password" name="password" class="exercice1_champ" required/>
               </div><br />
               <div class="exercice1_label">
                  Confirmer Mot de passe
               </div>
               <div class="exercice1_input">
                  <input type="password" name="password_confirmation" class="exercice1_champ" required/>
                  </div><br/>
               <div class="exercice1_label">
                  
               </div>
               <div class="exercice1_input">
                  <input type="submit" name="sinscrire" value="S'inscrire" class="exercice1_champ" required/>
               </div><br />
            </fieldset>
         </form>
      </div>
   </body>
</html>