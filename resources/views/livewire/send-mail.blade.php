<div>
    
    <br>
    <br>
    <form class="" wire.model.submit='send' action="" method="post">

      

        
        @csrf
        
        <div class="line-input flex">
          
          <div class="cel-input ">
            <input type="text"  placeholder="Prénom"  wire:model='prenom'>
          </div>
          <div class="cel-input ">
            <input type="text"  placeholder="Nom"  wire:model='nom'>
          </div>
        </div>
        <div class="line-input flex">
          <div class="cel-input ">
            <input type="email"  placeholder="Email*"  wire:model='email'>
          </div>
          <div class="cel-input ">
            <input type="tel"  placeholder="Téléphone"  wire:model='telephone'>
          </div>
        </div>
        <div class="line-input full ">
          <textarea  rows="8" cols="80" placeholder="Votre message ..." wire:model='message'></textarea>
        </div>
        
        <br>
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
        

        <div class="line-input flex">
          <div class="content-btn btn-black" wire:loading.remove wire:target='send' wire:click='send'><a href="#!" class="">Envoyer</a></div>
          <div class="content-btn btn-black" wire:loading wire:target='send'><a href="#!" class="" >Patienter...</a></div>
        </div>
      </form>
</div>
