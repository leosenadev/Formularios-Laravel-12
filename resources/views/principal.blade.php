<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }} " />
        <meta charset="utf-8" />
    </head>
    <body>
       <div class="content">
            <div class="dv-row">
                
                <h1>Formulário de Contato</h1>
                
               <div class="dv-form">
                    <form>
                        <div class="dv-form-input">
                            <span for="id-nome">Nome Completo</span>
                            <input type="text" class='input-text' id="id-nome" autocomplet="off"/>
                        </div>
                        <div class="dv-form-input">
                            <span for="id-telefone">Telefone</span>
                            <input type="text" class='input-text' id="id-telefone" autocomplet="off"/>
                        </div>
                        
                        <div class="dv-form-input">
                            <span for="id-email">E-mail</span>
                            <input type="text" class='input-text' id="id-email" autocomplet="off"/>
                        </div>
                        <div class="dv-form-input">
                            <span for="id-motivo-contato">Motivo Contato</span>
                            <select id="id-motivo-contato" class='input-select'>
                                <option value="">Qual o motivo do contato?</option>
                                <option value="1">Dúvida</option>
                                <option value="2">Elogio</option>
                                <option value="3">Reclamação</option>
                            </select>
                        </div>
                        <div class="dv-form-input">
                            <span for="id-motivo-contato">Preencha a sua mensagem</span>
                            <textarea class='input-text-area'>
                            </textarea>
                        </div>
                         <div class="dv-form-input">
                            <button class="btn-enviar">Enviar</button>
                         </div>
                            
                    </form>
                
                </div>
           
            
            
            
            
       </main>
    </body>
</html>