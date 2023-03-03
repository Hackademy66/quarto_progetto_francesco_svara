<x-layout>
  <div class="container py-5 my-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <h1>Contatti</h1>
        <p>I nostri contatti, seguici o contattaci tramite questa pagina</p>
      </div>    
      <div class="col-12 col-md-8">
        @if (session()->has('status'))
          <div class="alert alert-success alert-dismissible fade show border-start border-end my-3 px-3" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
      </div>
    </div>                    
  </div>


  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <form class="p-5 shadow" method="POST" action="{{route('contact_us_submit')}}">
          @csrf
          
          <div class="mb-3">
            <label for="name" class="form-label">Nome completo</label>
            <input type="text" name="name" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Indirizzo email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedly="emailHelp">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Lascia il tuo messaggio</label>
            <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Contattaci</button>
        </form>
      </div>    
    </div>                    
  </div>
</x-layout>