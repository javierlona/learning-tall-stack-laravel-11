@extends('layouts.app')

@section('title', 'Live Two Page')

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

@section('sidebar')
    @parent
    
    <p>This is appended to the master sidebar.</p>
@endsection