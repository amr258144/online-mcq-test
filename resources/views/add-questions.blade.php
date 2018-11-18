@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row justify-content-center">
	        <div class="col-md-12">
	            <div class="card">
	                @if(isset($error))
	                	<div class="alert alert-danger">
	                		<p>{{$error['msg']}}</p>
	                	</div>
	                @endif
	                @if(isset($success))
	                	<div class="alert alert-success">
	                		<p>{{$success}}</p>
	                	</div>
	                @endif
	                <!-- <div class="card-header">Questions</div> -->
	                <form method="POST" action="{{ url('insert-question') }}">
	                @csrf

	                <div class="card-body">
                        <div class="form-group">
	                		<label>Question:</label>
	                		<input type="text" value="{{ old('question') }}" name="question" class="form-control" required>
	                	</div>
	                	<span style="color: red">Please select on any one radio button to define the right answer.</span>
                        <div class="form-group col-md-7">
	                		<label>Option 1:</label>
	                		<input type="radio" name="ans" value="opt1">
	                		<input type="text" name="opt1" value="{{ old('opt1') }}" class="form-control" required>
	                	</div>
	                
                        <div class="form-group col-md-7">
	                		<label>Option 2:</label>
	                		<input type="radio" name="ans" value="opt2">
	                		<input type="text" name="opt2" value="{{ old('opt2') }}" class="form-control" required>
	                	</div>
	                
                        <div class="form-group col-md-7">
	                		<label>Option 3:</label>
	                		<input type="radio" name="ans" value="opt3">
	                		<input type="text" name="opt3" value="{{ old('opt3') }}" class="form-control" required>
	                	</div>
	                
                        <div class="form-group col-md-7">
	                		<label>Option 4:</label>
	                		<input type="radio" name="ans" value="opt4">
	                		<input type="text" name="opt4" value="{{ old('opt4') }}" class="form-control" required>
	                	</div>
	                </div>

	                <div class="form-group">
	                    <div class="col-md-7">
	                        <button type="submit" class="btn btn-primary">Submit</button>
	                    </div>
	                </div>
	                </form>

	            </div>
	            
	        </div>
    	</div>
	</div>

@endsection