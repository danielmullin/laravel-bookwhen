<h1>Showing all Locations</h1>

@forelse ($locations as $location)
    <li>{{ $location }}</li>
@empty
    <p> 'No events yet' </p>
@endforelse