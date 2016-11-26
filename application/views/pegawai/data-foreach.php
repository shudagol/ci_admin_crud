<?php foreach ($pegawai as $key => $value) { ?>

<tr>
    <td><?= $value->nama_pegawai; ?></td>
    <td><?= $value->jk; ?></td>
    <td><?= $value->alamat; ?></td>
    <td><?= $value->nama_posisi; ?></td>
    <td>
        <button class="btn btn-warning btn-edit" data-id="<?php echo $value->id_pegawai ?>">Edit</button>
        <button class="btn btn-danger btn-delete" data-id="<?php echo $value->id_pegawai ?>" >Delete</button>
    </td>
</tr>

<?php  } ?>