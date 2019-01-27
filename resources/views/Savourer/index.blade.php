@extends('layout.mainlayout')

@section('content')

<section class="content-header">
    <h1> SAVOURER <small>Listes des adresses</small> </h1>
</section>

      
<section class="content container-fluid">
    @if ($message = Session::get('success'))
        <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ $message }}
        </div>
    @endif  
    <div className="row">
        <div className="col-xs-12">
            <a href="savourer/create" class="btn btn-primary btn-xs ajouterContenu">+ Ajouter une adresse</a> 
            <br><br>
        <div class="box">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Libelle</th>
                      <th>Adresse</th>
                      <th>Telephone</th>
                      <th>Categorie</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach ($resultats as $resultat)
                    <tr>
                      <td>{{ $resultat->title }}</td>
                      <td>{{ $resultat->adresse }}</td>
                      <td>{{ $resultat->telephone }}</td>
                      <td>{{ $resultat->categorie }}</td>
                      <td>
                        <center>
                          <form action="{{ route('savourer.destroy',$resultat->id) }}" method="POST">
                              <a class="btn btn-info btn-xs" href="{{ route('savourer.show',$resultat->id) }}">Details</a>
                              <a class="btn btn-primary btn-xs" href="{{ route('savourer.edit',$resultat->id) }}">Modifier</a>
          
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-xs">Supprimer</button> 
                          </form>
                        </center>
                      </td>
                    </tr>
                @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Libelle</th>
                        <th>Adresse</th>
                        <th>Telephone</th>
                        <th>Categorie</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
        </div>

        </div>
    </div>
</section>
      
@endsection
