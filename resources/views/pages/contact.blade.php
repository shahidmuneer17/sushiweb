@extends('app')

@section('content')

<div class="row">
    <div class="col-12 text-center p-5 pmclr">
        <h2>NOUS COTACTER</h2>
    </div>
</div>
<form action="">
    <div class="row pmclr sushiform opbg p-md-5 p-2 justify-content-center">
        
        <div class="col-md-6">
            <div class="mb-3 d-flex">
            <label for="" >Votre Nom:</label>
            <input type="text" placeholder="Votre Nom">
            </div>
            
            <div class="mb-3 d-flex">
            <label for="" >Votre Email:</label>
            <input type="email" placeholder="votre-email@email.com">
            </div>
            
            <div class="mb-3 d-flex">
            <label for="" >Votre numéro de téléphone (optionnel):</label>
            <input type="tel" placeholder="+262 xxx xx xx xx">
            </div>

            <div class="mb-3 mt-3 d-flex">
            <label for="" >Votre message:</label>
            
            </div>
            <div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Votre message"></textarea>
            </div>
            

            <div class="mt-3 mb-3 d-flex justify-content-center">
            <a href="" role="button" class="sushibtn">ENVOYER</a>
            </div>
            
        </div>
        
        
    </div>
    </form>

</section>

@endsection