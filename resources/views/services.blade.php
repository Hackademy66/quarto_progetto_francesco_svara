<x-layout>
  <div class="container py-5 my-5">
    <div class="row">
      <div class="col-12">
        <h1>Servizi</h1>
        <p>Questa è la pagina dei nostri servizi, scegli il pacchetto più adatto alle tue esigenze</p>
      </div>    
    </div>                    
  </div>

  <div class="container py-2 my-2">
    <div class="row">
      @foreach($services as $service)
      <div class="col-md-3 py-5 my-5">
        <x-card 
        id="{{$service['id']}}"
        name="{{$service['name']}}"
        portata="{{$service['portata']}}"
        nation="{{$service['nation']}}"
        img="{{$service['img']}}"
        />
      </div>
      @endforeach
    </div>                    
  </div>
</x-layout>