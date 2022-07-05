<?php
    require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
        require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<div class="container center">
    <h1>
        Új poszt közzététele
    </h1>

    <form action="<?php echo URLROOT; ?>/posts/create" method="POST">
        <div class="form-item">
            <input type="text" name="title" placeholder="Cím...">
            <span class="invalidFeedback">
                <?php echo $data['titleError']; ?>
            </span>
        </div>
        <div class="form-item">
            <textarea name="body" placeholder="Szöveg..."></textarea>
            <span class="invalidFeedback">
                <?php echo $data['bodyError']; ?>
            </span>
        </div>

        <button class="btn green" name="submit" type="submit">Közzététel</button>
    </form>
</div>