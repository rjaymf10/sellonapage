@component('mail::message')
# Invoice Paid

Thank you for the purchase

Here is your receipt

<table class="table table-striped table-inverse">
    <thead class="thead-inverse">
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($order->products as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->pivot->quantity }}</td>
                <td>{{ $item->pivot->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<h4>Total Price: {{ $order->grand_total }}</h4>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
