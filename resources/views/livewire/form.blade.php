<div>
    <form wire:submit.prevent="store" class="search-box">
        <div class="input-form">
            <input type="text" wire:model="url" placeholder="Paste Your Link">
            @error('url')
                <div class="mt-4 d-flex justify-content-center">
                    <h3 class="text-white" style="text-transform: capitalize;">{{$message}}</h3>
                </div>
            @enderror
            @if(session()->has('success'))
            <div class="mt-4 d-flex justify-content-center">
                    <h3 class="text-white" style="text-transform: capitalize;">{{session('success')}}</h3>
                </div>
            @endif
            
            <!-- icon search -->
            <div class="search-form">
                <button type="submit"><i class="ti-arrow-right"></i></button>
             </div>
            <!-- icon search -->
            <div class="world-form">
                <i class="fas fa-link"></i>
             </div>
        </div>
    </form>	
    
</div>
