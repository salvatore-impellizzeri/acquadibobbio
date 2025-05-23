<?php
use Cake\Core\Configure;

$extraClass = $extraClass ?? '';
$homeLink = ACTIVE_LANGUAGE == DEFAULT_LANGUAGE ? '/' : '/'.ACTIVE_LANGUAGE.'/';
$languages = Configure::read('Setup.languages');
?>

<header class="header fadeFromTop" data-animated>
    <a href="<?= $homeLink ?>" class="header__logo">
        <img src="img/logo.svg" alt="Logo Acqua di Bobbio">
    </a>
    <div class="header__hamburger">
        <?php echo $this->element('hamburger'); ?>
    </div>
</header>
