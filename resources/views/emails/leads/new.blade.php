<x-mail::message>
# New Alchemy Lead Received

Greetings, Alchemist. A new request has materialized in your sanctum.

<x-mail::panel>
**Client Details**
- **Name:** {{ $booking->client_name }}
- **Email:** {{ $booking->client_email ?? 'Not provided' }}
- **Phone:** {{ $booking->client_phone ?? 'Not provided' }}

**Event Details**
- **Type:** {{ $booking->eventType?->name ?? 'Custom Event' }}
- **Date:** {{ $booking->event_date }}
- **Guests:** {{ $booking->guest_count ?? 'Unspecified' }}
</x-mail::panel>

**Message from Client:**
{{ $booking->message ?? 'No additional instructions provided.' }}

<x-mail::button :url="route('admin.bookings')">
View in Lead Ledger
</x-mail::button>

Stay Golden,<br>
{{ config('app.name') }}
</x-mail::message>
