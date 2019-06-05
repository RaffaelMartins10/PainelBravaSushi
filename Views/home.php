<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Vendas Online
  </h1>
  <a href="<?php echo BASE_URL.'Home/Deletar'; ?>" class="btn btn-xs btn-danger">Limpar Registros</a>
 </section>
<!-- Main content -->
<section class="content container-fluid">

<div class="box">
        <div class="box-body">
      <table class="table">
        <tr>
        <!-- <th>Codigo Venda</th> -->
        <th >Nome Cliente</th>
        <th>Telefone do Cliente</th>
        <th>Data e Hora do Pedido</th>
        <th>Forma de Pagamento</th>
         <th width="130">Ações</th>

        </tr>

        <?php foreach($list as $item): ?>
        	<tr>
        		<!-- <td><?php echo $item['id']; ?></td> -->
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['cpf']; ?></td>
            <td><?php echo $item['datahora']; ?></td>
            <td><?php echo $item['payment_type']; ?></td>
            <td>
        			<div class="btn-group">
						<a href="<?php echo BASE_URL.'home/verPedido/'.$item['id']; ?>" class="btn btn-xs btn-primary">Ver Pedido</a>
			    	</div>
        		</td>
        	</tr>
        <?php endforeach; ?>


         </table>

    </div>
  </div>
</section>
<!-- /.content -->