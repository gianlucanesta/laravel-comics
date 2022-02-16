@extends('layouts.app')

@section('page_title')
    DC Comics
@endsection

@section('main_classes')
dark-bg
@endsection

@section('main_content')
    @include('components.series-list', [
        'comics_array' => $comics_array
    ])
@endsection