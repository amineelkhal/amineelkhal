<section id="projects" class="projects-section">
    <div class="content">
        <div class="section-text-mask">
            <h4 class="h5 section-subtitle"><?php e('projects.subtitle') ?></h4>
        </div>
        <div class="section-text-mask">
            <h2 class="h3 section-title"><?php e('projects.title') ?></h2>
        </div>
        <p class="section-intro"><?php e('projects.intro') ?></p>

        <ul class="projects-grid">
            <?php foreach (arr('projects.items') as $i => $project): ?>
                <li class="project-card" itemscope itemtype="http://schema.org/CreativeWork">
                    <div class="project-index"><?= sprintf('%02d', $i + 1) ?></div>
                    <h3 class="project-name" itemprop="name"><?= $project['name'] ?></h3>
                    <div class="project-place"><?= $project['place'] ?></div>
                    <p class="project-desc" itemprop="description"><?= $project['desc'] ?></p>

                    <?php if (!empty($project['tags'])): ?>
                        <ul class="project-tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <li><?= $tag ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <dl class="project-meta">
                        <dt><?php e('projects.team') ?></dt>
                        <dd><?= $project['team'] ?></dd>
                        <dt><?php e('projects.duration') ?></dt>
                        <dd><?= $project['time'] ?></dd>
                    </dl>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
