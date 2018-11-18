@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               
                    <div class="card-body">
                        @if(!empty($result))
                            Your Score: {{ $result }} %.
                            <br /><br />
                            <a href="{{ route('home') }}" class="btn btn-primary">Try Again</a>
                        @else
                            <p>May be you should try again! No correct answer submitted.</p>
                            <a href="{{ route('home') }}" class="btn btn-primary">Try Again</a>
                        @endif
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
