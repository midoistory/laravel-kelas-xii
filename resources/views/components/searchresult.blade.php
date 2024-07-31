@extends('templates.index')

@section('content')
    <div class="general">
        <h4 class="latest-text w3_latest_text">Search Result</h4>
        @if ($film->count())
            <div class="film-list" style="margin-left: 100px;">
                @foreach ($film as $item) <!-- Ganti $film dengan $item di sini -->
                    <div class="film-item">
                        <h3>{{ $item->title }}</h3>
                        <img src="{{ $item->poster }}" alt="{{ $item->title }}">
                        <p>Year : {{ $item->year }}</p>
                        <p>{{ $item->sinopsis }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p>No films found for "{{ request()->input('cari') }}"</p>
        @endif
    </div>
@endsection
