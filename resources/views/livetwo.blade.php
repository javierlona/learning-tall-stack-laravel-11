{{-- @extends('components.layouts.app') --}}
@extends('layouts.app')
@section('some-content')
    <h1 class="font-mono text-orange-600">Livewire Components</h1>
    <div>
        <h2>Counter Component</h2>
        <livewire:counter />
    </div>
    <div>
        <h2>Form Component</h2>
        <livewire:form />
    </div>
@endsection