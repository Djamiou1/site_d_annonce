@extends('welcome')

@section('content')
<br>
 <div class="container">
    <div class="row">
 
       
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <h4 style="color:silver;font-size:1.5rem"> Publier une annonce</h3>
        <hr>
            <form class="form-inline my-2" action="{{ route('ad.store') }}" method="POST" enctype="multipart/form-data" style="border-radius:15px;box-shadow:0 0 15px rgba(0,0,0,0.2);padding:15px">
                @csrf
                <div class="form-group my-2">
                    <label for="title" class="">Titre de l'annonce</label>
                    <input type="text" style="border-radius:15px;" class="form-control {{ $errors->has('title') ? 'is-invalid' :''}} " name="title">
                    @if($errors->has('title'))
                        <span class="invalid-feedback">{{  $errors->first('title') }}</span> 
                    @endif
                </div>
                <div class="form-group my-2">
                    <label for="image" class="">Image de l'annonce</label>
                    <input type="file" style="border-radius:15px;border:1px solid silver;width:px;padding:6px;" class="form-control {{ $errors->has('image') ? 'is-invalid' :''}} " name="image">
                    @if($errors->has('image'))
                        <span class="invalid-feedback">{{  $errors->first('image') }}</span> 
                    @endif
                </div>
                <div class="form-group my-2">
                  <label for="description" class="">Description de l'annonce</label>
                  <textarea type="text" style="border-radius:15px;" class="form-control {{ $errors->has('description') ? 'is-invalid' :''}} " cols="30" rows="6" name="description" ></textarea>
                  @if($errors->has('description'))
                        <span class="invalid-feedback">{{  $errors->first('description') }}</span> 
                  @endif
                </div>
                <div class="form-group my-2">
                  <label for="localisation" class="">Localisation</label>
                  <input type="text" style="border-radius:15px;" class="form-control {{ $errors->has('localisation') ? 'is-invalid' :''}} " name="localisation" >
                  @if($errors->has('localisation'))
                        <span class="invalid-feedback">{{  $errors->first('localisation') }}</span>  
                  @endif
                </div>
                <div class="form-group my-2">
                  <label for="price" class="">Prix</label>
                  <input type="number" style="border-radius:15px;" class="form-control {{ $errors->has('price') ? 'is-invalid' :''}} " name="price" >
                  @if($errors->has('price'))
                        <span class="invalid-feedback">{{  $errors->first('price') }}</span> 
                  @endif
                </div>

                  @guest
                    <hr>
                    <h2 style="color:silver">Vos informations</h2>
                    <hr>
                    <div class="form-group">
                      <label for="name" class="">Votre Nom</label>
                      <input type="text" style="border-radius:15px;" class="form-control {{ $errors->has('name') ? 'is-invalid' :''}} " name="name" >
                      @if($errors->has('name'))
                            <span class="invalid-feedback">{{  $errors->first('name') }}</span> 
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="email" class="">Votre email</label>
                      <input type="email" style="border-radius:15px;" class="form-control {{ $errors->has('email') ? 'is-invalid' :''}} " name="email" >
                      @if($errors->has('email'))
                            <span class="invalid-feedback">{{  $errors->first('email') }}</span> 
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="password" class="">Mot de passe</label>
                      <input type="password" style="border-radius:15px;" class="form-control {{ $errors->has('password') ? 'is-invalid' :''}} " name="password" >
                      @if($errors->has('password'))
                            <span class="invalid-feedback">{{  $errors->first('password') }}</span> 
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="password_confirmation" class="">Confirmation du mot de passe</label>
                      <input type="password" style="border-radius:15px;" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' :''}} " name="password_confirmation" >
                      @if($errors->has('password_confirmation'))
                            <span class="invalid-feedback">{{  $errors->first('password_confirmation') }}</span> 
                      @endif
                    </div>
                  @endguest

                  <button type="submit" class="btn btn-dark my-2" style="background-color:black">Soumettre l'annonce</button>
                  <button type="submit" class="btn btn-danger my-2">Annuler</button>
                </form>
    </div>
    <div class="col-md-3"></div>
  </div>         
 </div>
 
@endsection
