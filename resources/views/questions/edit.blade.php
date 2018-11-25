@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-item-center">
                        <h2>Edit Question</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back To All Question</a>
                        </div>
                    </div>  
                </div>

                <div class="card-body">
                    <form method="Post" action="{{ route('questions.update', $question->id) }}">
                        {{method_field('PUT')}}
                        @csrf
                        <div class="form-group">
                            <label for="Question-Title">Question Title</label>
                            <input type="text" value="{{ $question->title }}" name="title" id="Question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" >

                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="Question-body">Explain Your Question</label>
                            <textarea name="body" id="question-body" rows="10" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}">{{$question->body}}</textarea>
                            @if($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg">Update This Question</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
