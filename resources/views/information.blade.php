@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="jumbotron">
      <h1 class="display-4">Pagi Teknik!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

      @if (Route::has('login'))
                <div>
                    @auth
                        
                    @else
                        <a class="btn btn-primary btn-lg" role="button" href="{{ route('register') }}" aria-pressed="true">Register</a>
                        <a href="{{ route('login') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Login</a>
                    @endauth
                </div>
            @endif
    </div>
</div>
</div>
</div>
@endsection
