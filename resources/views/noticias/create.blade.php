<x-master title="Criar">

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
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" id="titulo" placeholder="Digite o título da notícia" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="conteudo">Conteúdo</label>
                    <textarea name="conteudo" id="conteudo" placeholder="Digite o conteúdo da notícia" class="form-control" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="imagem">Imagem em Destaque</label>
                    <input type="file" name="imagem" id="imagem">
                </div>    

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="A">Ativo</option>
                        <option value="I">Inativo</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="data_publicacao">Data da Publicação</label>
                    <input type="text" name="data_publicacao" id="data_publicacao" class="form-control" data-provide="datepicker" data-date-language="pt-BR">

                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>

            </form>
                <br>
                <a type="submit" href="/noticias" class="btn btn-info">Voltar</a>
                        
        </div>

    </body>
    <br>
    <br>
    </html>

</x-master>