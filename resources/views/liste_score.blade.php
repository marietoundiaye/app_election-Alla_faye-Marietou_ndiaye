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
    <h1>La Liste Des Scores</h1></div>
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
       <h4>Table score</h4>
             <table border="1" >

              <tr>

                   <th>Candidat:</th> 
                   <th>Vote_Obtenu:</th>
                   <th>Bureau_Vote:</th> 
                   <th>Centre_Vote:</th>
                   <th>Commune:</th> 
                   <th>Departement:</th>
                   <th>Region:</th> 
     

              </tr>

          @foreach ($nbre_voix as $n)
            <tr>
            <td>{{ $n->candidat_id }}</td>
            <td>{{ $n->vote_id }}</td> 
            <td>{{ $n->bureau_vote_id }}</td>
            <td>{{ $n->centre_vote_id }}</td> 
            <td>{{ $n->commune_id }}</td>
            <td>{{ $n->departement_id }}</td> 
            <td>{{ $n->region_id }}</td>
      
            </tr>

            @endforeach
        </table>
        
       </div>


</body>
</html>