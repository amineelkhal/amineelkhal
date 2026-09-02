<?php
/**
 * Contenu FR — www.amineelkhal.com
 * Toute la copie du site est ici : modifier ce fichier suffit, aucun HTML à toucher.
 * Le jeton {age} est remplacé automatiquement par l'âge calculé depuis la date de naissance.
 */

return [

    "locale"      => "fr_FR",
    "lang_label"  => "Français",
    "switch_to"   => "English",

    "meta" => [
        "title"       => "Amine ELKHAL — Sûreté électronique & développement full-stack",
        "description" => "Directeur de BlackBytes. Je conçois des infrastructures de sûreté à grande échelle — Tanger Med, Royal Mansour, COPAG — et les plateformes logicielles qui les pilotent.",
    ],

    "nav" => [
        "projects"    => "Références",
        "platforms"   => "Plateformes",
        "career"      => "Parcours",
        "apps"        => "Applications",
        "experiments" => "Expériences",
        "contact"     => "Contact",
        "home"        => "Accueil",
        "back"        => "Retour à l'accueil",
        "all_works"   => "Tous les projets",
        "theme"       => "Changer de thème",
    ],

    "hero" => [
        "subtitle" => "Sûreté électronique &amp; développement full-stack",
        "baseline" => "Je conçois des infrastructures de sûreté à grande échelle — et les plateformes logicielles qui les pilotent.",
        "cta"      => "À propos",
        // Bouton de téléchargement du CV retiré du site.
        "cv"       => "Télécharger le CV",
    ],

    "stats" => [
        ["value" => "15+",    "label" => "ans d'expérience"],
        ["value" => "20",     "label" => "collaborateurs pilotés"],
        ["value" => "9",      "label" => "projets d'envergure"],
        ["value" => "3 000+", "label" => "caméras déployées"],
    ],

    // --- Section retirée du site (fichier dans _disabled/_inc_projects.php).
    //     Copie conservée telle quelle pour pouvoir la réactiver.
    "projects" => [
        "subtitle" => "Références",
        "title"    => "Projets d'envergure",
        "intro"    => "Du cahier des charges à la mise en service : conception technique, budget, achats, installation, recette et maintenance.",
        "team"     => "Équipe",
        "duration" => "Durée",
        "items" => [
            [
                "name"  => "Tanger Med",
                "place" => "Port de Tanger Med",
                "desc"  => "Transformation du comptage de véhicules : mise en place d'un système de reconnaissance fondé sur l'IA et le machine learning, intégré au système d'information portuaire pour un accès aux données en temps réel. Fiabilisation des mesures et réduction du temps de comptage, malgré la diversité des gabarits et les pics de trafic.",
                "team"  => "4 techniciens + 2 ingénieurs",
                "time"  => "19 mois",
                "tags"  => ["IA / Machine learning", "LPR / OCR", "Intégration SI"],
            ],
            [
                "name"  => "Royal Mansour Marrakech",
                "place" => "Palace — 5 hectares",
                "desc"  => "Système de sûreté global : plus de 650 caméras de surveillance, 15 bornes escamotables automatiques, radiocommunication, traceurs GPS, poste central de sécurité et salle serveurs.",
                "team"  => "10 techniciens + 3 ingénieurs",
                "time"  => "14 mois",
                "tags"  => ["650+ caméras", "15 bornes", "PC sécurité"],
            ],
            [
                "name"  => "Royal Mansour Casablanca",
                "place" => "Palace — 24 étages",
                "desc"  => "Système de sûreté global : plus de 700 caméras de surveillance, 28 bornes escamotables automatiques, radiocommunication, traceurs GPS, poste central de sécurité et salle serveurs.",
                "team"  => "10 techniciens + 2 ingénieurs",
                "time"  => "20 mois",
                "tags"  => ["700+ caméras", "28 bornes", "PC sécurité"],
            ],
            [
                "name"  => "Royal Mansour Tamuda Bay",
                "place" => "Resort — côte méditerranéenne",
                "desc"  => "Vidéosurveillance, contrôle d'accès, détection périmétrique d'intrusion, barrières automatiques, radiocommunication, poste central de sécurité et salle serveurs.",
                "team"  => "10 techniciens + 2 ingénieurs",
                "time"  => "18 mois",
                "tags"  => ["Détection périmétrique", "Contrôle d'accès"],
            ],
            [
                "name"  => "Royal Mansour Rabat",
                "place" => "Palace",
                "desc"  => "Vidéosurveillance, contrôle d'accès, détection d'intrusion, bornes escamotables, radiocommunication, poste central de sécurité et salle serveurs.",
                "team"  => "10 techniciens + 2 ingénieurs",
                "time"  => "En cours",
                "tags"  => ["En cours"],
            ],
            [
                "name"  => "COPAG — Jaouda",
                "place" => "25 sites à travers le Royaume",
                "desc"  => "Système de sécurité pour l'un des plus grands producteurs agroalimentaires du Maroc : plus de 100 caméras par site, barrières automatiques et tourniquets de contrôle d'accès, déployés sur 25 sites.",
                "team"  => "10 techniciens + 2 ingénieurs",
                "time"  => "9 mois",
                "tags"  => ["25 sites", "2 500+ caméras", "Contrôle d'accès"],
            ],
            [
                "name"  => "Palmeraie Development Group",
                "place" => "Centre de loisirs",
                "desc"  => "Solution de positionnement indoor permettant de tracer le parcours des visiteurs dans l'un des plus grands centres de loisirs du Maroc.",
                "team"  => "4 techniciens + 2 ingénieurs",
                "time"  => "6 mois",
                "tags"  => ["Positionnement indoor", "Analytics"],
            ],
            [
                "name"  => "Decathlon Maroc",
                "place" => "E-commerce &amp; digital",
                "desc"  => "Mise en œuvre de la stratégie web pour le lancement de la plateforme e-commerce de Decathlon au Maroc : plateforme, stratégie de communication digitale, SEO et communication des magasins.",
                "team"  => "2 techniciens + 1 ingénieur",
                "time"  => "12 mois",
                "tags"  => ["E-commerce", "SEO", "Stratégie digitale"],
            ],
            [
                "name"  => "Ametys Group",
                "place" => "ex-ONAPAR",
                "desc"  => "Définition et mise en œuvre d'une stratégie d'amélioration des solutions informatiques du groupe : applications web et processus métier.",
                "team"  => "2 techniciens + 2 ingénieurs",
                "time"  => "10 mois",
                "tags"  => ["Stratégie SI", "Web", "Process"],
            ],
        ],
    ],

    "platforms" => [
        "subtitle" => "Réalisations full-stack",
        "title"    => "Plateformes",
        "intro"    => "Les produits que je conçois et développe — c'est là que les deux casquettes se rejoignent : le logiciel qui pilote l'infrastructure.",
        "items" => [
            [
                "name" => "OCTOPUS Hypervisor",
                "role" => "Hyperviseur de sûreté",
                "desc" => "Supervision unifiée de l'ensemble des systèmes de sécurité d'un site depuis une seule interface.",
                "list" => [
                    "Caméras de surveillance",
                    "Contrôle d'accès",
                    "Systèmes incendie",
                    "Détection d'intrusion",
                    "Lecture de plaques (OCR + LPR)",
                    "Bornes et barrières automatiques",
                    "Scanners de véhicules",
                    "Briques d'intelligence artificielle",
                    "Reporting décisionnel",
                ],
            ],
            [
                "name" => "OUBOUR",
                "role" => "Tanger Med — fondé sur OCTOPUS",
                "desc" => "Plateforme d'organisation du trafic au sein du port de Tanger Med.",
                "list" => [
                    "Détection et comptage de véhicules",
                    "Comptage de personnes",
                    "Lecture de plaques (OCR + LPR)",
                    "Technologies d'intelligence artificielle",
                    "Carte de chaleur géographique de la circulation",
                    "Reporting décisionnel",
                ],
            ],
            [
                "name" => "Devame Workspace",
                "role" => "Plateforme applicative",
                "desc" => "Une plateforme qui réunit des dizaines d'applications de gestion métier.",
                "list" => [],
            ],
            [
                "name" => "Devame Domo",
                "role" => "Domotique",
                "desc" => "Pilotage à distance de l'habitat — éclairage, volets, sécurité — avec possibilité de personnaliser la solution.",
                "list" => [],
            ],
            [
                "name" => "L'Enquêteur",
                "role" => "Ministère de l'Éducation",
                "desc" => "Application de gestion de questionnaires, développée en collaboration avec le Groupement des Étudiants Marocains et le Ministère de l'Éducation.",
                "list" => [],
            ],
            [
                "name" => "Calculateur d'engagement",
                "role" => "Renault",
                "desc" => "Application de calcul de l'engagement de chaque collaborateur.",
                "list" => [],
            ],
        ],
    ],

    "career" => [
        "subtitle" => "Parcours",
        "title"    => "Quinze ans de terrain",
        "blocks" => [
            [
                "title" => "Expérience",
                "items" => [
                    ["date" => "2023 — aujourd'hui", "role" => "Directeur",               "org" => "BlackBytes",           "desc" => "Pilotage d'une équipe de 20 collaborateurs. Déploiements de sûreté à grande échelle, développement commercial, partenariats fournisseurs et relation client."],
                    ["date" => "2021 — aujourd'hui", "role" => "Responsable intégration", "org" => "Z&amp;Y International", "desc" => "Direction d'équipes sur des périmètres techniques, financiers et commerciaux."],
                    ["date" => "2019 — 2021",        "role" => "Directeur technique",     "org" => "Atorantis Group",      "desc" => "Direction technique et management d'une équipe de 6 personnes."],
                    ["date" => "2011 — 2023",        "role" => "Gérant",                  "org" => "Devame Technology",    "desc" => "Définition des processus et des outils projet, approches agiles ou cycle en V selon les contextes clients."],
                ],
            ],
            [
                "title" => "Enseignement",
                "items" => [
                    ["date" => "2020 — 2024", "role" => "Professeur", "org" => "YNOV Campus — Casablanca &amp; Rabat", "desc" => "Technologies web et développement full-stack."],
                    ["date" => "2010 — 2020", "role" => "Professeur", "org" => "SUPINFO — Casablanca &amp; Rabat",     "desc" => "Web (HTML5, CSS3, JS, jQuery, PHP, MySQL, Node.js, React) et Java (JSE, JEE, Android)."],
                    ["date" => "2016 — 2018", "role" => "Formateur",  "org" => "Afrique Compétences",                  "desc" => "Java / JEE."],
                    ["date" => "2012 — 2013", "role" => "Formateur",  "org" => "CIPEC",                                "desc" => "Centre de formation des pays subsahariens : GED, bureautique, systèmes d'information."],
                ],
            ],
            [
                "title" => "Formation",
                "items" => [
                    ["date" => "2009 — 2012", "role" => "Titre d'ingénieur informatique",     "org" => "SUPINFO International University, Paris", "desc" => "Titre international — International Master of Science."],
                    ["date" => "2010 — 2011", "role" => "Formation de professeurs",           "org" => "SUPINFO International University, Paris", "desc" => ""],
                    ["date" => "2007 — 2009", "role" => "DUT développement informatique",     "org" => "ISTA NTIC, Beni Mellal",                  "desc" => ""],
                    ["date" => "2007 — 2009", "role" => "DUT systèmes et réseaux",            "org" => "EMSET-P, Beni Mellal",                    "desc" => ""],
                    ["date" => "2006 — 2007", "role" => "Baccalauréat Sciences Mathématiques", "org" => "Beni Mellal",                            "desc" => ""],
                ],
            ],
            [
                "title" => "Distinctions",
                "items" => [
                    ["date" => "2009", "role" => "Meilleur projet informatique du Maroc",                 "org" => "OFPPT — concours national", "desc" => "Système de télécontrôle et de sécurisation des établissements OFPPT."],
                    ["date" => "2009", "role" => "Meilleur étudiant des régions Tadla-Azilal et Chaouia", "org" => "OFPPT",                     "desc" => ""],
                    ["date" => "2013", "role" => "SUPINFO Award for Entrepreneurship",                    "org" => "SUPINFO Maroc",             "desc" => "Meilleur projet d'entreprise, promotion 2012."],
                ],
            ],
        ],
    ],

    // --- Section retirée du site (_disabled/_inc_works.php).
    "works" => [
        "subtitle" => "Applications grand public",
        "title"    => "Sur les stores",
        "items" => [
            [
                "title" => "ABC Kids learning",
                "desc"  => "Une application éducative simple et gratuite pour aider les tout-petits à apprendre la phonétique et à tracer les lettres de l'alphabet.",
                "cta"   => "Télécharger",
            ],
            [
                "title" => "Words Kids Learning",
                "desc"  => "Un jeu d'apprentissage des mots pour les enfants d'âge préscolaire et les jardins d'enfants.",
                "cta"   => "Télécharger",
            ],
            [
                "title" => "Parcheesi Kabour",
                "desc"  => "La version marocaine du fameux jeu Parcheesi, version Kabour.",
                "cta"   => "Bientôt",
            ],
        ],
    ],

    // --- Section retirée du site (_disabled/_inc_experiments.php).
    "experiments" => [
        "subtitle" => "Expériences &amp; open source",
        "title"    => "Le web est un terrain de jeu.",
        "items" => [
            "Preloader CSS3 et chargement de page",
            "Animation contextuelle de champ de recherche",
            "Vagues de particules",
            "Cartes 3D des lieux du monde",
        ],
    ],

    "about" => [
        "giga"     => "À propos",
        "title"    => "À propos.",
        "subtitle" => "Sûreté électronique &amp; développement full-stack.",
        "text"     => "Je suis <strong>Amine ELKHAL</strong>, {age} ans, ingénieur marocain et <strong>directeur de BlackBytes</strong>, où je pilote une équipe de 20 collaborateurs sur des déploiements de sûreté à grande échelle : vidéosurveillance, contrôle d'accès, détection d'intrusion, barrières et bornes automatiques, hypervision centralisée.<br /><br />Je suis aussi <strong>développeur full-stack</strong> : je conçois et code les plateformes qui pilotent ces infrastructures — <strong>OCTOPUS</strong>, <strong>OUBOUR</strong> — et j'enseigne les technologies web depuis quinze ans à SUPINFO et YNOV.<br /><br />C'est la même démarche des deux côtés : comprendre un besoin, dessiner l'architecture, et rester responsable jusqu'à la mise en service.",
        "skills" => [
            [
                "title" => "Sûreté &amp; intégration",
                "list"  => ["Vidéosurveillance", "Contrôle d'accès", "Détection d'intrusion", "Bornes &amp; barrières", "Hypervision centralisée", "LPR / OCR, IA"],
            ],
            [
                "title" => "Développement",
                "list"  => ["PHP / MySQL", "Node.js / React", "Java JSE, JEE, Android", "HTML5 / CSS3 / JS", "Architecture &amp; SI", "Direction de projet"],
            ],
        ],
        // Bouton de téléchargement du CV retiré du site.
        "cv" => "Télécharger le CV (PDF)",
    ],

    "contact" => [
        "giga"     => "Contact",
        "title"    => "Parlons-en.",
        "subtitle" => "Nouveau projet, appel d'offres, mission freelance ou simplement un café.",
        "name"     => "Nom",
        "email"    => "E-mail",
        "message"  => "Message",
        "send"     => "Envoyer",
        "default"  => "Message par défaut",
        "close"    => "Fermer",
    ],

    "mailer" => [
        "method"  => "Méthode non autorisée.",
        "wait"    => "Merci de patienter un instant avant d'envoyer un nouveau message.",
        "fill"    => "Merci de remplir tous les champs.",
        "toolong" => "Votre message est trop long.",
        "email"   => "Cette adresse e-mail semble invalide.",
        "chars"   => "Caractères invalides détectés.",
        "failed"  => "Le message n'a pas pu être envoyé. Écrivez-moi directement à %s.",
        "success" => "Merci %s, votre message est parti. Je vous réponds très vite.",
    ],

    "footer" => [
        "top"     => "Haut",
        "contact" => "Contact",
    ],
];
