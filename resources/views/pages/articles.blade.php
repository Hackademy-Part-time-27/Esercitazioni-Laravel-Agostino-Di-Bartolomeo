<x-layout>
        <h1 class="title ps-4">Articoli</h1>

        <div>
            @if($articles)
                <ul>
                    @foreach($articles as $article)
                    @if($article['visible'])
                    <x-card               
                    :title="$article->title"
                    :description="$article->description"
                    :category="$article->category"
                    :route="route('article',$article->id)"
                    />
                    @endif
                    @endforeach
                </ul>
            @else
                <p>Non ci sono articoli disponibili</p>
            @endif

        </div>
</x-layout>