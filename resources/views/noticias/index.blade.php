<x-master title="Formulario de Notícias">

    <div class="container pt-5">
        
        @if (session()->has('mensagem'))
            <div class="alert alert-sucess">
                {{session()->get('mensagem')}}
            </div>
        @endif

        <a href="/noticias/create" class="btn btn-primary mt-5">Nova Noticia<a><br><br>
        <table class="table table-striped">

            <thead>
                <tr>
                <th scope="col">Ações</th>
                <th scope="col">Titulo</th>
                <th scope="col">Status</th>
                <th scope="col">Data de Publicação</th>
                <th scope="col">Imagem</th>
                </tr>
            </thead>
            <tbody>
                @foreach($noticias as $noticia)
                    <tr>
                        <td style="width: 200px">
                            <a href="/noticias/{{ $noticia->id }}edit/" class="btn btn-primary btn-sm">Editar</a>
                            <form action="/noticias/{{ $noticia->id }}" method="POST" class="d-inline-block">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                        <td>{{ $noticia->titulo }}</td>
                        <td>{{ $noticia->status_formatado }}</td>
                        <td>{{ optional($noticia->data_publicacao)->format("d/m/Y") }}</td>
                        <td><img src="{{ $noticia->imagem }}"  height="40px"></td>
                    </tr>
                @endforeach
            </tbody>
        <table>
        {{ $noticias -> links() }}
    <div>

</x-master>

