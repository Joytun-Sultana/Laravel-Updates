<h1>Heloooooooooooooooooooooooo</h1>

<a href="{{ route('first') }}">first</a>
<a href="{{ route('second') }}">second</a>


{{-- Blade template code --}}

<br>
{{ "Hello Using Blade "}}

@php
    $arr=["Sidratul", "muntaha", "sirajam", "Munira", "Aysha"];
@endphp

<ul>
@foreach ($arr as $n)

    @if ($loop-> first || $loop-> last) 
        <li style="color:red;">{{  $n }}</li>
    @else
        <li>{{ $n }}</li>
        
    @endif
    
    
@endforeach
</ul>




