<?php
    require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
        require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<div class="container">
    <?php if($data['profile']->pfpname==' ') : ?>
        <h1 class="center">
            Kérjük tölts fel egy profilképet!
        </h1>
        <a class="btn2 green" href="<?php echo URLROOT;?>/profiles/create">
            Feltoltes
        </a>
    <?php endif; ?>
    <br>
    <?php  if($data['profile']->pfpname!=' ') : ?>
    <div class="center">
        <img src="<?php echo URLROOT; ?>/public/img/pfp/<?php echo $data['profile']->pfpname ?>" width=800px height=800px alt="PROFILKEP">
        <br>
    </div>
    <?php endif; ?>
    <h1 class="username"><?php echo $data['profile']->username;?></h1>
</div>