<?php 
    $this->assign('footerClass', 'footer--contacts');
?>

<div class="contacts">
    <video src="video/ADB_Contatti.mp4" autoplay muted loop playsinline></video>
    <div class="container-text m-auto">
        <div class="contacts__info opacity" data-animated>
            <h1><?= $item->string_1 ?? '' ?></h1>
            <div class="contacts__info__text fadeFromTopText" data-animated>
                <div class="contacts__info__text-1">
                    <?= $item->text_1; ?>
                </div>
                <div class="contacts__info__text-2">
                    <div>
                        <?= $this->Frontend->svg('icons/phone.svg'); ?>
                        <?= $this->element('snippet', ['id' => 15])?>
                    </div>
                    <div>
                        <?= $this->Frontend->svg('icons/mail.svg'); ?>
                        <?= $this->element('snippet', ['id' => 17])?>
                    </div>
                </div>
                <div class="contacts__info__text-3">
                    <?= $this->element('snippet', ['id' => 1])?> <span class="font-secondary"><?= date("Y") ?></span> <?= $this->element('snippet', ['id' => 18])?>
                </div>
            </div>
        </div>
        <div class="contacts__form fadeFromTop" data-animated>
            <?= $this->element('Contacts.contact-form', ['id' => 1]) ?>
        </div>
    </div>
</div>
