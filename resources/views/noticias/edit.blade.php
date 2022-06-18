<x-master title="Editar">

    <body>

        @if(session()->has('mensagem'))
            <div class="alert alert-success">
                {{ session()->get('mensagem') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <p><strong>Erro ao realizar esta operação</strong></p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container pt-5">
            <form action="/noticias" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" placeholder="Digite o título da notícia" class="form-control" value="{{$noticia->titulo}}">
                </div>
            
                <div class="form-group">
                    <label for="conteudo">Conteúdo</label>
                    <textarea name="conteudo" placeholder="Digite o conteúdo da notícia" class="form-control" rows="5">{{$noticia->conteudo}}</textarea>
                </div>

                <div class="form-group">
                    <label for="imagem">Imagem Destaque</label>
                    <input type="file" name="imagem"/>
                    @if ($noticia->imagem)
                        <img src="{{$noticia->imagem}}" alt="" height="100px" class='d-block'>                    
                    @endif
                </div>    

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="A" {{$noticias->status=='A'? "selected='selected'":""}}>Ativo</option>
                        <option value="I" {{$noticias->status=='I'? "selected='selected'":""}}>Inativo</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="data_publicacao">Data da Publicação</label>
                    <input type="text" name="data_publicacao" class="form-control" data-provide="datepicker" data-date-language="pt-BR" value="{{ optional($noticia->data_publicacao)->format("d/m/Y") }}">

                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>

            </form>

                <a type="submit" href="/noticias" class="btn btn-primary">Voltar</a>
                        
        </div>

    </body>
    <br>
    <br>
    </html>

</x-master>
