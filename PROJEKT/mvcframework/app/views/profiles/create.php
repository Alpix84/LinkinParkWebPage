<?php
    require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
        require APPROOT . '/views/includes/navigation.php';
    ?>
</div>
<div >
    <form action="<?php echo URLROOT?>/profiles/upload" method="POST" enctype="multipart/form-data">
    <div class="form-item center">    
        Válaszd ki a profilképedet:
        <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
    <div class="form-item center">
        <button class="btn green" type="submit" name="submit">Feltoltes</button>
    </div>
    </form>
</div>