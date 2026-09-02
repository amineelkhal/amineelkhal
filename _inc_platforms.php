<section id="platforms" class="platforms-section">
    <div class="content">
        <div class="section-text-mask">
            <h4 class="h5 section-subtitle"><?php e('platforms.subtitle') ?></h4>
        </div>
        <div class="section-text-mask">
            <h2 class="h3 section-title"><?php e('platforms.title') ?></h2>
        </div>
        <p class="section-intro"><?php e('platforms.intro') ?></p>

        <ul class="platforms-grid">
            <?php foreach (arr('platforms.items') as $platform): ?>
                <li class="platform-card<?= empty($platform['list']) ? ' is-compact' : ' is-feature' ?>"
                    itemscope itemtype="http://schema.org/SoftwareApplication">
                    <h3 class="platform-name" itemprop="name"><?= $platform['name'] ?></h3>
                    <div class="platform-role"><?= $platform['role'] ?></div>
                    <p class="platform-desc" itemprop="description"><?= $platform['desc'] ?></p>

                    <?php if (!empty($platform['list'])): ?>
                        <ul class="platform-features">
                            <?php foreach ($platform['list'] as $feature): ?>
                                <li><?= $feature ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
