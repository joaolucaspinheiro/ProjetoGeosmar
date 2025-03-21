@extends('layout')
@section('title', 'Vídeo')
@section('conteudo')
    <style>
        /* Centraliza o formulário horizontalmente */
        .form-container {
            display: flex;
            justify-content: center;
            margin: 40px auto;
            /* Espaço superior e inferior reduzido */
        }

        /* Formulário com container menor */
        .custom-form {
            background-color: #f5f5f5;
            padding: 8px 12px;
            /* Menos padding interno */
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        /* Ícones menores */
        .custom-form i.material-icons.prefix {
            font-size: 16px;
        }

        /* Botão com ícone menor */
        .custom-form button i.material-icons.right {
            font-size: 16px;
        }
    </style>

    <div class="form-container">
        <div class="custom-form">
            <form class="col s12">
                <!-- Campo Link -->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">link</i>
                        <input id="link" type="text" class="validate" placeholder="Insira o link">
                        <label for="link">Link</label>
                    </div>
                </div>
                <!-- Campo Título -->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">title</i>
                        <input id="title" type="text" class="validate" placeholder="Insira o título">
                        <label for="title">Título</label>
                    </div>
                </div>
                <!-- Campo Descrição com textarea -->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">description</i>
                        <textarea id="description" class="materialize-textarea validate" placeholder="Insira a descrição"
                            style="min-height: 100px;"></textarea>
                        <label for="description">Descrição</label>
                    </div>
                </div>
                <!-- Botão Enviar -->
                <div class="row">
                    <div class="col s12 center-align">
                        <button class="btn waves-effect waves-light teal lighten-3" type="submit" name="action">
                            Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
