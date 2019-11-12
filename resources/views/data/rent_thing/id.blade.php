@extends('layouts.app')

@section('content')
<div class="container">
    <app-rent-thing-id
      id="{{ $id }}"
      />
</div>
@endsection
