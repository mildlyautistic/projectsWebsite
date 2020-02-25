@extends('layout')

@section('content')

    <div id = "wrapper" >
        <div id="page" class="container">

            @forelse ($article as $articles)
                <div id="content">
                    <div class="title">
                        <h2>
                            <a href="{{ $articles->path() }}">{{ $articles->title }}
                            </a>
                        </h2>
                    </div>

                   <!-- <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>-->
                    {!! $articles->excerpt !!}

                </div>
            @empty
                <p>No relevant Articles yet.</p>
            @endforelse
        </div>
    </div>
@endsection
