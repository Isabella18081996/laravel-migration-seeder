@extends('layouts.main')

@section('content')
<section class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Codice Viaggio</th>
        <th scope="col">Stato</th>
        <th scope="col">Città</th>
        <th scope="col">Prezzo</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($travels as $travel )
        <tr>
          <th scope="row">{{$travel['CodiceViaggio']}}</th>
          <td>{{$travel['Stato']}}</td>
          <td>{{$travel['Citta']}}</td>
          <td>{{$travel['Prezzo']}} €</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</section>
<section class="container">
  {{$travels->links()}}
</section>
@endsection