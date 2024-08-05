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
        <h1>Saisir les scores</h1>
    </div>
       
      <div id="nav">
     
              
              <a href="{{route('liste_candidat')}}">Liste des candidats</a>
              <a href="{{route('liste_score')}}">liste score</a>
              <a href="{{route('saisie-candidats')}}">Ajouter des candidats</a>
              <a href="{{route('saisie-score')}}">Saisir score</a>
              <a href="{{route('resultats')}}">Resultats</a>

       
      </div>

      <div id="nave">
          <h4>les entités administratives</h4>

           <p> <a href="{{ route('buraux-de-vote') }}">Voir les Bureaux de Vote</a></p>
           <p><a href="{{ route('centres-de-vote') }}">Voir les Centres de Vote</a></p>
           <p><a href="{{ route('commune') }}">Voir les Communes</a></p>
           <p><a href="{{ route('departement') }}">Voir les Departements</a></p>
           <p><a href="{{ route('region') }}">Voir les Regions</a></p>


       </div>


     
      <div id="main">
      <h4>veuillez remplire le formulaire</h4>
          
      <form action="{{route('sauvegarder-score')}}" method="post"> 
         @csrf

                <input type="text" name="candidat_id" id="candidat_id" placeholder="veuilllez saisir nom du candidat:" required><br><br>
                <input type="number" name="vote_id" id="vote_id" value="vote_id" placeholder="veuilllez saisir le nombre de votant:" required><br><br>
                <input type="number" name="bureau_vote_id" id="bureau_vote_id" placeholder="veuilllez saisir le numero du bureau de vote:" required><br><br>
                <input type="text" name="centre_vote_id" id="" placeholder="veuilllez saisir le centre de vote:" required><br><br>
                <input type="text" name="commune_id" id="" placeholder="veuilllez saisir la commune:" required><br><br>
                <input type="text" name="departement_id" id="" placeholder="veuilllez saisir le departement:" required><br><br>
                <input type="text" name="region_id" id="" placeholder="veuilllez saisir la region" required><br><br>
                <button>ENREGISTRER LE SCORE</button>
      </form>        
     </div>
 
</body>
</html>


