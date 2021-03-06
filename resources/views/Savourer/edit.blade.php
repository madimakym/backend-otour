@extends('layout.mainlayout')

@section('content')

<section class="content-header">
    <h1> SAVOURER <small>/ Editer une adresse</small> </h1>
</section>
      
<section class="content container-fluid">
    <div className="row">
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <section class="content">
            <form action="{{ route('savourer.update' , $resultat->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="row">
                <div class="col-md-8">
                    <div class="box box-info">
                        <div class="box-body">
                                <div class="form-group">
                                  <label>Libelle:</label>
                                  <input type="text" name="libelle" value="{{ $resultat->title }}" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>Description:</label>
                                    <textarea class="form-control" name="description"> {{ $resultat->description }} </textarea>
                                </div>

                                <div class="form-group">
                                        <label>Adresse:</label>
                                        <input type="text" name="adresse" class="form-control" value="{{ $resultat->adresse }}">
                                </div>

                                <div class="form-group">
                                    <label>Téléphone:</label>
                                    <input type="text" name="telephone" class="form-control" value="{{ $resultat->telephone }}">
                                </div>

                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="text" name="email" class="form-control" value="{{ $resultat->email }}">
                                </div>

                                <div class="form-group">
                                    <label>Site web:</label>
                                    <input type="text" name="siteweb" class="form-control" value="{{ $resultat->siteweb }}">
                                </div>
                                
                                <div class="form-group">
                                    <label>Latitude:</label>
                                    <input type="text" name="latitude" class="form-control" value="{{ $resultat->latitude }}">
                                </div>
                                <div class="form-group">
                                    <label>Longitude:</label>
                                    <input type="text" name="longitude" class="form-control" value="{{ $resultat->longitude }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <input type="file" id="exampleInputFile" name="image" value="">
                                    {{-- <p class="help-block">Example block-level help text here.</p> --}}
                                </div>
                                <input type="text" hidden name="old_image" value="{{$resultat->image}}">
                              </div>
                    </div> 
                </div>        

                <div class="col-md-4">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">Catégories</h3>
                                <br> <span>{{ $resultat->categorie }}</span>
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
                </div>

                <div class="col-md-4">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">Visuel</h3>
                        </div>
                        <br><img src="{{ url('storage/'.$resultat->image) }}" alt="" class="img-responsive img-center" width="100%" /> <br>
                    </div>
                </div>  
                <div class="col-md-4">
                    <button type="submit" class="btn btn-block btn-primary btn-sm">MODIFIER</button> 
                </div>       
            </div>
        </form>
    </section>
</div>

</section>
      
@endsection
