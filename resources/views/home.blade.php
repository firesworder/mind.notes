@extends('layouts.app')

@section('title')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolores, eius labore, laborum molestiae
        mollitia obcaecati omnis praesentium qui, quia recusandae reprehenderit saepe suscipit ut voluptas. Doloremque
        laboriosam, recusandae. Accusamus aliquid blanditiis culpa eius illo, illum perspiciatis quasi quo. Eaque, eius
        similique. Adipisci beatae eaque, excepturi ipsam itaque necessitatibus quibusdam.
    </p>
@endsection

@section('aside')
    @parent
    <p>Кастомизация из шаблона главной!</p>
@endsection
