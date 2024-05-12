<x-layout title="Articoli">
    <div class="row">
        <div class="col-md-4">
            <h1>Articles</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('articles.create') }}" class="btn2 ">Crea articolo</a>
        </div>
    </div>

    <x-success />

    <div class="mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Visible</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    @if(! $article->category_id)
                    <td></td>
                    @else
                    <td>{{ $article->category->name }}</td>
                    @endif
                    <td>
                        @if($article->visible)
                        <span class="badge text-bg-success">Si</span>
                        @else
                        <span class="badge text-bg-danger">No</span>
                        @endif
                    </td>
                    <td class="text-end">
                        <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form class= "d-iline ms-2 mt-2" action="{{ route('articles.destroy', $article) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn3 btn-danger btn-sm">Delete</button>
                </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>