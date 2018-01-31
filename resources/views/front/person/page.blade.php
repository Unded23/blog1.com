@extends('front.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="thumbnail">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="person-img-b" src="{{ $person->image }}" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="caption">
                                <p>{{ $person->name }}</p>
                                <small> {{ $person->position }} </small>
                            </div>
                            <div class="col.md-9">
                                <div class="col-md-6"><button>asd</button></div>
                                <div class="col-md-6"><button>asd</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <h3>Биография</h3>
                <p>{{ $person->biography }}</p>
            </div>

        </div>
    </div>

@stop