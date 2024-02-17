<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
        <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" required autocomplete="name" placeholder="Votre nom" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-fill"></i></span>
        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
            placeholder="Votre mail" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
        <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Votre numéro"
            name="phone" required autocomplete="tel">
        @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    @if(isset($bydept))
    <input type="hidden" name="terrain_id" value="{{ $bydept->getId() }}">

    @else
    <input type="hidden" name="terrain_id" value="{{ $viewData["terrain"]->getId() }}">

    @endif
    <label class="form-check-label" for="flexCheckDefault">
            Date de visite
        </label>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text " id="basic-addon1"><i class="bi bi-calendar rond"></i></span>
        <input type="date" class="form-control @error('visitDate') is-invalid @enderror" name="visitDate">
    </div>
    <div class="mb-3">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Bonjour, je suis vivement intéressé par ce bien, merci de me recontacter pour plus d'informations. Bien cordialement"></textarea>
    </div>
    <!--<div class="mb-3">
        <textarea class="form-control" id="exampleFormControlTextarea1"
            placeholder="Bonjour, je suis vivement intéressé par ce bien, merci de me recontacter pour plus d'informations. Bien cordialement"
            rows="3"></textarea>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="flexCheckDefault" checked>
        <label class="form-check-label" for="flexCheckDefault">
            J'aimerais être contacté(e) par des agences immobilières partenaires pour des
            biens similaires
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
            Je ne souhaite pas recevoir les annonces similaires et les suggestions
            personnalisées
        </label>
    </div><br>-->
    <button type="submit" class="btn btn-danger w-100">Envoyer</button>
</form>