<x-filament::page>
    <div class="grid grid-cols-3 gap-6">
        <!-- Total RSVPs -->
        <div class="p-4 bg-white shadow rounded">
            <h2 class="text-lg font-bold">Total RSVPs</h2>
            <p class="text-3xl mt-2">{{ $totalRsvps }}</p>
        </div>

        <!-- Confirmed RSVPs -->
        <div class="p-4 bg-white shadow rounded">
            <h2 class="text-lg font-bold">Confirmed RSVPs</h2>
            <p class="text-3xl mt-2">{{ $confirmedRsvps }}</p>
        </div>

        <!-- Pending RSVPs -->
        <div class="p-4 bg-white shadow rounded">
            <h2 class="text-lg font-bold">Pending RSVPs</h2>
            <p class="text-3xl mt-2">{{ $pendingRsvps }}</p>
        </div>
    </div>

    <div class="mt-8">
        <h2 class="text-xl font-bold mb-2">Quick Links</h2>
        <a href="{{ \App\Filament\Resources\RsvpResource::getUrl() }}">
  class="text-blue-600 hover:underline">
            View RSVPs
        </a>
        <br>
        <a href="{{ \App\Filament\Pages\Reports::getUrl() }}
" class="text-blue-600 hover:underline">
            Reports
        </a>
    </div>
</x-filament::page>
