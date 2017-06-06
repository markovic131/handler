<div>
    <b>Recipient:</b> {{ $data['recipient'] }}<br>
    <b>Code:</b> {{ $data['code'] }}<br>
    <p>
        <b>Error:</b> {{ $data['error'] }}
    </p>
    <hr>
    <p>
        <b>Headers:</b><br>
        {{ $data['message-headers'] }}
    </p>
</div>