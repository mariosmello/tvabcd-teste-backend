<p>A new appointment has arrived on {{ $appointment->updated_at }}</p>

<dl>
    <dt>Name</dt>
    <dd>{{ $appointment->name }}</dd>
    <dt>E-mail</dt>
    <dd>{{ $appointment->email }}</dd>
    <dt>Phone</dt>
    <dd>{{ $appointment->phone }}</dd>
</dl>
