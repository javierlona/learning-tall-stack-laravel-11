{{-- The content inside the <x-layouts.app> tags will be injected into the {{ $slot }} directive in the resources/views/components/layouts/app.blade.php layout file. --}}
<x-layouts.app>
    <x-slot:title>
        Live Action Blade
    </x-slot>
    <x-slot:the-apple>
        <h2 class="font-mono text-orange-600">The Apple Components</h1>
        <div>
            <h2>Will appear below $slot </h2>
        </div>
    </x-slot>
    <div class="container">
        <h1>Livewire Components</h1>
        <div>
            <h2>Counter Component</h2>
            @livewire('counter')
        </div>
        <div>
            <h2>Form Component</h2>
            <livewire:form />
        </div>
    </div>
</x-layouts.app>