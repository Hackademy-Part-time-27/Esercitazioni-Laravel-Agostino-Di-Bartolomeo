<x-layout>       
        <div class="mt-5">
            <h1 class="titlearticles">{{ $article['titlearticles'] }}</h1>

            <div class="my-3">
                Autore: {{ $article->user->name}}
            </div>

            <p>{{ $article['description'] }}</p>
        </div>
  
</x-layout> 