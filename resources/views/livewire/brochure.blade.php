<div>


    <form class="" action="" method="" wire:submit.prevent='save'>
@csrf
            
        @if (session()->has('success'))
        <div style="text-align: center;color: rgb(27, 80, 43);size: 60px;">
            <div>
                <span>{{session()->get('success')}}</span>
            </div>
        </div>    
        @endif
    
        @if (session()->has('error'))
        <div style="text-align: center;color: rgb(27, 80, 43);size: 60px">
            <div>
                <span>{{session()->get('error')}}</span>
            </div>
        </div>    
        @endif

       

        <br>
        <br>
        <div class="line-input flex">
          <div class="cel-input ">
            <input type="text" wire:model.lazy="prenom" placeholder="Prénom">
          </div>
          <div class="cel-input ">
            <input type="text" wire:model.lazy="nom" id='nom' placeholder="Nom" required>
          </div>
        </div>
        {{-- <div class="line-input flex">
          <div class="cel-input ">
            <input type="text" wire:model.lazy="ville" id='ville' placeholder="Ville" required>
          </div>
          <div class="cel-input ">
            <input type="text" wire:model.lazy="postal" placeholder="Boite postale" >
          </div>
        </div> --}}
        <div class="line-input flex">
          <div class="cel-input ">
            <input type="email" wire:model.lazy="email" id='email' placeholder="Email*" required>
          </div>
          <div class="cel-input ">
            <input type="tel" wire:model.lazy="telephone" id="phone" placeholder="Téléphone" required>
          </div>
        </div>
        <div class="line-input full ">
          <textarea wire:model.lazy='message' rows="8" cols="80" placeholder="Votre message ..." > </textarea>
        </div>

        <div class="line-input flex">
          <label for="newsletter_validation">
              <input type="checkbox" name="newsletter_validation" id="newsletter_validation">
              Je souhaite recevoir des informations concernant les actualités et évènements des promotions immobilières par e-mail.
          </label>
        </div>

        <div style="text-align: center;color: rgb(27, 80, 43);size: 60px;">
            <span wire:loading wire:target='save' >Votre téléchargement démarre dans un instant. veuillez Patienter...</span>
        </div>
                

        <div class="line-input1 flex">
          
          <div class="img-icon">
            <img src="{{ asset('front-end/assets/img/pdf-black.png') }}" alt="">
          </div>
          <div class="line-input1 flex " >
            <div class="line-input1 full">
              <input type="submit"  Value="Télécharger" wire:loading.remove wire:target='save' id='telech' class="btn-sub">

            </div>
          </div>
        </div>
      </form>
</div>