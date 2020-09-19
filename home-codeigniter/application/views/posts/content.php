<?php  echo site_url('p/posts/xxxx'); ?>
<body>
    <header>
        <div class="container">
        <div class="logo"><h2>APO-3</h2></div>
            <nav class="menu-desktop">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">Sobre</a>
                    </li>
                    <li>
                        <a href="">Contatos</a>
                    </li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    <div class="container">
        <div class="aluno">
            <img class="rounded-circle" width="170px" height="180px" src="image/mateus.jpg" alt="Card image cap">
            <h3><b>Mateus Ribeiro de Souza</b></h3>
            <h5 style="color: gray;">Trabalho de Sistemas Especialistas</h5>
        </div>
    </div>
    <div class="container">
        <section class="perfil">
        <h2>Sobre</h2>    
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </section>
    </div>
    <section id="carreira">
        <h2 class="title">Carreira</h2>
        	<section class="extras">
		<div class="center">
			<div class="w50 left depoimentos-container">
				<div class="depoimentos-single">
					<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
				</div>
				<div class="depoimentos-single">
					<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
				</div>
				<div class="depoimentos-single">
					<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
				</div>
                <div class="depoimentos-single">
					<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
				</div>	
			</div>
			<div class="w50 left servicos-container">
				<div class="servicos">
			     <div class="depoimentos-single">
					<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
				</div>
				<div class="depoimentos-single">
					<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
				</div>
				<div class="depoimentos-single">
					<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
				</div>	
				</div>
			</div>
			<div class="clear"></div>
		</div>
	   </section>
    </section>
    <section class="contatos">
        <h2>Nossos Contatos</h2>
        <div id="contato">
        <section class="contacts">
        <div class="center">
        <div class="w50 left nossos-contatos">
		<form  name="formulario" method="post" action="enviar_contato" onsubmit="return validaFormContato('AXONO');">
        <div class="field">
            <label class="contato" for="setor">Setor:</label>
            <select class="input" name="setor" id="setor" style="width:130px;">
                <option value="">Selecione</option>
                <option value="" disabled>------------------</option>
                <option value="Administrativo">Administrativo</option>
                <option value="Comercial">Comercial</option>
                <option value="Financeiro">Financeiro</option>
                <option value="Suporte">Suporte</option>
            </select>
        </div>
        <div class="field">
            <label class="contato" for="name">Nome:</label>
            <input type="text" class="input" name="nome" id="nome" />
        </div>
            <div class="field">
            <label class="contato" for="name">Sobrenome:</label>
            <input type="text" class="input" name="sobrenome" id="sobrenome" />
        </div>
            <div class="field">
            <label class="contato" for="sexo">Sexo:</label>
            <select class="input" name="sexo" id="setor" style="width:130px;">
                <option value="">Selecione</option>
                <option value="" disabled>------------</option>
                <option value="Administrativo">Masculino</option>
                <option value="Comercial">Feminino</option>
            </select>
        </div>
        <div class="field">
            <label class="contato" for="email">E-mail:</label>
            <input type="text" class="input" name="email" id="email" />
        </div>
        <div class="field">
            <label class="contato" for="fone">Telefone:</label>
            <input type="text" name="fone" id="fone" class="input" onkeypress="return txtBoxFormat(this, '(99) 9999-9999', event);" maxlength="15">
        </div>
        <div class="field">
            <label class="contato" for="cidade">Cidade:</label>
            <input type="text" class="input" name="cidade" id="cidade" />
        </div>
        <div class="field">
            <label class="contato" for="estado">Estado:</label>
            <select class="input" name="estado" id="estado" style="width:60px;">  
                <option value="" disabled="disabled">---</option>
                <option value="AC">AC</option> 
                <option value="AL">AL</option> 
                <option value="AM">AM</option> 
                <option value="AP">AP</option> 
                <option value="BA">BA</option> 
                <option value="CE">CE</option> 
                <option value="DF">DF</option> 
                <option value="ES">ES</option> 
                <option value="GO">GO</option> 
                <option value="MA">MA</option> 
                <option value="MG">MG</option> 
                <option value="MS">MS</option> 
                <option value="MT">MT</option> 
                <option value="PA">PA</option> 
                <option value="PB">PB</option> 
                <option value="PE">PE</option> 
                <option value="PI">PI</option> 
                <option value="PR">PR</option> 
                <option value="RJ">RJ</option> 
                <option value="RN">RN</option> 
                <option value="RO">RO</option> 
                <option value="RR">RR</option> 
                <option value="RS">RS</option> 
                <option value="SC">SC</option> 
                <option value="SE">SE</option> 
                <option value="SP">SP</option> 
                <option value="TO">TO</option> 
            </select>
        </div>
        <div class="field">
            <label class="contato" for="assunto">Assunto:</label>
            <input type="text" class="input" name="assunto" id="assunto" />
        </div>
        <div class="field">
            <label class="contato" for="mensagem">Mensagem:</label>
            <textarea rows="5" class="input form_textarea_admin_200" name="mensagem" id="mensagem"></textarea>
        </div>
        <div class="field">
        	<label class="contato" for="bt_enviar"></label>
            <input type="submit" value="Enviar" class="bt_forms" name="bt_enviar" id="bt_enviar" />
        </div>
    </form>
    </div>
	<div class="w50 left nossos-contatos2">
	   <div class="email-telefone">
        <div class="interior1">
            <ul>
           <li>
               <h3>Comercial</h3>
               <p><a href="tel:xx55-5555-5555">+55 (55) 5555-5555</a></p>
				<p><a href="mailto:comercial@contato.com.br">comercial@contato.com.br</a></p>
			</li>
			<li>
				<h3>Financeiro</h3>
				<p><a href="tel:xx55-5555-5555">+55 (55) 5555-5555</a></p>
				<p><a href="mailto:financeiro@contato.com.br">financeiro@contato.com.br</a></p>
			</li>
			<li>
				<h3>Suporte</h3>
				<p>Área do Cliente</p>
				<p><a href="tel:xx55-5555-5555">+55 (55) 5555-5555</a></p>
				<p><a href="mailto:suporte@contato.com.br">suporte@contato.com.br</a><br><br></p>
                </li>
            <li>
                <h3>Plantão</h3>
				<p ><a href="tel:xx55-5555-5555">+55 (55) 5555-5555</a></p>
				<p>Segunda a sexta: 18h às 8h 
                <br>
                Fim de semana e feriados: 24h</p>
			</li>
		</ul>
        </div>
    </div>
	</div>
	<div class="clear"></div>
	</div>
    </section>
    </div>
    </section>
    <footer>
        <div class="center">
			 <p>Todos dos direito reservados</p>
		  </div>
    </footer>
</body>
</div>