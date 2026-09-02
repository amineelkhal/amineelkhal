<div class="about-contact">
    <div id="contact-half" class="half-contact is-contact">
        <div class="form-loader">
            <div class="form-loader-content">
                <div class="stripe-loader">
                    <div class="stripe"></div>
                    <div class="stripe"></div>
                    <div class="stripe"></div>
                </div>
            </div>
            <div class="form-message-content">
                <div class="form-message"><?php e('contact.default') ?></div>
            </div>
        </div>
        <div class="form-loader-before"></div>
        <div class="giga-text"><?php e('contact.giga') ?></div>
        <div class="contact-info">
            <h3 class="h4 form-title"><?php e('contact.title') ?></h3>
            <p class="form-subtitle"><?php e('contact.subtitle') ?></p>
            <div class="inner-container">
                <form id="contact-form" method="post" action="/mailer.php" class="the-form no-smoothState">
                    <input type="hidden" name="lang" value="<?= $LANG ?>" />
                    <div class="input required"><input type="text" id="name" name="name" /><label
                            class="label"><?php e('contact.name') ?></label></div>
                    <div class="input required email"><input type="text" id="email" name="email" /><label
                            class="label"><?php e('contact.email') ?></label></div>
                    <div class="input required"><textarea id="message" name="message"></textarea><label
                            class="label"><?php e('contact.message') ?></label></div>
                    <div class="inner-container">
                        <button type="submit" disabled class="the-button submit-button">
                            <span class="button-text"><?php e('contact.send') ?></span>
                            <div class="button-mask"></div>
                        </button>
                    </div>
                </form>
            </div>
            <div class="close-contact" aria-label="<?= a('contact.close') ?>"><span></span><span></span></div>
        </div>
    </div>
    <div class="half-contact is-about">
        <div class="giga-text"><?php e('about.giga') ?></div>
        <div class="about-speed"></div>
        <div class="contact-info">
            <h3 class="h4 about-me-title"><?php e('about.title') ?></h3>
            <h4 class="h5 about-me-subtitle"><?php e('about.subtitle') ?></h4>
            <p class="about-me-text"><?php e('about.text') ?></p>

            <div class="about-skills">
                <?php foreach (arr('about.skills') as $group): ?>
                    <div class="about-skills-group">
                        <h5 class="about-skills-title"><?= $group['title'] ?></h5>
                        <ul class="about-skills-list">
                            <?php foreach ($group['list'] as $skill): ?>
                                <li><?= $skill ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
