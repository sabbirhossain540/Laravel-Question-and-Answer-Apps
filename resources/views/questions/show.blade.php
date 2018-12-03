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
                        <a title="The Question is Useful" class="vote-up">
                            <i class="fas  fa-caret-up fa-3x"></i>
                        </a>
                        <span class="vote-count">1230</span>
                        <a title="The Question is not Useful" class="vote-down off">
                            <i class="fas  fa-caret-down fa-3x"></i>
                        </a>

                        <a title="Click to mark as favoutrate question (Click again to undo)" class="favorite mt2 favorited">
                             <i class="fas  fa-star fa-2x"></i>
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
    @include('answer._index',[

    'answers' => $question->answers,
    'answersCount' => $question->answer_count
    ])

   
</div>
@endsection
