<div>
    <b>Код:</b> {{ $data['code'] }}<br>
    <b>Примател:</b> {{ $data['recipient'] }}<br>
    <p>
        <b>Грешка:</b> {{ $data['error'] ?? '' }}
    </p>
    <hr>
    <p>
        <b>Додатни информации:</b><br>
        {{ $data['message-headers'] }}
    </p>
</div>