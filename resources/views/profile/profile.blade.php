@extends('layouts.app')

@section('content')

    <div class="container">

        <x-navbar></x-navbar>

        
        <div class="container rounded" id="pprofilecontent">
            
            <div class="row justify-content-center mb-5" id="aboutUser">

                <div class="col-3 col-s-9 my-4 mx-4 rounded" id="profile-left">
                    
                    <div class="card mx-auto my-auto" id="profilecard">
                        <img src="/img/img_falsa.png" class="card-img-top" alt="">
                        <div class="card-body">

                            <h5 class="card-title">{{ Auth::user()->name }}</h5>
                            <hr>
                            <h6>{{ Auth::user()->email }}</h6>

                        </div>
                    </div>
    
                    <div class="rounded bg-warning my-5" id="pdisplayalert">
                        
                        @if (false)
                            <x-alert class="alert alert-success">Tout petit moineau</x-alert>
                        @else
                        <x-alert class="alert alert-danger">Tout petit moineau</x-alert>
                        @endif

                    </div>
    
                </div>
                
                


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