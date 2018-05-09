@extends('massively.layouts.layuots')

@section('intro')
    @parent
@endsection

@section('nav')
     @parent
    <h3>дополнение к навигации родительского шаблона!!!</h3>
@endsection


@section('main')
    @include('massively.el_ind_main')
@endsection