@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(!empty($data))
            <div class="card">
                
                <!-- <div class="card-header">Questions</div> -->
                <form method="POST" action="{{ url('result') }}">
                @csrf

                @foreach($data as $key => $value)
                    <div class="card-body">

                        <div class="form-group">
                            <strong><label for="questions" class="col-sm-12 col-form-label text-md-left">{{$key+1}}) {{ __($value[0]) }}</label></strong>
                        </div>

                        <div class="form-group">
                            @foreach($value[1] as $choice)
                            <div class="radio">
                                <label class="col-sm-12 col-form-label text-md-left">
                                    <input type="radio" name="ques_{{$key}}" value="{{$choice['q_id']}}|{{$choice['qc_id']}}">{{$choice['choice']}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>

                @endforeach

                <div class="form-group">
                    <div class="col-md-7">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>

            </div>
            @else
            
                <h3 class="center">Please add questions</h3> <a href="{{ url('add-questions') }}" class="btn btn-primary">Add Questions</a>
            
            @endif
        </div>
    </div>
</div>
@endsection
