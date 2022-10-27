@extends('layouts.app')

@section('content')

    <div class="container">

        <x-navbar></x-navbar>

        <div class="container rounded" id="pprofilecontent">
            
            <div class="row justify-content-center mb-5" id="aboutUser">

                <div class="col-3 col-s-9 my-4 mx-4 rounded" id="profile-left">
                    
                    <div class="card mx-auto my-auto" id="profilecard">
                        <form action="{{ route('savePhoto', Auth::user()->id_user) }}" method="POST" enctype="multipart/form-data">                        
                            @csrf
                            <div id="photo_content">

                                {{-- trigger the modal --}}
                                <label data-bs-toggle="modal" data-bs-target="#staticBackdrop{{Auth::user()->id_user}}">
                                    {{-- /img/img_falsa.png - Session::get('path') --}}
                                    <img src="{{ Auth::user()->avatar == null ? '/img/img_falsa.png' : '/img/user_photos/{{Auth::user()->avatar}}' }}" class="card-img-top" alt="">
                                </label>

                                {{-- modal --}}
                                <div class="modal fade" id="staticBackdrop{{Auth::user()->id_user}}" data-bs-backdrop="static" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">Profile Photo</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <h4>Choose Photo</h4>
                                        
                                            
                                          <div class="row">
                                            <div class="col-10 col-s-12">
                                                <input class="form-control" name="userPhoto" type="file">
                                            </div>
                                          </div>

                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>                                
                                          
                                        <button type="submit" class="btn btn-success">Save</button>
                                            
    
                                          {{-- aki form --}}  
                                          
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                            </div>
                        <div class="card-body">

                            <h5 class="card-title">{{ Auth::user()->name }}</h5>
                            <hr>
                            <h6>{{ Auth::user()->email }}</h6>

                        </div>
                    </div>
    
                    <div class="rounded my-5" id="calert">
                        
                        {{-- alert user edition --}}
                        @if (false)
                            @if (true)
                                <x-alert class="alert alert-success">Tout petit moineau</x-alert>
                            @else
                                <x-alert class="alert alert-danger">Tout petit moineau</x-alert>
                            @endif
                        @endif

                        {{-- alert upload image --}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <p>Corrige los siguientes errores:</p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        @if ($message = Session::get('success'))
                            <x-alert class="alert alert-success">{{ $message }}</x-alert>
                        @endif


                        {{--
                        @if (isset($exception))
                        
                            @if ($exception)
                                <x-alert class="alert alert-success">{{ $exception }}</x-alert>
                            @else
                                <x-alert class="alert alert-danger">{{ $exception }}</x-alert>
                            @endif
                            
                        @endif
                        --}}

                        {{--
                        @if ()
                        <x-alert class="alert alert-warning">{{ "MMGVO" }}</x-alert>
                        @else
                            
                            <x-alert class="alert alert-danger" id="calert">
                                <p>Corrige los siguientes errores: {{"SATAN"}}</p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </x-alert>
                        @endif
                        --}}


                    </div>
    
                </div>
</form>          

                <div class="col-5 col-s-9 my-4 rounded" id="profile-right">
                    
                    <div class="rounded bg-light py-4">

                        <h5 class="mx-4 mb-3">Edit Profile</h5>
                        
                        <label class="form-label mx-4">Name</label>
                        
                        <div class="justify-content-center mx-4">
                            <div class="mx-auto">
                                <input type="text" name="ncontact_name" class="form-control" placeholder="Contact Name">
                            </div>
                        </div>

                        <label class="form-label mx-4 mt-3">Email</label>
                        
                        <div class="justify-content-center mx-4 mb-2">
                            <div class="mx-auto">
                                <input type="email" name="nemail" class="form-control" placeholder="email@example.com">
                            </div>
                        </div>

                        <div class="" id="pbtnsave">
                            <button class="btn btn-sm btn-primary mx-4 my-2">SAVE</button>
                        </div>

                    </div>

                    <div class="rounded bg-light my-3 py-4">
                        <h5 class="mx-4 mb-3">Password</h5>

                        <label class="form-label mx-4">Current Password</label>
                        
                        <div class="justify-content-center mx-4 mb-2">
                            <div class="mx-auto">
                                <input type="password" name="currentPassword" class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <label class="form-label mx-4">New Password</label>
                        
                        <div class="justify-content-center mx-4 mb-2">
                            <div class="mx-auto">
                                <input type="password" name="newPassword" class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <label class="form-label mx-4">Confirm Password</label>
                        
                        <div class="justify-content-center mx-4 mb-2">
                            <div class="mx-auto">
                                <input type="password" name="confirmpass" class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <div class="" id="pbtnsave">
                            <button class="btn btn-success btn-sm mx-4 my-2">Change Password</button>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        {{----}}
    </div>

@endsection


{{-- 
    @if (count($errors) > 0)
        <button type="submit" class="btn btn-primary" id="liveToastBtn">SAVE</button>
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                Hello, world! This is a toast message.
                </div>
            </div>
            </div>    

        @else
            <h1>{{ "Lorem ipsum" }}</h1>
        @endif
    --}}

    {{--
        @if (count($errors) > 0)
        <div class="alert alert-danger">
                <p>Corrige los siguientes errores:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif
        --}}