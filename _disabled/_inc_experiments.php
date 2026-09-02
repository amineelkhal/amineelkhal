<?php
$pens = [
    ['href' => 'https://codepen.io/amineelkhal/pen/YzNjGGj', 'img' => '/img/works/codepen-loader.gif',  'tags' => '#JS #HTML #CSS'],
    ['href' => 'https://codepen.io/amineelkhal/pen/NWdBRWV', 'img' => '/img/works/search-context.gif',  'tags' => '#HTML #JS #CSS'],
    ['href' => 'https://codepen.io/amineelkhal/pen/PoweWPy', 'img' => '/img/works/particles-waves.gif', 'tags' => '#Three Js #CSS'],
    ['href' => 'https://codepen.io/amineelkhal/pen/KKaBaNb', 'img' => '/img/works/World-Places.gif',    'tags' => '#HTML #CSS'],
];
$titles = arr('experiments.items');
?>
<section id="experiments" class="experiments-section">
    <div class="section-mask"></div>
    <div class="inner-container">
        <div class="section-text-mask">
            <h4 class="h5 section-subtitle"><?php e('experiments.subtitle') ?></h4>
        </div>
        <div class="section-text-mask">
            <h2 class="h3 section-title"><?php e('experiments.title') ?></h2>
        </div>
    </div>
    <div class="inner-container hidden">
        <div class="experiments-mask-reveal"><span></span><span></span></div>
        <div class="inner-container">
            <?php foreach ($pens as $i => $pen): ?>
                <a href="<?= $pen['href'] ?>" target="_blank" rel="noopener" class="experiment">
                    <div class="experiment-mask"></div>
                    <div class="experiment-number-mask"><span><?= sprintf('%02d', $i + 1) ?></span></div>
                    <div class="experiment-circle">
                        <div class="experiment-image" style="background-image: url(<?= $pen['img'] ?>)"></div>
                    </div>
                    <div class="experiment-title-area">
                        <div class="experiment-title-label"><?= $pen['tags'] ?></div>
                        <div class="experiment-title"><?= $titles[$i] ?></div>
                    </div>
                    <div class="experiment-number-area">&nbsp;</div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
