<div class="konten">
<h1>Daftar Rekap Surat Keterangan Lulus</h1>

<!-- form start -->
<?php echo form_fieldset('Pilih Semester'); ?>
<?php echo form_open($form_action); ?>
<p>
    <?php echo form_label('Kode Semester', 'id_semester'); ?>    
    <?php echo form_dropdown('id_semester', $option_semester, isset($form_value['id_semester']) ? $form_value['id_semester'] : ''); ?>    
	<?php echo form_hidden('id_surat', '5'); ?>
</p>
<?php echo form_error('id_semester', '<p class="field_error">', '</p>');?>

<p>
    <?php // echo form_submit($form['submit']); ?>
    <?php echo form_submit(array('name' => 'submit', 'id'=>'submit', 'value'=>'OK')); ?>
</p>
<?php echo form_close(); ?>
<?php echo form_fieldset_close(); ?>
<!-- form end -->
<p>
<!-- semester start -->
<?php if (! empty($semester)) : ?>
    <?php echo 'Semester : <b>' . $semester . '</b><br />'; ?>
<?php endif ?>
<!-- semester end -->
</p>
<p>
<!-- tabel data start -->
<?php if (! empty($tabel_data)) : ?>
    <?php echo $tabel_data; ?>    
<?php endif ?>
<!-- tabel data end -->
</p> 
<!– End konten –>
</div>