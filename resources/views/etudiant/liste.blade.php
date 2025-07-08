<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
      <div class="row">
        <div class="col s12">
          <h1>CRUD IN LARAVEL</h1>
        <hr>
    <a class="btn btn-primary" href="/ajouter">Ajouter un étudiant</a>
    <hr>
    @if(session('status'))
       <div class="alert alert-success">
          {{ session('status') }}
       </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Classe</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @php
            $ide = 1;

          @endphp
          @foreach ($etudiants as $etudiant )
          <tr>
            <th scope="row">{{ $ide }}</th>
            <td>{{ $etudiant->nom }}</td>
            <td>{{ $etudiant->prenom }}</td>
            <td>{{ $etudiant->classe }}</td>
             <td>
              <a href="/udate-etudiant/{{ $etudiant->id }}" class="btn btn-info">Update</a>
              <a href="/delete-etudiant/{{ $etudiant->id }}" class="btn btn-danger">Delete</a>
             </td>
          </tr>
          @php
            $ide += 1;
          @endphp 
           @endforeach
         
        </tbody>
</table>
  {{ $etudiants->links() }}

        </div>

      </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>