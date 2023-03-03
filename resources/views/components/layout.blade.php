<!DOCTYPE html>
<html>

    <x-head />

    <body>

      <header>
        <x-navbar />
      </header>

      <main>
        <div>
          {{$slot}}
        </div>
      </main>

      <x-footer />

    </body>
</html>
