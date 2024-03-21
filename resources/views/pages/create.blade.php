 <main>
     <div class="create">
         <h2 id="title_create">Inserisci le informazioni del fumetto:</h2>
         @if ($errors->any())
             <div class="alert">
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
         @endif
         <form action="{{ route('movie.store') }}" method="POST">
             @csrf

             <label for="title">Titolo:</label><br>
             <input type="text" id="title" name="title"><br>

             <label for="description">Descrizione:</label><br>
             <textarea id="description" name="description" rows="4" cols="50"></textarea><br>

             <label for="thumb">URL dell'immagine di anteprima:</label><br>
             <input type="text" id="thumb" name="thumb"><br>

             <label for="sale_date">Data di vendita:</label><br>
             <input type="date" id="sale_date" name="sale_date"><br>

             <label for="series">Genere:</label><br>
             <input type="text" id="series" name="series"><br>

             <br>

             <button type="submit">Inserisci fumetto</button>
         </form>

     </div>
 </main>
