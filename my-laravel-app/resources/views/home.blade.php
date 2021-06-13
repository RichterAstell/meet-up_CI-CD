@extends('layouts.app')

@section('content')
<div class="container">
    <div class="home-content">
        <ul>
            <li><a href="{{ route('register_book') }}">add</a></li>
            <li><a href="{{ route('show_books') }}">list</a></li>
        </ul>
    </div>
</div>
@endsection
