@extends('layouts.app')

@section('content')
<div class="container">
    <app-product-id
      id="{{ $id }}"
      />
</div>
@endsection
