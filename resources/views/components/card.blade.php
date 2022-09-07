@props(['contact'])
<div class="card" style="width: 11rem;">
  <img src="/img/img_falsa.png" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">{{ $contact->contact_name }}</h5>
    <p class="card-text">
       {{ $contact->phones[0]->phone_number  }}
    
      {{ $contact->phones[1]->phone_number }}
      {{ $contact->phones[2]->phone_number }}
    
    </p>
    <hr class="bg-dark">
    <p class="card-text">
      {{ $contact->emails[0]->address }}
      {{ $contact->emails[1]->address }}
      
    </p>
    <hr class="bg-dark">
    <div class="row justify-content-start">
      <div class="col-4 col-s-3">
        <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
      </div>
      <div class="col-4 col-s-3">
        <a href="#" class="btn btn-danger"><i class="fa fa-trash text-dark"></i></a>
      </div>
    </div>
  </div>
</div>