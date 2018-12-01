@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="d-flex align-item-center">
                            <h1>{{ $question->title }}</h1>
                            <div class="ml-auto">
                                <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back To All Question</a>
                            </div>
                        </div>  
                        <hr>
                    </div>

                <div class="media">
                    <div class="d-flex flex-column vote-controls">
                        <a href="" title="This Question is Beautiful" class="vote-up">
                            <i class="fas fa-caret-up fa-3x"></i>
                        </a>
                        <span class="vote-count">1230</span>
                        <a href="" title="This question is not useble" class="vote-down off">
                             <i class="fas fa-caret-down fa-3x"></i>
                        </a>
                        <a href="" title="Click to mark as favourate question (Click again to undo)"  class="favorite mt-2 favourated">
                            <i class="fas fa-star fa-2x"></i>
                            <span class="favorites-count">123</span>
                        </a>
                    </div>
                    <div class="media-body">
                        {!! $question->body_html !!}
                            <div class="float-right">
                                <span class="text-muted">Answered {{ $question->created_date }}</span>
                                <div class="media mt-2" >
                                     <a href="{{ $question->user->url }}" class="pr-2">
                                     <img src="{{ $question->user->avatar }}">
                                     </a>
                                    <div class="media-body mt-1">
                                        <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                                    </div>
                                </div>
                            </div> 
                    </div>               
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>{{ $question->answers_count." ". str_plural('Answer', $question->answers_count) }}</h2>
                    </div>
                    <hr>
                    @foreach($question->answers as $answer)

                        <div class="media">
                            <div class="d-flex flex-column vote-controls">
                                <a href="" title="This answer is Beautiful" class="vote-up">
                                    <i class="fas fa-caret-up fa-3x"></i>
                                </a>
                                <span class="vote-count">1230</span>
                                <a href="" title="This answer is not useble" class="vote-down off">
                                     <i class="fas fa-caret-down fa-3x"></i>
                                </a>
                                <a href="" title="Mark this answer as the best answer"  class="vote-accepted mt-2">
                                    <i class="fas fa-check fa-2x"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                {!! $answer->body_html !!}
                                <div class="float-right">
                                    <span class="text-muted">Answered {{ $answer->created_date }}</span>
                                    <div class="media mt-2" >
                                        <a href="{{ $answer->user->url }}" class="pr-2">
                                            <img src="{{ $answer->user->avatar }}">
                                        </a>
                                        <div class="media-body mt-1">
                                            <a href="{{ $answer->user->url }}">{{ $answer->user->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
