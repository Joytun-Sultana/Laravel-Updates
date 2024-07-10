@include('pages.header', ['name'=> 'Noor e jaahan'])

<h1>Main Page</h1>

@php
    $arr=["Rehel"=>"135", "Diya"=>"147", "Mita"=> "150"];
    $value="hlo";
@endphp

@include('pages.footer',['arrs'=> $arr])



@includeWhen(empty($value), 'pages.body', ['nam'=> $arr] )

