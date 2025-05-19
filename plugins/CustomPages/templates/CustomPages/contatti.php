<div class="contacts pt-h">
    <video src="img/video/ADB_Contatti.mp4" autoplay muted loop playsinline></video>
    <div class="container-text m-auto">
        <div class="contacts__info text-center uppercase">
            <h1 class="font-96"><?= $item->string_1 ?? '' ?></h1>
            <div class="contacts__info__text">
                <?= $item->text_1; ?>
                <?= $this->element('snippet', ['id' => 15])?>
                <?= $this->element('snippet', ['id' => 1])?>
            </div>
        </div>
        <div class="contacts__form">
            <?= $this->element('Contacts.contact-form', ['id' => 1]) ?>
        </div>
    </div>
</div>
