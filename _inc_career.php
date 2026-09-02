<section id="career" class="career-section">
    <div class="content">
        <div class="section-text-mask">
            <h4 class="h5 section-subtitle"><?php e('career.subtitle') ?></h4>
        </div>
        <div class="section-text-mask">
            <h2 class="h3 section-title"><?php e('career.title') ?></h2>
        </div>

        <div class="career-grid">
            <?php foreach (arr('career.blocks') as $block): ?>
                <div class="career-block">
                    <h3 class="career-block-title"><?= $block['title'] ?></h3>
                    <ul class="career-list">
                        <?php foreach ($block['items'] as $item): ?>
                            <li class="career-item">
                                <div class="career-date"><?= $item['date'] ?></div>
                                <div class="career-role"><?= $item['role'] ?></div>
                                <div class="career-org"><?= $item['org'] ?></div>
                                <?php if ($item['desc'] !== ''): ?>
                                    <p class="career-desc"><?= $item['desc'] ?></p>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
