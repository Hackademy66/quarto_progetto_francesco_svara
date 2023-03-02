<x-layout>
  <div class="container py-5 my-5">
    <div class="row">
      <div class="col-12">
        <h1>Contatti</h1>
        <p>I nostri contatti, seguici o contattaci tramite questa pagina</p>
      </div>    
    </div>                    
  </div>

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <form class="p-5 shadow" method="POST" action="">
          <div class="mb-3">
            <label for="name" class="form-label">Nome completo</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Indirizzo email</label>
            <input type="email" class="form-control" id="email" aria-describedly="emailHelp">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Lascia il tuo messaggio</label>
            <textarea mane="" id="message" cols="30" rows="7" class="form-control"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Contattaci</button>
        </form>
      </div>    
    </div>                    
  </div>
</x-layout>