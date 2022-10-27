<form action="{{ route('scontact') }}" method="post" enctype="multipart/form-data">
    @csrf
    <h4 class="my-3 text-center" id="textos-form">CONTACT DATA</h4>

<div class="row mx-2">
    <label class="col-sm-4 col-4 col-form-label" id="textos-form">Photo</label>
</div>
<div class="row mb-2 justify-content-center">

    {{--  --}}
    <div class="col-s-2 col-1 mx-2 text-start">
        <button class="btn btn-primary btn-sm" type="button">
            <i class="fa fa-floppy-o" aria-hidden="true" id="saveicon"></i>
        </button>
    </div>
        
    <div class="col-s-8 col-8 mx-2 text-end">
        <input type="file" name="contact_photo" class="form-control" placeholder="Contact Photo">
    </div>

</div>

<div class="row mx-2">
    <label class="col-sm-4 col-4 col-form-label" id="textos-form">Name</label>
</div>
<div class="row mb-2 justify-content-center">
    <div class="col-s-12 col-10">
        <input type="text" name="contact_name" class="form-control" placeholder="Contact Name">
    </div>
</div>

<div class="row mx-2">
    <label class="col-s-6 col-6 col-form-label" id="textos-form">Telephones</label>
</div>
<div class="row mb-2 justify-content-center">
    <div class="col-s-12 col-10">
        <input type="number" name="number[]" class="form-control mb-2" placeholder="Phone Number 1">
        <input type="number" name="number[]" class="form-control mb-2" placeholder="Phone Number 2">
        <input type="number" name="number[]" class="form-control mb-2" placeholder="Phone Number 3">
    </div>
</div>

<div class="row mx-2">
    <label class="col-s-4 col-4 col-form-label" id="textos-form">Emails</label>
</div>
<div class="row mb-2 justify-content-center">
    <div class="col-s-12 col-10">
        <input type="email" name="email[]" class="form-control mb-2" placeholder="email@example.com">
        <input type="email" name="email[]" class="form-control mb-2" placeholder="email@example.com">

    </div>
</div>

<div class="row my-2 justify-content-center">
    <div class="col-5 col-s-5 justify-content-center d-grid">
        <button class="btn btn-primary btn-sm text-center" type="submit">SAVE</button>
    </div>
</div>

</form>