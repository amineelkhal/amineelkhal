<?php
/**
 * Consumer apps.
 * The three background images never existed on the server (404 in production),
 * so each card falls back to an on-brand gradient. Drop a real screenshot in
 * img/ and swap "background-image" back to url(<the data-bg value>) to restore it.
 */
$cards = [
    ['id' => 'cerasa',       'href' => 'https://play.google.com/store/apps/details?id=com.app.abckidslearning',      'bg' => 'img/cerasa-work.jpg',       'gradient' => 'linear-gradient(135deg, #6107EF 0%, #A79FFF 100%)'],
    ['id' => 'lato',         'href' => 'https://play.google.com/store/apps/details?id=com.amineelkhal.backtoschool', 'bg' => 'img/lato-admin.png',        'gradient' => 'linear-gradient(135deg, #235AA6 0%, #0FE851 100%)'],
    ['id' => 'la-francesca', 'href' => '#',                                                                          'bg' => 'img/la-francesca-work.jpg', 'gradient' => 'linear-gradient(135deg, #E8175D 0%, #FFDA77 100%)'],
];
$items = arr('works.items');
?>
<?php include __DIR__ . '/_inc_some_shapes.php'; ?>

<section id="case-studies" itemscope="" itemprop="mainContentOfPage" class="case-studies-section">
    <div class="section-mask"></div>
    <div class="content">
        <div class="section-text-mask">
            <h4 class="h5 section-subtitle"><?php e('works.subtitle') ?></h4>
        </div>
        <div class="section-text-mask">
            <h2 class="h3 section-title"><?php e('works.title') ?></h2>
        </div>
        <ul class="case-studies-list">
            <?php foreach ($cards as $i => $card): $item = $items[$i]; ?>
                <li itemscope itemtype="http://schema.org/CreativeWork">
                    <a href="<?= $card['href'] ?>" id="<?= $card['id'] ?>"
                        data-bg="<?= $card['bg'] ?>"
                        style="background-image: <?= $card['gradient'] ?>;"
                        data-destination="<?= $card['id'] ?>" itemprop="url" class="case-study"
                        <?= $card['href'] === '#' ? '' : 'target="_blank" rel="noopener"' ?>>
                        <div class="case-study-mask"></div>
                        <div class="case-study-reveal-mask"></div>
                        <div class="case-study-mask-number">
                            <div class="case-study-mask-back"><?= sprintf('%02d', $i + 1) ?></div>
                            <div class="case-study-mask-front">
                                <div data-index="<?= sprintf('%02d', $i + 1) ?>" class="case-study-mask-overlay"><?= sprintf('%02d', $i + 1) ?></div>
                            </div>
                        </div>
                        <div class="case-study-text-section">
                            <h3 itemprop="name" class="h2 case-study-title"><?= $item['title'] ?></h3>
                            <h5 itemprop="description" class="case-study-subtitle"><?= $item['desc'] ?></h5>
                            <button class="the-button call-to-button">
                                <span class="button-text"><?= $item['cta'] ?></span>
                                <div class="button-mask"></div>
                                <span class="button-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 476.213 476.213">
                                        <path
                                            d="M405.606 167.5l-21.212 21.213 34.393 34.393H0v30h418.787L384.394 287.5l21.212 21.213 70.607-70.607">
                                        </path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
