<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>evenements  </title>
  <style>
    .bling{
        background-color: aqua;
    }
  </style>
</head>

<body>
  
<h1>{{$events->count()}} - evenements </h1>

@foreach($events as $event)
  <ol class="{{ $loop->index % 2 == 0 ? 'bling' : '' }}">
    <li>nom: {{ $event->name }} </li>
    <li>description: {{ $event->description }} </li>
    <li>lieu: {{ $event->location }} </li>
    {{-- grace au package on met le $ devant la methode  --}}
    <li>prix: {!! format_price($event)!!}</li>
    <li>date: {{ format_date($event->start_at) }} </li>
  </ol>
      @if ($loop->last)
          
      @else
        <hr>  
      @endif
  
@endforeach


</body>
</html>