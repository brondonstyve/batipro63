<div>
  
  <br>
  <br>
    <form class="" wire:submit.prevent='send' action="" method="post">

     
        @csrf
        <div class="line-input flex">
          <div class="cel-input ">
            <input type="text"  placeholder="Prénom"  wire:model='prenom'>
          </div>
          <div class="cel-input ">
            <input type="text"  placeholder="Nom"  wire:model='nom' required>
          </div>
        </div>
        <div class="line-input flex">
          <div class="cel-input ">
            <input type="email"  placeholder="Email*"  wire:model='email' required>
          </div>
          <div class="cel-input ">
            <input type="tel"  placeholder="Téléphone"  wire:model='telephone' required>
          </div>
        </div>
        {{-- <div class="line-input flex">
            <div class="cel-input ">
              <input type="text"  placeholder="code postal*"  wire:model.lazy='postal'>
            </div>
            <div class="cel-input ">
              <input type="tel"  placeholder="ville"  wire:model.lazy='ville' required>
            </div>
          </div> --}}
        

          <br>
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
          <br>
        <div class="line-input1 flex " >
          <div class="line-input1 full text-center">
            <span wire:loading wire:target='send'>Patientez ...</span>
            <input type="submit"  Value="Demander" wire:loading.remove wire:target='send' class="btn-sub">
          </div>
        </div>

      </form>
</div>
