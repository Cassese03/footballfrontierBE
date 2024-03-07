

<table id="preventivi" class="table table-bordered datatable" style="width:100%;">
  <thead>
  <tr>
    <th>ID</th>
    <th>Data</th>
    <th>Automezzo</th>
    <th>Localita</th>
    <th>Totale</th>
  </tr>
  </thead>
  <tbody>
  <?php $totale = 0; ?>
  <?php foreach($preventivi as $p){ ?>
    <tr>
      <td><input type="checkbox" class="checkbox_fatture form-control" id="checkbox_<?php echo $p->id ?>" value="<?php echo $p->id ?>" onclick="calcola_fatture()"></td>
      <td><?php echo date('d/m/Y',strtotime($p->data)) ?></td>
      <td><?php echo $p->automezzo ?></td>
      <td><?php echo $p->localita ?></td>
      <td>&euro;<?php echo $p->totale ?></td>
    </tr>
  <?php } ?>

  </tbody>
</table>

