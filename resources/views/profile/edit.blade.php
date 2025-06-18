@extends('backend.master')

@section('content')
    <style>
        .btn-delete {
        background-color: #d32f2f;
        color: white;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 0.75rem;
        letter-spacing: 0.1em;
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        border: none;
        }
        .btn-delete:hover {
        background-color: #b71c1c;
        color: white;
        }
    </style>
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Profile</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            {{-- update profile --}}
            <div class="max-w-xl mb-5">
                 @include('profile.partials.update-profile-information-form')
            </div>
           

           {{-- update password--}}
            <div class="max-w-xl mb-5">
                 @include('profile.partials.update-password-form')
            </div>
          

            {{-- delete user --}}
            <div class="max-w-xl mb-5">
                @include('profile.partials.delete-user-form')
            </div>
            
        </div>
    </div>




@endsection