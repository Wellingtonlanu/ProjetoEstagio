<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        
                        <form method="POST" action="atualizar.php">


                        <h1 class="h4 text-gray-900 mb-4">Edição de Associado</h1>
                    </div>
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="nome" name="nome"
                                value = "<?php echo $dado['nome']; ?>">
                            </div>
                            <div class="col-sm-6">
                                <input type="int" class="form-control form-control-user" name="telefone" id="telefone"
                                value = "<?php echo $dado['telefone']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email" id="email"
                            value = "<?php echo $dado['email']; ?>">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="endereco"
                                id="endereco" value = "<?php echo $dado['endereco']; ?>">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" name="bairro"
                                id="bairro" value = "<?php echo $dado['bairro']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="int" class="form-control form-control-user" name="cep" id="cep" name="cep"
                                value = "<?php echo $dado['cep']; ?>">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="uf" name="uf"
                                value = "<?php echo $dado['uf']; ?>">
                            </div>
                        </div>


                        <input type = "radio" id="status1" name="status" value="1"<?php if ($dado['status'] == 1) echo 'checked' ?>>
                            <label for="situacao1"> Ativo</label>
                    <input type = "radio" id="status2" name="status" value="0"<?php if ($dado['status'] == 0) echo 'checked' ?>>
                        <label for="status2"> Desativado </label>

                        <input type="submit" value="Enviar" class="btn btn-primary btn-user btn-block"/>
                        <p></p>
                        <input type="reset" value="Limpar" class="btn btn-primary btn-user btn-block"/>
                        <p></p>
                        <a  class="btn btn-primary btn-user btn-block" href="index.php">Voltar </a>
                        
                        
                        <input type="hidden" name="id_associado" value="<?php  echo $dado['id_associado']; ?>">
                </div>
            </div>