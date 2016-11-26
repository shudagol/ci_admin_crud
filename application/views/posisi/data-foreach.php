<?php foreach ($posisi as $key => $value) { ?>

<tr>
    <td><?= $value->nama_posisi; ?></td>
    <td>
        <button class="btn btn-warning btn-edit" data-id="<?php echo $value->id_posisi ?>">Edit</button>
        <button class="btn btn-danger btn-delete" data-id="<?php echo $value->id_posisi ?>" >Delete</button>
    </td>
</tr>

<?php  } ?>