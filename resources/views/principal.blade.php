<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }} " />
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <script>
                    var nome = document.querySelector('#id-nome');
                  
                </script>
    </head>
    <body>
       <div class="content">
            <div class="dv-row">
                
                <h1>Formulário de Contato</h1>
                
              
               <div class="dv-form">
                    @if(session('sucesso'))
                        <div class="msg-form">
                            <p>
                            {{ session('sucesso') }}
                            </p>
                        </div>
                    @endif
                    <!-- se houver algum erro.. -->
                    
                    @if($errors->any())
                        <div class="msg-form-error">
                            <!--Percorra os valores mostrando todos os erros -->
                            @foreach ($errors->all() as $erro )
                               <p style="text-align:start"> {{ $erro }}</p>
                                <br>
                            @endforeach
                           
                        </div>
                    @endif
                    
                    
                    <form method="post" action="{{ route('store') }}">
                        @csrf
                        <div class="dv-form-input">
                            <span for="id-nome">Nome Completo</span>
                            <input type="text" class='input-text' value="{{ old('nome') }}" name="nome" id="id-nome" autocomplet="off"/>
                            
                            @if($errors->has('nome'))
                                <p style="color:#8a4d4d;text-align:start;margin-top:4px">{{ $errors->first('nome') }}<p>
                            @endif
                            
                        </div>
                        <div class="dv-form-input">
                            <span for="id-telefone">Telefone</span>
                            <input type="text" name="telefone" value="{{ old('telefone') }}" class='input-text' id="id-telefone" autocomplet="off"/>
                            
                            @if($errors->has('telefone'))
                                <p style="color:#8a4d4d;text-align:start;margin-top:4px">{{ $errors->first('telefone') }} </p>
                            @endif

                        </div>
                        
                        <div class="dv-form-input">
                            <span for="id-email">E-mail</span>
                            <input type="text" name="email" value="{{ old('email') }}" class='input-text' id="id-email" autocomplet="off"/>
                           
                            @if($errors->has('email'))
                                <p style="color:#8a4d4d;text-align:start;margin-top:4px">{{ $errors->first('email') }} </p>
                            @endif
                        </div>
                        <div class="dv-form-input">
                            <span for="id-motivo-contato">Motivo Contato</span>
                            <select id="id-motivo-contato" name="motivo_contato" class='input-select'>
                                <option value="">Qual o motivo do contato?</option>
                                <option value="1" {{ old('motivo_contato') == 1 ? 'selected' : '' }}>Dúvida</option>
                                <option value="2" {{ old('motivo_contato') == 2 ? 'selected' : ''}}>Elogio</option>
                                <option value="3" {{ old('motivo_contato') == 3 ? 'selected' : '' }}>Reclamação</option>
                            </select>
                            @if($errors->has('motivo_contato'))
                                <p style="color:#8a4d4d;text-align:start;margin-top:4px"> {{ $errors->first('motivo_contato') }}</p>
                            @endif
                        </div>
                        <div class="dv-form-input">
                            <span for="id-motivo-contato">Preencha a sua mensagem</span>
                            <textarea class='input-text-area'  name="mensagem">
                                @if(old('mensagem') != '')
                                    {{ old('mensagem') }}
                                @endif
                            </textarea>
                            @if($errors->has('mensagem'))
                                <p style="color:#8a4d4d;text-align:start;margin-top:4px">{{ $errors->first('mensagem') }}</p>
                            @endif
                        </div>
                         <div class="dv-form-input">
                            <button class="btn-enviar">Enviar</button>
                         </div>
                            
                    </form>
                
                </div>
           
            
            
            
            
       </main>

     <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>new window.VLibras.Widget('https://vlibras.gov.br/app');  </script>
    
    </body>

</html>