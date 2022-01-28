<div>
    <form wire:submit.prevent="store" class="search-box">
        <div class="input-form">
            <input type="text" wire:model="url" placeholder="Paste Your Link">
            @error('title')
            <span class="invalid-feedback">
                    {{ $message }}
             </span>
        @enderror
            
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
