@extends('layout.mainlayout')

@section('content')

<section class="content-header">
    <h1> SAVOURER <small>/ Détail</small> </h1>
</section>
      
<section class="content container-fluid">
    <div className="row">
        <section class="content">
                      
            <div class="row">
                <div class="col-md-8">
                    <div class="box box-info">
                        <div class="box box-solid">
                                <div class="box-body">
                                  <dl>
                                    <dt>Libellé:</dt>
                                    <dd>{{ $resultat->title}}</dd>
                                    <dt>Téléphone:</dt>
                                    <dd>{{ $resultat->telephone}}</dd>
                                    <dt>Email:</dt>
                                    <dd>{{ $resultat->email}}</dd>
                                    <dt>Adresse:</dt>
                                    <dd>{{ $resultat->adresse}}</dd>
                                    <dt>Site web:</dt>
                                    <dd>{{ $resultat->siteweb}}</dd>
                                    <dt>Catégorie:</dt>
                                    <dd>{{ $resultat->categorie}}</dd>
                                    <dt>Coordonnées:</dt>
                                    <dd>{{ $resultat->latitude}},{{ $resultat->longitude}} </dd>
                                  </dl>
                                </div>
                              </div>
                    </div>
                </div>        
            </div>
            <a href="../savourer" class="btn btn-primary btn-xs ajouterContenu">Retour</a> 
        </section>
    </div>

</section>
      
@endsection
