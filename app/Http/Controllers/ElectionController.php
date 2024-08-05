<?php

namespace App\Http\Controllers;

use App\Models\BureauVote;
use App\Models\Candidat;
use App\Models\NbreVoix;
use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\CentreVote;
use App\Models\Region;
use App\Models\Commune;
use App\Models\Departement;

class ElectionController extends Controller
{ 
    // Autres méthodes du contrôleur...
    
    public function enregistrerCandidat()
    { 
        
        return view('saisie-candidats');
    }

    public function enregistrerScore()
    { 
        
        return view('saisie-score');
    }
        
    public function store(Request $request)
    {
        $candidat = new Candidat();
        $candidat->nom = $request->nom;
        $candidat->parti_politique = $request->parti_politique;

        $candidat-> save();

          return redirect()->route('liste_candidat');
         
    }
    public function stor(Request $request)
    {
        $nbre_voix = new NbreVoix();
        $nbre_voix->candidat_id = $request->candidat_id;
        $nbre_voix->vote_id = $request->vote_id;
        $nbre_voix->bureau_vote_id = $request->bureau_vote_id;
        $nbre_voix->centre_vote_id = $request->centre_vote_id;
        $nbre_voix->commune_id = $request->commune_id;
        $nbre_voix->departement_id = $request->departement_id;
        $nbre_voix->region_id = $request->region_id;

        $nbre_voix-> save();

          return redirect()->route('liste_score');
         
    }

    public function liste()
    {
       $candidat = Candidat::all();
      // return view('liste_candidat');
      
       // dd($candidat);
       return view('liste_candidat',compact('candidat'));

    }
    
    public function list()
    {
       $nbre_voix = NbreVoix::all();
      // return view('liste_candidat');
      
       // dd($candidat);
       return view('liste_score',compact('nbre_voix'));

    }
    public function bureau()
    {
       $bureau_vote = BureauVote::all();
    
       return view('buraux-de-vote',compact('bureau_vote'));

    }
    public function centre()
    {
       $centre_vote = CentreVote::all();
    
       return view('centres-de-vote',compact('centre_vote'));

    } 
    public function comm()
    {
       $commune = Commune::all();
    
       return view('commune',compact('commune'));

    }  
    public function depart()
    {
       $departement = Departement::all();
    
       return view('departement',compact('departement'));

    }  
    public function reg()
    {
       $region = Region::all();
    
       return view('region',compact('region'));

    }  
   public function calculResultats()
   {
      // Récupérez les résultats de la base de données
      $resultats = NbreVoix::all();
      $candidat = NbreVoix::all();
        
      $sortedCandidates = $candidat->sortByDesc('vote_id');

      // Calculez le total des votes
      $totalVotes = $resultats->sum('vote_id');
      // Vérifiez si l'un des candidats a obtenu plus de 50% des suffrages
      $gagnantPremierTour = $resultats->max('vote_id');
      $vainceur= $sortedCandidates->first();
      
      if ($gagnantPremierTour > 0.5 * $totalVotes) {
          // Si oui, un candidat est élu dès le premier tour
         // return "Un candidat a remporté plus de 50% des suffrages. Il est élu dès le premier tour.";
          return "Le candidat, gagnant a obtenu " .$gagnantPremierTour. " voix soit plus de 50% des votes, élu dès le premier tour.<br>" .$vainceur;
         }
  
       // sinon determiner les deux candidats pour second tour
       $firstCandidate = $sortedCandidates->first();
       $secondCandidate = $sortedCandidates->skip(1)->first();

       // Déterminer si un candidat est en ballottage favorable, défavorable ou battu
       $leadingCandidate = $sortedCandidates->first();
       $isLeading = $leadingCandidate->sum('vote_id') / $totalVotes > 0.5;

       if ($isLeading) {
         $result = "LE CANDIDAT " . $leadingCandidate. " EST EN BALLOTAGE FAVORABLE.";
     } else {
         $result = "LE CANDIDAT " . $leadingCandidate . " EST EN BALLOTAGE DeFAVORABLE.";
     }
  
       // Rediriger vers la page des résultats avec les candidats du second tour et le statut du candidat en tête
      // return view('results.index', compact('firstCandidate', 'secondCandidate', 'result'));
      return $firstCandidate ."<br><br>" . $secondCandidate . "<br><br>". $result;
   }

     
   public function expire()
    {
    
       return view('message-expire');

    } 
  
}


