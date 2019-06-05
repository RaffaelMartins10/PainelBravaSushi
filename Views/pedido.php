<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Pedido
  </h1>
  <div class="box">
      <div class="box-body">
          <table class="table">
          <tr>
            <th>Codigo Venda</th>
            <th>Rua</th>
            <th>Numero</th>
            <th>Complemento</th>
            <th>Hora Entrega</th>
            <th>Cidade</th>
            <th>CPF</th>

            <!-- <th>Forma de Pagamento</th> -->
          </tr>    
        <?php foreach($dados as $item): ?>
        	<tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['rua']; ?></td>
            <td><?php echo $item['numero']; ?></td>
            <td><?php echo $item['complemento']; ?></td>
            <td><?php echo $item['horapedido']; ?></td>
            <td><?php echo $item['cidade']; ?></td>
            <td><?php echo $item['telefone']; ?></td>
            <!-- <td><?php echo $item['payment_type']; ?></td> -->
          </tr>
        <?php endforeach; ?>
        </table>
      </div>
</div>     

 </section>

<!-- Main content -->
<section class="content container-fluid">

      <div class="box-body">
      <table class="table">
        <tr>
          <th>Nome do produto</th>
          <th>Categoria</th>
          <th>Quantidade</th>
        </tr>
        <?php foreach($list as $item): ?>
        	<tr>
        	<td><?php echo $item['product_name']; ?></td>
          <td><?php echo $item['category_name']; ?></td>
          <td><?php echo $item['quantity']; ?></td>
            <td>
        	</tr>
        <?php endforeach; ?>

      </table>

    </div>
  </div>

</section>
<!-- /.content -->