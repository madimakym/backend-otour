@extends('layout.mainlayout')

@section('content')

<section class="content-header">
    <h1> SAVOURER <small>Ajouter une adresse</small> </h1>
</section>
      
<section class="content container-fluid">
    <div className="row">
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                @foreach ($errors->all() as $error)
                        {{ $error }}
                @endforeach
            </div>
        @endif

        <section class="content">
            <form action="{{ route('savourer.store') }}" method="POST">
                @csrf
                      
            <div class="row">
              <div class="col-md-8">
                <div class="box box-info">
                              <div class="box-body">
                                <div class="form-group">
                                  <label>Libelle:</label>
                                  <input type="text" name="libelle" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Description:</label>
                                    <textarea class="form-control" name="description"> </textarea>
                                </div>

                                <div class="form-group">
                                        <label>Adresse:</label>
                                        <input type="text" name="adresse" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Téléphone:</label>
                                    <input type="text" name="telephone" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="text" name="email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Site web:</label>
                                    <input type="text" name="siteweb" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>Latitude:</label>
                                    <input type="text" name="latitude" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Longitude:</label>
                                    <input type="text" name="longitude" class="form-control">
                                </div>

                              </div>
                            </div>
                          </div>        

                          <div class="col-md-4">
                            <div class="box box-success">
                              <div class="box-header">
                                <h3 class="box-title">Catégories</h3>
                              </div>
                              <div class="box-body">
                                <div class="form-group">
                                    <input type="checkbox" name="categorie[]" class="minimal" value="restaurant">
                                    <label>Restaurant</label>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" name="categorie[]" class="minimal" value="salon de the">
                                    <label>Salon de thé</label>
                                </div>

                                <div class="form-group">
                                   <input type="checkbox" name="categorie[]" class="minimal" value="boulangerie">
                                    <label>Boulangerie</label>
                                 </div>

                                 <div class="form-group">
                                    <input type="checkbox" name="categorie[]" class="minimal" value="fast-food">
                                     <label>Fast-food</label>
                                </div>

                              </div>
                            </div>
                            <!-- /.box -->
                          </div>
                        </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button> 
            </form>
        </section>
    </div>

</section>
      
@endsection
