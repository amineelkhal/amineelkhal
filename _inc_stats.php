<section class="stats-band">
    <div class="content">
        <ul class="stats-list">
            <?php foreach (arr('stats') as $stat): ?>
                <li class="stats-item">
                    <span class="stats-value"><?= $stat['value'] ?></span>
                    <span class="stats-label"><?= $stat['label'] ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
