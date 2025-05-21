<div class="bg-black">
    <footer class="footer <?= $extraClass ?? '' ?> fadeFromBottom" data-animated>
        <div class="footer__info">
            <div class="footer__info__agency">
                <span>azienda</span>
                <div class="copyright"><?= $this->element('snippet', ['id' => 1])?> <?= date("Y") ?></div> 
                <div><?= $this->element('snippet', ['id' => 18])?></div>
            </div>
            <div class="footer__info__contacts">
                <span>contatti</span>
                <div><?= $this->element('snippet', ['id' => 15])?></div>
                <div><?= $this->element('snippet', ['id' => 17])?></div>   
            </div>
        </div>
    
        <div class="footer__legal">
            <div class="footer__social">
                <?= $this->cell('Menu.Menu::social', [7]) ?>
            </div>
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
</div>
