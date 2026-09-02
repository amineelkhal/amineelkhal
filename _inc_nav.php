<ul class="nav-links">
    <li itemprop="name"><a href="#platforms" data-scroll itemprop="url"
            class="no-smoothState no-single-work"><?php e('nav.platforms') ?></a></li>
    <li itemprop="name"><a href="#career" data-scroll itemprop="url"
            class="no-smoothState no-single-work"><?php e('nav.career') ?></a></li>
    <li class="in-single-work">
        <a href="/" data-destination="home" rel="nofollow">
            <span aria-label="Back" class="nav-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="476.2" height="476.2" viewbox="174 -174.2 476.2 476.2">
                    <path d="M244.6 134.5l21.2-21.2-34.4-34.4h418.8v-30H231.4l34.4-34.4-21.2-21.2L174 63.9">
                    </path>
                </svg>
            </span> <?php e('nav.back') ?>
        </a>
    </li>
    <li class="in-single-work"><a href="#" id="all-works" rel="nofollow"
            class="no-smoothState"><?php e('nav.all_works') ?></a></li>
    <li><a href="#" class="no-smoothState open-contact"><?php e('nav.contact') ?></a></li>
    <li class="no-single-work nav-lang">
        <a href="<?= lang_url(other_lang()) ?>" class="no-smoothState" hreflang="<?= other_lang() ?>"
            lang="<?= other_lang() ?>"><?php e('switch_to') ?></a>
    </li>
    <li class="no-single-work">
        <a href="#" id="change-theme" class="no-smoothState no-single-work" aria-label="<?= a('nav.theme') ?>"
            title="<?= a('nav.theme') ?>">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 285.919 285.919">
                <path
                    d="M142.959 0C64.131 0 0 64.132 0 142.96s64.131 142.959 142.959 142.959 142.96-64.131 142.96-142.959S221.787 0 142.959 0zm0 260.919V25c65.043 0 117.96 52.917 117.96 117.96 0 65.043-52.917 117.959-117.96 117.959z">
                </path>
            </svg>
        </a>
    </li>
</ul>
