@props(['contact'])
<div class="card" style="width: 12rem;">
  <img src="/img/img_falsa.png" class="card-img-top" alt="">
  <div class="card-body">
    
    <h5 class="card-title">{{ $contact->contact_name }}</h5>
    <p class="card-text ">
      @foreach ($contact->phones as $phone)
          <em class="bg-warning">{{ $phone->phone_number }}</em>
      @endforeach
    </p>
    <hr class="bg-dark">
    <p class="card-text text-center">
      @foreach ($contact->emails as $email)
          {{$email->address}}
      @endforeach
    </p>
    <hr class="bg-dark">
    <div class="row justify-content-start">
      <div class="col-12 col-s-12">
        <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
        <a href="#" class="btn btn-danger btn-sm mx-2"><i class="fa fa-trash text-dark"></i></a>
      </div>      
    </div>
  </div>
</div>