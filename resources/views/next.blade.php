@extends('master')

@section('content')

<h2>Next Page</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, veniam dolores! Exercitationem, rerum ex! Modi doloribus libero quo quaerat, hic voluptate in, molestiae praesentium ipsa provident magnam ut mollitia similique.
</p>

@endsection

@section('title')
Next
@endsection

@php
    $fruits=["Apple","Mango","Banana"];
@endphp

<script>
  //  var data= @json($fruits);
    var data= {{ Js::from($fruits)}};
    data.forEach(element => {
        console.log(element);
    });
    
</script>