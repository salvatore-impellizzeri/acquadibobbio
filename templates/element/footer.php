<footer class="footer">

    <div class="footer__info">
        <div class="footer__info__agency">
            <label>azienda</label>
            <?= $this->element('snippet', ['id' => 1])?>
        </div>
        <div>
            <label>contatti</label>
            <?= $this->element('snippet', ['id' => 15])?>
        </div>
    </div>

    <div class="footer__legal">
        <ul class="menu">
            <li><?= $this->Frontend->seolink(__d('policies', 'Privacy policy'), '/policies/view/1'); ?></li>
            <li><?= $this->Frontend->seolink(__d('policies', 'Cookie policy'), '/policies/view/2'); ?></li>
            <li><span id="cookie_reload"><?php echo __d('policies', 'manage cookies'); ?></span></li>
        </ul>
    </div>

    <div class="footer__bottom">
        <?= $this->element('snippet', ['id' => 16])?>
    </div>

    <!-- <div class="footer__credits">
        <a href="https://www.webmotion.it" title="Web Agency Verona">Credits</a>
    </div> -->
</footer>
