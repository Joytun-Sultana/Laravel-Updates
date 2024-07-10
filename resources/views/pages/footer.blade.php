<h2>Footer file</h2>

@foreach ($arrs as $key=> $ar)
    <p> {{ $key }}-{{ $ar }}</p>
    
@endforeach


{{-- @foreach ($ars as $key=>$nam)
    <p>{{ $key }} - {{ $nam}}</p>
    
@endforeach --}}



@forelse ($arrs as $ky=>$arr)
    <p> {{ $ky }}-{{ $ar }}</p>
    
@empty
    <p>No Value found.</p>
    
@endforelse