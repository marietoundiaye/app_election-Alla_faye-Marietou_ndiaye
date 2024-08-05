<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    
       <div id="header"><h3>App_Election</h3>
              <h1>Veuillez saisir le nom des candidats</h1></div>
 
       <div id="nav">
            
              <a href="{{route('liste_candidat')}}">Liste des candidats</a>
              <a href="{{route('liste_score')}}">liste score</a>
              <a href="{{route('saisie-candidats')}}">Ajouter des candidats</a>
              <a href="{{route('saisie-score')}}">Saisir score</a>
              <a href="{{route('resultats')}}">Resultats</a>


       </div>
       <div id="nave">
          <h4>les entités administratives</h4>

               <!-- Ajoutez une navigation vers les entités administratives si nécessaire -->
              <p> <a href="{{ route('buraux-de-vote') }}">Voir les Bureaux de Vote</a></p>
              <p><a href="{{ route('centres-de-vote') }}">Voir les Centres de Vote</a></p>
              <p><a href="{{ route('commune') }}">Voir les Communes</a></p>
              <p><a href="{{ route('departement') }}">Voir les Departements</a></p>
              <p><a href="{{ route('region') }}">Voir les Regions</a></p>




       </div>



       <div id="main">
       <h4>veuillez saisir les candidats</h4>
            <form action="{{route('sauvegarder-candidat')}}" method="post">     
              
             @csrf
            
                <input type="text" name="nom" id="" placeholder="veuilllez saisir nom du candidat:"><br><br>
                <input type="text" name="parti_politique" id="" placeholder="veuilllez saisir le parti du candidat"><br><br>
                <center><button>AJOUTER UN CANDIDAT</button></center>
          
      
     </div>
</body>
</html>

<style>

     