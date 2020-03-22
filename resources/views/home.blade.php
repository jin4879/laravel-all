@extends('layouts.base')

@section('content')
<div>
    <section>
        <header><h2>첫번째 섹션 제목</h2></header>
        <div>첫번째 섹션</div>
        <a href="{{ route('logout') }}"> logout </a>
    </section>
    <section>
        <header><h2>두번째 섹션 제목</h2></header>
        <div>두번째 섹션</div>
    </section>
    @auth
        {{auth()->user()}}
    @endauth

    @guest
        // The user is not authenticated...
    @endguest
</div>
@endsection
