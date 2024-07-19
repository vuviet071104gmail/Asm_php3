@extends('layouts.main')
@section('content')
<form action="" method="post">
    @csrf
    <textarea id="editor1" name="content"></textarea>
    <button type="submit">Gửi </button>
</form>
<div style="width: 300px">
    {!! $data['content'] !!}
</div>

@endsection



