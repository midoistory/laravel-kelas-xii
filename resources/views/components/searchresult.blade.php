@extends('templates.index')

@section('content')
    <div class="general">
        <h4 class="latest-text w3_latest_text">Search Result</h4>
        @if ($film->count())
            <div class="film-list" style="margin-left: 100px;">
                @foreach ($film as $film)
                    <div class="film-item">
                        <h3>{{ $film->title }}</h3>
                        <img src="{{ $film->poster }}" alt="{{ $film->title }}">
                        <p>Year : {{ $film->year }}</p>
                        <p>{{ $film->sinopsis }}</p>
                    </div>
                @endforeach
            </div>
            {{-- {{ $film->links() }} --}}
        @else
            <p>No films found for "{{ request()->input('cari') }}"</p>
        @endif
    </div>
@endsection
