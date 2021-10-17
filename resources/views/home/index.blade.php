@extends('layouts.master')

@section('title', 'Home')
@section('content')
<h2>Lara_0818_u2</h2>
<p>
    home路由串接HomeController方法後，回傳View<br>
    回傳index.blade.php之前，index.blade.php子樣板會先套用master.blade.php主樣板的版面設計(layout)後，形成一個網頁才會回傳
</p>
@endsection
