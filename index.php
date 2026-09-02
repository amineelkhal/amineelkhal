<?php
require __DIR__ . '/_inc_lang.php';

// Plain-text versions of a few strings, for meta tags and structured data.
$plain = function ($path) {
    return html_entity_decode(strip_tags(t($path)), ENT_QUOTES, 'UTF-8');
};

$personLd = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Person',
    'name'        => 'Amine ELKHAL',
    'url'         => lang_url($LANG),
    'image'       => SITE_URL . '/icons/logo.png',
    'jobTitle'    => $plain('hero.subtitle'),
    'description' => $plain('meta.description'),
    'email'       => 'mailto:info@amineelkhal.com',
    'worksFor'    => ['@type' => 'Organization', 'name' => 'BlackBytes'],
    'alumniOf'    => ['@type' => 'CollegeOrUniversity', 'name' => 'SUPINFO International University'],
    'knowsAbout'  => [
        'Video surveillance', 'Access control', 'Intrusion detection', 'Security hypervision',
        'LPR / OCR', 'Machine learning', 'PHP', 'Node.js', 'React', 'Java',
    ],
    'sameAs' => [
        'https://www.linkedin.com/in/amine-el-khal-57520029/',
        'https://github.com/amineelkhal',
        'https://codepen.io/amineelkhal/',
        'https://instagram.com/elkhalamine',
        'https://www.youtube.com/channel/UC89Si1J9pMXWpPugqWPtKRQ',
    ],
];
?>
<!DOCTYPE html>
<html lang="<?= $LANG ?>" class="no-js">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= a('meta.title') ?></title>
    <meta name="description" content="<?= a('meta.description') ?>" />
    <link type="text/plain" rel="author" href="/humans.txt" />
    <link rel="stylesheet" href="/css/index.css" />
    <link rel="stylesheet" href="/css/application.css" />
    <link rel="stylesheet" href="/css/sections.css" />

    <link rel="canonical" href="<?= lang_url($LANG) ?>" itemprop="url" />
    <link rel="alternate" hreflang="fr" href="<?= lang_url('fr') ?>" />
    <link rel="alternate" hreflang="en" href="<?= lang_url('en') ?>" />
    <link rel="alternate" hreflang="x-default" href="<?= lang_url('fr') ?>" />

    <meta property="og:type" content="profile" />
    <meta property="og:site_name" content="Amine ELKHAL" />
    <meta property="og:locale" content="<?= t('locale') ?>" />
    <meta property="og:title" content="<?= a('meta.title') ?>" />
    <meta property="og:description" content="<?= a('meta.description') ?>" />
    <meta property="og:url" content="<?= lang_url($LANG) ?>" />
    <meta property="og:image" content="<?= SITE_URL ?>/icons/og-<?= $LANG ?>.png" />
    <meta property="og:image:alt" content="Amine ELKHAL" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= a('meta.title') ?>" />
    <meta name="twitter:description" content="<?= a('meta.description') ?>" />
    <meta name="twitter:image" content="<?= SITE_URL ?>/icons/og-<?= $LANG ?>.png" />

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-title" content="Amine ELKHAL" />
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/logo.png" />
    <link rel="icon" type="image/png" href="/icons/logo.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/icons/logo.png" sizes="16x16" />
    <link rel="manifest" href="/manifest.json" />
    <meta name="theme-color" content="#191a21" />

    <script type="application/ld+json">
        <?= json_encode($personLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>
</head>

<body itemscope itemtype="http://schema.org/WebPage">
    <?php include __DIR__ . '/_inc_loader.php'; ?>
    <div id="page-wrap">
        <nav itemscope itemtype="http://schema.org/SiteNavigationElement" class="main-navigation">
            <div class="content nav-content">
                <a href="/" data-destination="home" itemprop="url" class="nav-logo">
                    <img src="/icons/logo-grey.png" style="max-height:100px" alt="Amine ELKHAL" />
                    <span itemprop="name" class="visual-hide"><?php e('nav.home') ?></span>
                </a>
                <div aria-label="Mobile Menu" class="nav-toggle">
                    <span class="menu-trigger">
                        <i class="menu-trigger-bar top"></i>
                        <i class="menu-trigger-bar middle"></i>
                        <i class="menu-trigger-bar bottom"></i>
                    </span>
                </div>
                <?php include __DIR__ . '/_inc_nav.php'; ?>
            </div>
        </nav>
        <?php include __DIR__ . '/_inc_nav_mobile.php'; ?>

        <header id="top" class="main-hero">
            <div class="main-hero-text">
                <div class="content">
                    <div class="text-loading-mask">
                        <div class="text-loading-overlay"></div>
                        <h1 class="main-hero-title">Amine ELKHAL</h1>
                    </div>
                    <div>
                        <div class="text-loading-mask">
                            <div style="transition-delay: 0.1s;" class="text-loading-overlay"></div>
                            <h2 class="main-hero-subtitle h5"><?php e('hero.subtitle') ?></h2>
                        </div>
                    </div>
                    <div>
                        <div class="text-loading-mask hero-baseline-mask">
                            <div style="transition-delay: 0.12s;" class="text-loading-overlay"></div>
                            <p class="main-hero-baseline"><?php e('hero.baseline') ?></p>
                        </div>
                    </div>
                    <div class="hero-actions">
                        <div style="width: 175px;" class="text-loading-mask">
                            <div style="transition-delay: 0.15s;" class="text-loading-overlay"></div>
                            <a href="#" class="the-button call-to-button no-smoothstate open-contact">
                                <span class="button-text"><?php e('hero.cta') ?></span>
                                <div class="button-mask"></div>
                                <span class="button-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 476.213 476.213">
                                        <path
                                            d="M405.606 167.5l-21.212 21.213 34.393 34.393H0v30h418.787L384.394 287.5l21.212 21.213 70.607-70.607">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php include __DIR__ . '/_inc_shapes.php'; ?>
            <div itemscope="primaryImageOfPage" class="logo-mask">
                <img src="/icons/logo.png" style="max-height:300px" alt="Amine ELKHAL" />
            </div>
            <ul itemscope itemtype="http://schema.org/Organization" class="social-vertical-stripe">
                <span itemprop="name" class="visual-hide">Amine ELKHAL</span>
                <link itemprop="url" href="<?= SITE_URL ?>/" />
                <link itemprop="logo" href="<?= SITE_URL ?>/icons/logo.png" />
                <li>
                    <a href="https://instagram.com/elkhalamine" target="_blank" rel="noopener" itemprop="sameAs"
                        aria-label="Instagram">
                        <svg enable-background="new 0 0 56.693 56.693" height="56.693px" version="1.1"
                            viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M43.414,4.831H13c-5.283,0-9.581,4.297-9.581,9.58v10.12v20.295c0,5.283,4.298,9.58,9.581,9.58h30.415  c5.283,0,9.58-4.297,9.58-9.58V24.53v-10.12C52.994,9.127,48.697,4.831,43.414,4.831z M46.162,10.544l1.096-0.004v1.091v7.312  l-8.375,0.027l-0.029-8.402L46.162,10.544z M21.131,24.53c1.588-2.197,4.164-3.638,7.076-3.638s5.488,1.441,7.074,3.638  c1.033,1.434,1.652,3.188,1.652,5.088c0,4.811-3.918,8.725-8.727,8.725c-4.812,0-8.726-3.914-8.726-8.725  C19.481,27.718,20.098,25.964,21.131,24.53z M48.164,44.825c0,2.621-2.131,4.75-4.75,4.75H13c-2.62,0-4.751-2.129-4.751-4.75V24.53  h7.4c-0.639,1.572-0.998,3.289-0.998,5.088c0,7.473,6.08,13.557,13.556,13.557c7.475,0,13.555-6.084,13.555-13.557  c0-1.799-0.361-3.516-1-5.088h7.402V44.825z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/amine-el-khal-57520029/" target="_blank" rel="noopener"
                        itemprop="sameAs" aria-label="Linkedin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="430.117" height="430.117"
                            viewbox="0 0 430.117 430.117">
                            <path
                                d="M430.117 261.543V420.56H337.93V272.193c0-37.27-13.335-62.707-46.704-62.707-25.473 0-40.632 17.142-47.3 33.724-2.433 5.928-3.06 14.18-3.06 22.477V420.56H148.65s1.242-251.285 0-277.32h92.21v39.31c-.187.293-.43.61-.606.895h.606v-.896c12.25-18.87 34.13-45.825 83.102-45.825 60.673 0 106.157 39.636 106.157 124.818zM52.183 9.558C20.635 9.558 0 30.25 0 57.463c0 26.62 20.038 47.94 50.96 47.94h.615c32.16 0 52.16-21.317 52.16-47.94-.607-27.212-20-47.905-51.552-47.905zM5.477 420.56H97.66V143.24H5.478v277.32z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/amineelkhal" target="_blank" rel="noopener" itemprop="sameAs"
                        aria-label="Github">
                        <svg xmlns="http://www.w3.org/2000/svg" width="438.549" height="438.549"
                            viewbox="0 0 438.549 438.549">
                            <path
                                d="M409.132 114.573c-19.608-33.596-46.205-60.194-79.798-79.8C295.736 15.166 259.057 5.365 219.27 5.365c-39.78 0-76.47 9.804-110.062 29.408-33.596 19.605-60.192 46.204-79.8 79.8C9.803 148.168 0 184.853 0 224.63c0 47.78 13.94 90.745 41.827 128.906 27.884 38.164 63.906 64.572 108.063 79.227 5.14.954 8.945.283 11.42-1.996 2.474-2.282 3.71-5.14 3.71-8.562 0-.57-.05-5.708-.144-15.417-.098-9.71-.144-18.18-.144-25.406l-6.567 1.136c-4.187.767-9.47 1.092-15.846 1-6.375-.09-12.992-.757-19.843-2-6.854-1.23-13.23-4.085-19.13-8.558-5.898-4.473-10.085-10.328-12.56-17.556l-2.855-6.57c-1.903-4.374-4.9-9.233-8.992-14.56-4.093-5.33-8.232-8.944-12.42-10.847l-1.998-1.43c-1.332-.952-2.568-2.1-3.71-3.43-1.143-1.33-1.998-2.663-2.57-3.997-.57-1.335-.097-2.43 1.428-3.29 1.525-.858 4.28-1.275 8.28-1.275l5.708.853c3.807.763 8.516 3.042 14.133 6.85 5.615 3.807 10.23 8.755 13.847 14.843 4.38 7.807 9.657 13.755 15.846 17.848 6.184 4.093 12.42 6.136 18.7 6.136 6.28 0 11.703-.476 16.273-1.423 4.565-.95 8.848-2.382 12.847-4.284 1.713-12.758 6.377-22.56 13.988-29.41-10.847-1.14-20.6-2.857-29.263-5.14-8.658-2.286-17.605-5.996-26.835-11.14-9.235-5.137-16.896-11.516-22.985-19.126-6.09-7.614-11.088-17.61-14.987-29.98-3.9-12.373-5.852-26.647-5.852-42.825 0-23.035 7.52-42.637 22.557-58.817-7.044-17.318-6.38-36.732 1.997-58.24 5.52-1.715 13.706-.428 24.554 3.853 10.85 4.284 18.794 7.953 23.84 10.995 5.046 3.04 9.09 5.618 12.135 7.708 17.706-4.947 35.977-7.42 54.82-7.42s37.116 2.473 54.822 7.42l10.85-6.85c7.418-4.57 16.18-8.757 26.26-12.564 10.09-3.806 17.803-4.854 23.135-3.14 8.562 21.51 9.325 40.923 2.28 58.24 15.035 16.18 22.558 35.788 22.558 58.818 0 16.178-1.958 30.497-5.853 42.966-3.9 12.47-8.94 22.457-15.125 29.98-6.19 7.52-13.9 13.85-23.13 18.985-9.233 5.14-18.183 8.85-26.84 11.135-8.663 2.286-18.416 4.004-29.264 5.146 9.894 8.563 14.842 22.078 14.842 40.54v60.237c0 3.422 1.19 6.28 3.572 8.562 2.38 2.278 6.136 2.95 11.276 1.994 44.163-14.653 80.185-41.062 108.068-79.226 27.88-38.16 41.826-81.126 41.826-128.906-.01-39.77-9.818-76.454-29.414-110.05z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://codepen.io/amineelkhal/" target="_blank" rel="noopener" itemprop="sameAs"
                        aria-label="Codepen">
                        <svg xmlns="http://www.w3.org/2000/svg" width="256" height="256" viewbox="0 0 256 256">
                            <path fill="#231F20"
                                d="M252.1 85.7c0-.2-.1-.3-.1-.5-.1-.3-.1-.6-.2-.9 0-.2-.1-.3-.2-.5-.1-.3-.2-.5-.3-.8-.1-.2-.2-.4-.2-.5-.1-.2-.2-.5-.4-.7-.1-.2-.2-.3-.3-.5-.1-.2-.3-.4-.5-.7-.1-.2-.2-.3-.4-.5s-.3-.4-.5-.6l-.4-.4c-.2-.2-.4-.3-.6-.5-.2-.1-.3-.3-.5-.4-.1 0-.1-.1-.2-.1L132.8 1.8c-3.6-2.4-8.3-2.4-11.9 0L6.3 78.2c-.1 0-.1.1-.2.1-.2.1-.3.2-.5.4s-.4.3-.6.5c-.2.1-.3.3-.4.4-.2.2-.4.4-.5.6-.1.2-.3.3-.4.5-.2.2-.3.4-.5.7-.1.2-.2.3-.3.5-.1.2-.3.5-.4.7-.1.2-.2.3-.2.5-.1.3-.2.5-.3.8 0 .1 0 .3-.1.5-.1.3-.1.6-.2.9 0 .2-.1.3-.1.5-.1.5-.1.9-.1 1.4v76.4c0 .5 0 .9.1 1.4 0 .2.1.3.1.5.1.3.1.6.2.9 0 .2.1.3.2.5.1.3.2.5.3.8.1.2.2.4.2.5.1.2.2.5.4.7.1.2.2.3.3.5.1.2.3.4.5.7.1.2.2.3.4.5s.3.4.5.6l.4.4c.2.2.4.4.6.5.2.1.3.3.5.4.1 0 .1.1.2.1L120.9 249c1.8 1.2 3.9 1.8 6 1.8s4.2-.6 6-1.8l114.5-76.4c.1 0 .1-.1.2-.1.2-.1.3-.2.5-.4s.4-.3.6-.5l.4-.4c.2-.2.4-.4.5-.6.1-.2.3-.3.4-.5.2-.2.3-.4.5-.7.1-.2.2-.3.3-.5.1-.2.3-.5.4-.7.1-.2.2-.3.2-.5.1-.3.2-.5.3-.8.1-.2.1-.3.2-.5.1-.3.1-.6.2-.9 0-.2.1-.3.1-.5.1-.5.1-.9.1-1.4V87.1c-.1-.4-.2-.9-.2-1.4zM137.6 30.9L222 87.1l-37.7 25.2-46.7-31.2V30.9zm-21.5 0v50.2l-46.7 31.2-37.7-25.2 84.4-56.2zm-93 76.4l26.9 18-26.9 18v-36zm93 112.4l-84.4-56.3 37.7-25.2 46.7 31.2v50.3zm10.8-68.9l-38.1-25.5 38.1-25.5 38.1 25.5-38.1 25.5zm10.7 68.9v-50.2l46.7-31.2 37.7 25.2-84.4 56.2zm93-76.4l-26.9-18 26.9-18v36z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UC89Si1J9pMXWpPugqWPtKRQ" target="_blank" rel="noopener"
                        itemprop="sameAs" aria-label="Youtube">
                        <svg enable-background="new 0 0 56.693 56.693" height="56.693px" version="1.1"
                            viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M28.347,5.155c-13.6,0-24.625,11.025-24.625,24.625c0,13.602,11.025,24.625,24.625,24.625   c13.6,0,24.625-11.023,24.625-24.625C52.972,16.18,41.946,5.155,28.347,5.155z M32.325,17.317h1.719v6.459   c0,0.201,0.039,0.344,0.111,0.432c0.07,0.09,0.188,0.137,0.35,0.137c0.125,0,0.285-0.061,0.48-0.178   c0.191-0.121,0.369-0.271,0.529-0.457v-6.393h1.723v8.424h-1.723v-0.93c-0.314,0.342-0.645,0.605-0.99,0.783   c-0.342,0.178-0.674,0.27-0.998,0.27c-0.398,0-0.697-0.127-0.9-0.379c-0.199-0.248-0.301-0.623-0.301-1.129V17.317z M25.935,19.243   c0-0.65,0.23-1.17,0.693-1.561c0.465-0.383,1.088-0.578,1.869-0.578c0.713,0,1.295,0.205,1.752,0.611   c0.453,0.406,0.68,0.934,0.68,1.578v4.35c0,0.723-0.223,1.287-0.666,1.695c-0.449,0.408-1.062,0.613-1.844,0.613   c-0.752,0-1.355-0.211-1.807-0.631c-0.451-0.426-0.678-0.996-0.678-1.711V19.243z M21.247,14.323l1.258,4.562h0.123l1.197-4.562   h1.969l-2.254,6.682v4.737h-1.938v-4.526l-2.307-6.893H21.247z M43.786,38.356c0,3.047-2.471,5.52-5.518,5.52H19.092   c-3.049,0-5.52-2.473-5.52-5.52v-4.438c0-3.049,2.471-5.52,5.52-5.52h19.176c3.047,0,5.518,2.471,5.518,5.52V38.356z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </header>

        <main>
            <?php include __DIR__ . '/_inc_stats.php'; ?>
            <?php include __DIR__ . '/_inc_some_shapes.php'; ?>
            <?php include __DIR__ . '/_inc_platforms.php'; ?>
            <?php include __DIR__ . '/_inc_career.php'; ?>
            <?php include __DIR__ . '/_inc_about.php'; ?>
            <?php /* Sections retirées — fichiers conservés dans _disabled/ :
                     Références (_inc_projects.php), Sur les stores (_inc_works.php),
                     Le web est un terrain de jeu (_inc_experiments.php).
                     Pour en réactiver une, remettre son include ici et le lien
                     correspondant dans _inc_nav.php et _inc_nav_mobile.php. */ ?>
        </main>
    </div>
    <?php include __DIR__ . '/_inc_footer.php'; ?>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/application.js"></script>
</body>

</html>
