@extends('front.layout')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($persons as $person)
            <div class="col-md-3 clearfix">
                <div class="thumbnail">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="person-img" src="{{ $person->image }}" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="caption">
                                <small> {{ $person->position }} </small>
                                <a href="{{ route('person.page', $person->id) }}"><p>{{ $person->name }}</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $persons->links() }}
        </div>
    </div>

@stop

