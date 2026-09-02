<?php
/**
 * EN content — www.amineelkhal.com
 * All site copy lives here: edit this file only, no HTML to touch.
 * The {age} token is replaced automatically with the age computed from the birth date.
 */

return [

    "locale"      => "en_US",
    "lang_label"  => "English",
    "switch_to"   => "Français",

    "meta" => [
        "title"       => "Amine ELKHAL — Physical security & full-stack engineering",
        "description" => "Director at BlackBytes. I design large-scale physical security infrastructure — Tanger Med, Royal Mansour, COPAG — and the software platforms that run it.",
    ],

    "nav" => [
        "projects"    => "Projects",
        "platforms"   => "Platforms",
        "career"      => "Career",
        "apps"        => "Apps",
        "experiments" => "Experiments",
        "contact"     => "Contact",
        "home"        => "Home",
        "back"        => "Back home",
        "all_works"   => "All works",
        "theme"       => "Switch theme",
    ],

    "hero" => [
        "subtitle" => "Physical security &amp; full-stack engineering",
        "baseline" => "I design large-scale security infrastructure — and the software platforms that run it.",
        "cta"      => "About me",
        // CV download button removed from the site.
        "cv"       => "Download CV",
    ],

    "stats" => [
        ["value" => "15+",    "label" => "years of experience"],
        ["value" => "20",     "label" => "people led"],
        ["value" => "9",      "label" => "flagship projects"],
        ["value" => "3,000+", "label" => "cameras deployed"],
    ],

    // --- Section removed from the site (file in _disabled/_inc_projects.php).
    //     Copy kept as-is so it can be switched back on.
    "projects" => [
        "subtitle" => "Selected work",
        "title"    => "Flagship projects",
        "intro"    => "From requirements to commissioning: technical design, budgeting, procurement, installation, acceptance testing and maintenance.",
        "team"     => "Team",
        "duration" => "Duration",
        "items" => [
            [
                "name"  => "Tanger Med",
                "place" => "Port of Tanger Med",
                "desc"  => "Replaced traditional vehicle counting with an AI and machine-learning recognition system, integrated into the port's existing IT infrastructure for real-time data access. Improved accuracy and cut counting time, despite widely varying vehicle sizes and heavy traffic peaks.",
                "team"  => "4 technicians + 2 engineers",
                "time"  => "19 months",
                "tags"  => ["AI / Machine learning", "LPR / OCR", "Systems integration"],
            ],
            [
                "name"  => "Royal Mansour Marrakech",
                "place" => "Luxury hotel — 5 hectares",
                "desc"  => "End-to-end security system: over 650 surveillance cameras, 15 automatic bollards, radio communication, GPS plotters, a fully equipped control station and server room.",
                "team"  => "10 technicians + 3 engineers",
                "time"  => "14 months",
                "tags"  => ["650+ cameras", "15 bollards", "Control station"],
            ],
            [
                "name"  => "Royal Mansour Casablanca",
                "place" => "Luxury hotel — 24 floors",
                "desc"  => "End-to-end security system: over 700 surveillance cameras, 28 automatic bollards, radio communication, GPS plotters, a fully equipped control station and server room.",
                "team"  => "10 technicians + 2 engineers",
                "time"  => "20 months",
                "tags"  => ["700+ cameras", "28 bollards", "Control station"],
            ],
            [
                "name"  => "Royal Mansour Tamuda Bay",
                "place" => "Resort — Mediterranean coast",
                "desc"  => "Surveillance cameras, access control, perimeter intrusion detection, automatic barriers, radio communication, control station and server room.",
                "team"  => "10 technicians + 2 engineers",
                "time"  => "18 months",
                "tags"  => ["Perimeter detection", "Access control"],
            ],
            [
                "name"  => "Royal Mansour Rabat",
                "place" => "Luxury hotel",
                "desc"  => "Surveillance cameras, access control, intrusion detection, automatic bollards, radio communication, control station and server room.",
                "team"  => "10 technicians + 2 engineers",
                "time"  => "Running",
                "tags"  => ["Running"],
            ],
            [
                "name"  => "COPAG — Jaouda",
                "place" => "25 sites across Morocco",
                "desc"  => "Security system for one of Morocco's largest food producers: over 100 cameras per site, automatic barriers and access-control turnstiles, deployed across 25 sites.",
                "team"  => "10 technicians + 2 engineers",
                "time"  => "9 months",
                "tags"  => ["25 sites", "2,500+ cameras", "Access control"],
            ],
            [
                "name"  => "Palmeraie Development Group",
                "place" => "Entertainment centre",
                "desc"  => "Indoor positioning solution tracing visitor movement inside one of the biggest entertainment centres in Morocco.",
                "team"  => "4 technicians + 2 engineers",
                "time"  => "6 months",
                "tags"  => ["Indoor positioning", "Analytics"],
            ],
            [
                "name"  => "Decathlon Morocco",
                "place" => "E-commerce &amp; digital",
                "desc"  => "Web strategy for the launch of Decathlon's e-commerce platform in Morocco: platform implementation, digital communication strategy, SEO and in-store communication.",
                "team"  => "2 technicians + 1 engineer",
                "time"  => "12 months",
                "tags"  => ["E-commerce", "SEO", "Digital strategy"],
            ],
            [
                "name"  => "Ametys Group",
                "place" => "formerly ONAPAR",
                "desc"  => "Defined and implemented a strategy to improve the group's IT solutions: web applications and business processes.",
                "team"  => "2 technicians + 2 engineers",
                "time"  => "10 months",
                "tags"  => ["IT strategy", "Web", "Process"],
            ],
        ],
    ],

    "platforms" => [
        "subtitle" => "Full-stack achievements",
        "title"    => "Platforms",
        "intro"    => "The products I design and build — this is where both hats meet: the software that runs the infrastructure.",
        "items" => [
            [
                "name" => "OCTOPUS Hypervisor",
                "role" => "Security hypervisor",
                "desc" => "Unified supervision of every security system on a site, from a single interface.",
                "list" => [
                    "Surveillance cameras",
                    "Access control",
                    "Fire systems",
                    "Intrusion detection",
                    "Licence plate reading (OCR + LPR)",
                    "Automatic bollards and barriers",
                    "Car scanners",
                    "AI technologies",
                    "Intelligence reporting",
                ],
            ],
            [
                "name" => "OUBOUR",
                "role" => "Tanger Med — built on OCTOPUS",
                "desc" => "Traffic organisation platform inside the Port of Tanger Med.",
                "list" => [
                    "Vehicle detection and counting",
                    "People counting",
                    "Licence plate reading (OCR + LPR)",
                    "AI technologies",
                    "Geographic heat map of circulation",
                    "Intelligence reporting",
                ],
            ],
            [
                "name" => "Devame Workspace",
                "role" => "Application platform",
                "desc" => "A platform bringing together dozens of business management applications.",
                "list" => [],
            ],
            [
                "name" => "Devame Domo",
                "role" => "Home automation",
                "desc" => "Remote control of homes — lighting, shutters, security — with the option to tailor the solution.",
                "list" => [],
            ],
            [
                "name" => "L'Enquêteur",
                "role" => "Ministry of Education",
                "desc" => "Questionnaire management application, built with the Moroccan Student Group and the Moroccan Ministry of Education.",
                "list" => [],
            ],
            [
                "name" => "Commitment Calculator",
                "role" => "Renault",
                "desc" => "Application computing each worker's commitment.",
                "list" => [],
            ],
        ],
    ],

    "career" => [
        "subtitle" => "Career",
        "title"    => "Fifteen years in the field",
        "blocks" => [
            [
                "title" => "Experience",
                "items" => [
                    ["date" => "2023 — today", "role" => "Director",             "org" => "BlackBytes",           "desc" => "Leading a team of 20. Large-scale security deployments, commercial development, supplier partnerships and client relationships."],
                    ["date" => "2021 — today", "role" => "Integration Manager",  "org" => "Z&amp;Y International", "desc" => "Leading teams across technical, financial and business disciplines."],
                    ["date" => "2019 — 2021",  "role" => "Chief Technical Officer", "org" => "Atorantis Group",   "desc" => "Technical leadership and management of a 6-person team."],
                    ["date" => "2011 — 2023",  "role" => "Manager",              "org" => "Devame Technology",    "desc" => "Defined the processes and tools best suited to each project, moving between agile and waterfall depending on client goals."],
                ],
            ],
            [
                "title" => "Teaching",
                "items" => [
                    ["date" => "2020 — 2024", "role" => "Professor", "org" => "YNOV Campus — Casablanca &amp; Rabat", "desc" => "Web technologies and full-stack development."],
                    ["date" => "2010 — 2020", "role" => "Professor", "org" => "SUPINFO — Casablanca &amp; Rabat",     "desc" => "Web (HTML5, CSS3, JS, jQuery, PHP, MySQL, Node.js, React) and Java (JSE, JEE, Android)."],
                    ["date" => "2016 — 2018", "role" => "Speaker",   "org" => "Afrique Compétences",                  "desc" => "Java / JEE."],
                    ["date" => "2012 — 2013", "role" => "Speaker",   "org" => "CIPEC",                                "desc" => "Training centre for sub-Saharan countries: EDM, office tools, information systems."],
                ],
            ],
            [
                "title" => "Education",
                "items" => [
                    ["date" => "2009 — 2012", "role" => "Computer Engineering degree",   "org" => "SUPINFO International University, Paris", "desc" => "International title — International Master of Science."],
                    ["date" => "2010 — 2011", "role" => "Professors training",           "org" => "SUPINFO International University, Paris", "desc" => ""],
                    ["date" => "2007 — 2009", "role" => "Technician diploma, IT development", "org" => "ISTA NTIC, Beni Mellal",             "desc" => ""],
                    ["date" => "2007 — 2009", "role" => "Technician diploma, systems &amp; networks", "org" => "EMSET-P, Beni Mellal",       "desc" => ""],
                    ["date" => "2006 — 2007", "role" => "Baccalaureate in Mathematical Science", "org" => "Beni Mellal",                     "desc" => ""],
                ],
            ],
            [
                "title" => "Awards",
                "items" => [
                    ["date" => "2009", "role" => "Best IT project in Morocco",                     "org" => "OFPPT — national competition", "desc" => "Remote control and security system for OFPPT institutions."],
                    ["date" => "2009", "role" => "Best student, Tadla-Azilal and Chaouia regions", "org" => "OFPPT",                        "desc" => ""],
                    ["date" => "2013", "role" => "SUPINFO Award for Entrepreneurship",             "org" => "SUPINFO Morocco",              "desc" => "Best corporate project, class of 2012."],
                ],
            ],
        ],
    ],

    // --- Section removed from the site (_disabled/_inc_works.php).
    "works" => [
        "subtitle" => "Consumer apps",
        "title"    => "On the stores",
        "items" => [
            [
                "title" => "ABC Kids learning",
                "desc"  => "A simple, free educational app helping toddlers learn phonics and trace the letters of the alphabet.",
                "cta"   => "Download",
            ],
            [
                "title" => "Words Kids Learning",
                "desc"  => "A word-learning game for preschool children and kindergartens.",
                "cta"   => "Download",
            ],
            [
                "title" => "Parcheesi Kabour",
                "desc"  => "The Moroccan take on the classic Parcheesi board game, Kabour edition.",
                "cta"   => "Soon",
            ],
        ],
    ],

    // --- Section removed from the site (_disabled/_inc_experiments.php).
    "experiments" => [
        "subtitle" => "Experiments &amp; open source",
        "title"    => "Web is fun.",
        "items" => [
            "CSS3 spin preloader + page preload",
            "Search input context animation",
            "Particle waves",
            "World 3D cards places",
        ],
    ],

    "about" => [
        "giga"     => "About",
        "title"    => "About me.",
        "subtitle" => "Physical security &amp; full-stack engineering.",
        "text"     => "I'm <strong>Amine ELKHAL</strong>, {age}, a Moroccan engineer and <strong>Director at BlackBytes</strong>, where I lead a team of 20 on large-scale security deployments: video surveillance, access control, intrusion detection, automatic barriers and bollards, centralised hypervision.<br /><br />I'm also a <strong>full-stack developer</strong>: I design and build the platforms that run those systems — <strong>OCTOPUS</strong>, <strong>OUBOUR</strong> — and I have taught web technologies for fifteen years at SUPINFO and YNOV.<br /><br />It's the same approach on both sides: understand the need, draw the architecture, and stay accountable through to commissioning.",
        "skills" => [
            [
                "title" => "Security &amp; integration",
                "list"  => ["Video surveillance", "Access control", "Intrusion detection", "Bollards &amp; barriers", "Centralised hypervision", "LPR / OCR, AI"],
            ],
            [
                "title" => "Development",
                "list"  => ["PHP / MySQL", "Node.js / React", "Java JSE, JEE, Android", "HTML5 / CSS3 / JS", "Architecture &amp; IS", "Project leadership"],
            ],
        ],
        // CV download button removed from the site.
        "cv" => "Download CV (PDF)",
    ],

    "contact" => [
        "giga"     => "Contact",
        "title"    => "Let's talk.",
        "subtitle" => "New projects, tenders, freelance inquiry or even a coffee.",
        "name"     => "Name",
        "email"    => "E-mail",
        "message"  => "Message",
        "send"     => "Send message",
        "default"  => "Default message",
        "close"    => "Close",
    ],

    "mailer" => [
        "method"  => "Method not allowed.",
        "wait"    => "Please wait a moment before sending another message.",
        "fill"    => "Please fill in every field.",
        "toolong" => "Your message is too long.",
        "email"   => "This e-mail address looks invalid.",
        "chars"   => "Invalid characters detected.",
        "failed"  => "The message could not be sent. Please write to %s directly.",
        "success" => "Thanks %s, your message is on its way. I will get back to you shortly.",
    ],

    "footer" => [
        "top"     => "Top",
        "contact" => "Contact",
    ],
];
