<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h1>MODIFIER UN ETUDIANT</h1>
        <hr>

    <a class="btn btn-primary" href="/ajouter">Ajouter un étudiant</a>
    <hr>

    @if(session('status'))
       <div class="alert alert-success">
          {{ session('status') }}
       </div>

    

    @endif

    <ul>

        @foreach ($errors->all() as $error)
         <li class="alert alert-danger">
            {{ $error }}
         </li>
        
        @endforeach

    </ul>
    


    <form action="update/traitement" method="post">
        @csrf

        <input type="text" name="id" style="display:none;" value="{{ $etudiants->id }}">
      
    <div class="form-group">
        <label for="nom">Nom</label>
           <input type="text" id="nom" name="nom" class="form-control" value="{{ $etudiants->nom }}" placeholder="Nom">
    </div>
     <br>
    <div class="form-group">
        <label for="postnom">Prenom</label>
           <input type="text" id="prenom" value="{{ $etudiants->prenom }}" name="prenom" class="form-control" placeholder="Prenom">
    </div>
    <br>
    <div class="form-group">
        <label for="prenom">Classe</label>
           <input type="text" id="classe" name="classe" value="{{ $etudiants->classe }}" class="form-control" placeholder="Classe">
    </div>
    
    {{-- <div class="form-group">
        <label for="classe">Classe</label>
            <select id="classe" class="form-select">
                <option>Classe 1</option>
            </select>
        </div> --}}
    
       <br><br>
        <button type="submit" class="btn btn-primary">Modifier un étudiant</button>
        <br><br>
        <a href="/etudiant" class="btn btn-danger">Revenir à la liste des étudiants</a>
              
        </form>
        </div>

      </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>