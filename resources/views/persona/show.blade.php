@extends('template.main')

@section('title-body','MI PERFIL')

@section('content')
<div class="row">
    <div id="profile-page-header" class="card">
        <div class="card-image waves-effect waves-block waves-light"  style="max-height: 17rem;">
            <img class="activator" src="{{ asset('img/escultura.jpg') }}" alt="user background">
        </div>
        <figure class="card-profile-image">
            <img src="{{ asset('img/perfil.jpg') }}" alt="profile image" class="circle z-depth-2 responsive-img activator" style="height: 5rem;width: 5rem; position: absolute; top: 14.5rem; z-index: 1; left: 40px;margin: 0;">
        </figure>
        <div class="card-content">
            <div class="row">
                <div class="col s3 offset-s2">
                    <h4 class="card-title grey-text text-darken-4">{{ Auth::user()->nombre.' '.Auth::user()->paterno.' '.Auth::user()->materno }}</h4>
                    <p class="medium-small grey-text">User</p>
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </div>
</div>

@endsection