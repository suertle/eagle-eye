@extends('layouts.app')

@section('content')
<div class="container">
    <app-member-plan-id
      id="{{ $id }}"
      />
</div>
@endsection
