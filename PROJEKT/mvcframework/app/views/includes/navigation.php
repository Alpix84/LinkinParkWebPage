<nav class="top-nav">
    <ul>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/index">Főoldal</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/albums">Albumok</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/songs">Dalok</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/posts">Posztok</a>
        </li>
        <li>
        <?php if(isset($_SESSION['user_id'])) :  ?>
            <a href="<?php echo URLROOT; ?>/profiles/index">Profilom</a>
        <?php endif; ?>
        </li>
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) :  ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Kijelentkezés</a>
            <?php else :  ?>
                <a href="<?php echo URLROOT; ?>/users/login">Bejelentkezés</a>
            <?php endif; ?>
        </li>
    </ul>

</nav>