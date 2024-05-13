<div class="d-flex justify-content-center align-items-center container">
    <form wire:submit="save">
        <div class="row">
            <div class="form-group col-md-6 d-flex align-items-center"> <!-- Encapsulate label and input together -->
                <label for="name" class="col-form-label col-sm-4">Nume</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" wire:model="title" placeholder="Enter name">
                    @error('title') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6 d-flex align-items-center">
                <label for="message" class="col-form-label col-sm-4">Mesaj</label>
                <div class="col-sm-8">
                    <textarea class="form-control " wire:model="content"></textarea>
                    @error('content') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="form row">
            <div class="form-group col-md-6 d-flex align-items-center">
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary align-content-sm-end">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
