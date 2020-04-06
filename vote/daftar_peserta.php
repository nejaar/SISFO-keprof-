<?php
$rows = $db->get_results("SELECT * FROM tb_pencalon ORDER BY kode_pencalon"); 
?>
<div class="page-header">
    <h1>Daftar Calon Ketua RW</h1>
</div>
<div class="row">
    <?php foreach($rows as $row):?>
    <div class="col-md-4">        
        <div class="thumbnail">
            <img src="gambar/<?=$row->gambar?>" />
        </div>
        <h3 class="text-center"><?=$row->nama_pencalon?></h3> <p class ="text-center"> Calon ketua RW-<B>13</B></p>        
    </div>
    <?php endforeach?>            
</div>