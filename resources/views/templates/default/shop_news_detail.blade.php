@extends('templates.'.sc_store('template').'.shop_layout')

@section('main')

<section >
    <div class="container">
        <div class="row">
            <h2 class="title text-center">{{ $title }}</h2>
            <p class="title text-center"><img width='500px' ; src="{{ asset($news_currently->getThumb()) }}" alt="" alt="Blog"></p>
            {!! sc_html_render($news_currently->content) !!}
        </div>
    </div>
</section>
@endsection

@section('breadcrumb')
    <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="active">{{ $title }}</li>
        </ol>
      </div>
@endsection
