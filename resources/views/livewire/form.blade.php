<div>
    <form wire:submit="submit">
        <div x-data="{ fields: @entangle('fields') }">
            <template x-for="(field, index) in fields" :key="index">
                <div>
                    <input type="text" x-model="field.name" placeholder="Field Name" required />
                    <input type="text" x-model="field.value" placeholder="Field Value" required />
                    <button type="button" x-on:click="fields.splice(index, 1)" wire:click.prevent="removeField(index)">Remove</button>
                </div>
            </template>
            <button type="button" x-on:click="fields.push({ name: '', value: '' })" wire:click.prevent="addField">Add Field</button>
        </div>
        <button type="submit">Submit</button>
    </form>
    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
    <button x-on:click="alert('Hello World!')">Say Hi</button>
</div>