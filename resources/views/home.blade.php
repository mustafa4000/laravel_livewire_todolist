@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <livewire:add-todos />
        <livewire:all-todos />
        <livewire:complete-todos />
    </div>    
</div>
@endsection
