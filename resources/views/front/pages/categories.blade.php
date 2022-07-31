@extends('front.index')
@section('title')Categories list @endsection
@section('content')
    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">
                <h1>Categories list</h1>
                <ul>
                @foreach($categories as $category)
                    <li><a href="category/{{ $category->slug }}">{{ $category->name }}</a></li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
