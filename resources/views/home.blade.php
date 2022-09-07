@extends('layouts.app')

@section('content')
<div class="container">

    {{-- NAVIGATION BAR --}}
    <x-navbar></x-navbar>
    
    <div class="board py-1">

      <div class="row mx-4 my-3 py-5 justify-content-center" id="bgpanel">

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

        <div class="col-3 col-s-10 mx-2 my-1 justify-content-center" id="pagendaform">
          
          <x-contactform></x-contactform>
          
        </div>

        <div class="col-8 col-s-10 mx-2 my-1" id="pagendaContacts">
          
          <x-search></x-search>

          <div class="justify-content-center" id="pCards">

            <div class="row justify-content-between px-4 mb-3">
              
              @if ($contacts->count() > 0)
                @foreach ($contacts as $contact)

                  @if (($contact->id_contact % 3) == 0)
                    <div class="col-3 col-s-12 mx-auto my-2" id="cardContentp">
                      <x-card :contact="$contact"></x-card>
                    </div>
                    <br>    
                  @else
                    <div class="col-3 col-s-12 mx-auto my-2" id="cardContentp">
                      <x-card :contact="$contact"></x-card>
                    </div>
                  @endif
                
                @endforeach
              @else
                <x-alert class="alert alert-warning py-3 my-3 text-center" id="calert">
                  <i class="fa fa-info-circle" aria-hidden="true"></i> {{ 'NO CONTACTS REGISTERED' }}
                </x-alert>
              @endif

            </div>

            {{-- 
            <div class="row justify-content-between px-4 mb-3">
              <div class="col-3 col-s-12 mx-auto my-2" id="cardContentp">
                <x-card></x-card>
              </div>
              <div class="col-3 col-s-12 mx-auto my-2" id="cardContentp">
                <x-card></x-card>
              </div>
              <div class="col-3 col-s-12 mx-auto my-2" id="cardContentp">
                <x-card></x-card>
              </div>
            </div>
              --}}


          </div>

          

        </div>
        
      </div>

    </div>


</div>
@endsection
