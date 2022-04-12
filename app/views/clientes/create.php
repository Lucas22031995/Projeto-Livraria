<section class="mt-4">
			<div class="titulo h5 mb-0"><h2>Formulario de cadastro</h2></div>
				<div class="base-form">
					<div class="caixa-form">
						<form action="<?php echo URL_BASE."clientes/salvar" ?>" method="POST">				
							<div class="rows">
								<div class="col-12 d-flex text-justify-center">
									<span href="" class="msg msg-verde mx-3"><i class="fas fa-check"></i> Cadastro realizado com sucesso <a href="javascrip:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
									<span href="" class="msg msg-vermelho mx-3"><i class="fas fa-exclamation-triangle"></i> O campo é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
				
								</div>				
							</div>				
							<div class="rows msg-form">	
							  <div class="col-3 position-relative">									
									<img src="img/img-usuario.png" class="img-fluido foto">
									<div  class="foto-file">
										<input type="file" id="editarFoto"><label for="editarFoto"><span>Editar foto</span></label>
									</div>
									<small class="d-block text-center pt-1 pb-2"><b>nome_do_arquivo.jpg</b></small>
								</div>
								
								<div class="col-9">
								<div class="rows">
									<div class="col-8">
										<label>Nome</label>
										<input name="nome" value="<?php echo isset($clientes) ? $clientes->nome : "" ?>" type="text" placeholder="Insira um nome" class="form-campo">
									</div>
								<div class="col-4">
									<label>CPF</label>
									<input name="cpf" value="<?php echo isset($clientes) ? $clientes->cpf : "" ?>" type="text" placeholder="Insira seu CPF" class="form-campo">
								</div>									
									<div class="col-3">
										<label>Nascimento</label>
										<input name="dtnasc" value="<?php echo isset($clientes) ? $clientes->dtnasc : "" ?>" type="date" placeholder="Insira seu nascimento" class="form-campo">
									</div>							
								
									
									<div class="col-3">
										<label>Cep</label>
										<input name="cep" value="<?php echo isset($clientes) ? $clientes->cep : "" ?>" type="text" placeholder="Insira seu Cep" class="form-campo">
									</div>
									
									<div class="rows">

									<div class="col-8">
										<label>Endereço</label>
										<input name="endereco" value="<?php echo isset($clientes) ? $clientes->endereco : "" ?>" type="text" placeholder="Insira seu endereço" class="form-campo">
									</div>
				
											<div class="col-3">
										<label>telefone</label>
										<input name="tel" value="<?php echo isset($clientes) ? $clientes->tel : "" ?>" type="text" placeholder="Insira seu telefone" class="form-campo">
									</div>
								


								<div class="col-4 m-auto">
									<input type="hidden" name="idcliente" value="<?php echo isset($clientes) ? $clientes->idcliente : null ?>" />
									<input type="submit" value="Cadastrar" class="btn btn-verde width-100">
								</div>
								
								</div>
								</div>
								
						</form>
					</div>
				</div>
			</div>
</section>