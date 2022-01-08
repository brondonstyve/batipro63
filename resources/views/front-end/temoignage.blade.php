@extends('front-end/defaut/base', ['title' => 'avis et vidéo BATIPRO63 | ','body_class' => 'projet-realisation blog'] )
{{--  @extends('front-end/partials/base', ['title' => 'Batipro63 – Notre métier, la construction sur mesure ', 'body_class' => 'detail-service corporate home2-corporate'] )  --}}

@section('css_js')
@endsection

@section('content')
              
@livewire('avisvideo')

@endsection


@section('script')
@endsection