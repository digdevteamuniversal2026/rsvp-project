<x-filament::page>
    <h2 class="text-xl font-bold mb-4">RSVP Reports</h2>

    <table class="w-full border-collapse border">
        <thead>
            <tr class="bg-gray-100">
                <th class="border p-2">Name</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">Guests</th>
                <th class="border p-2">Status</th>
                <th class="border p-2">Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rsvps as $rsvp)
                <tr>
                    <td class="border p-2">{{ $rsvp->name }}</td>
                    <td class="border p-2">{{ $rsvp->email }}</td>
                    <td class="border p-2">{{ $rsvp->guests }}</td>
                    <td class="border p-2">{{ ucfirst($rsvp->status) }}</td>
                    <td class="border p-2">{{ $rsvp->created_at->format('M d, Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-filament::page>
