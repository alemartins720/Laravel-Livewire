<x-layout.main-layout>

<div class="display-6 text-center">CLIENTES</div>

<hr>

<p>Lista de Clientes</p>

@foreach ($clients as $client )
    <livewire:client-component :$client :key="$client['id']" />
@endforeach

</x-layout.main-layout>