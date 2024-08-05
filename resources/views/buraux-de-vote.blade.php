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
        <h1>Bureaux de votes</h1>
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
             


       </div>
       <div id="main">
       <h4>Table bur_centre</h4>
             <table border="1" > 

              <tr>

                   <th>Bureau_Votes:</th> 
                   <th>Centre_Votes:</th>
                  
     

              </tr>

          @foreach ($bureau_vote as $b)
            <tr>
            <td>{{ $b->bureau_vote_id }}</td>
            <td>{{ $b->centre_vote_id }}</td> 
            
      
            </tr>

            @endforeach
        </table>
        
       </div>

               


</body>
</html>