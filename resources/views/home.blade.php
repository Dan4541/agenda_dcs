@extends('layouts.app')

@section('content')
<div class="container">

    {{-- NAVIGATION BAR --}}
    <x-navbar></x-navbar>
    
    <div class="board py-1">

      <div class="row mx-4 my-3 py-5 justify-content-center rounded" id="bgpanel">

        @if (!empty($result))

          @if ($result)
          <div class="row justify-content-center">
            <div class="col-5 col-s-10">
              <x-alert class="alert alert-success py-3 text-center" id="calert">
                <i class="fa-solid fa-circle-check"></i> {{ $message }}
              </x-alert>
            </div>
          </div> 
          @else
          <div class="row justify-content-center">
            <div class="col-5 col-s-10">
              <x-alert class="alert alert-danger py-3 text-center" id="calert">
                <i class="fa-solid fa-circle-xmark"></i> {{ $message }}
              </x-alert>
            </div>
          </div>                
          @endif

        @endif

        <div class="col-3 col-s-10 mx-2 my-1 justify-content-center rounded" id="pagendaform">
          
          <x-contactform></x-contactform>
          
        </div>

        <div class="col-8 col-s-10 mx-2 my-1 rounded" id="pagendaContacts">
          
          <x-search></x-search>

          <div class="rounded" id="pCards">
            
              @if ($contacts->count() > 0)
                  
                  @foreach ($contacts as $contact)
                    
                      <div class="" id="cardContentp">
                        <x-card :contact="$contact"></x-card>
                      </div>
                                                                                  
                  @endforeach

              @else

                <div class="row" id="calert">
                  <div class="col-12">
                    <x-alert class="alert alert-warning py-3 my-3 text-center">
                      <i class="fa fa-info-circle" aria-hidden="true"></i> {{ 'NO CONTACTS REGISTERED' }}
                    </x-alert>
                  </div>
                </div>
                  
              @endif

          </div>

        </div>
        
      </div>

    </div>


</div>
@endsection
