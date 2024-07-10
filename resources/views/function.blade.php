@foreach ($fun as $key => $value)
    <h3>{{ $key }}-{{ $value['name'] }} - {{ $value['phone'] }}</h3>
    
@endforeach