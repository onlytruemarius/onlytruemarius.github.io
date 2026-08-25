<?php

/*
|--------------------------------------------------------------------------
| Inhalte
|--------------------------------------------------------------------------
|
| Neue Abschnitte und Beiträge werden direkt in diesem Array ergänzt.
| Das Datum wird für die Sortierung im Format YYYY-MM-DD angegeben.
|
*/

$sections = [
    'medicine' => [
        'title' => 'Human Medicine',
        'period' => 'from 2026',
        'description' => 'Notes from my medical studies at TU Dresden.',

        'posts' => [
            'beginning-medicine' => [
                'date' => '2026-10-01',
                'title' => 'Beginning medical school',
                'lead' => 'A new chapter at TU Dresden.',
                'content' => [
                    'In October 2026, I will begin studying human medicine at Technische Universität Dresden.',
                    'This section will collect notes and observations from my studies and the transition from political science and emergency medicine to medical education.'
                ]
            ]
        ]
    ],

    'emt-training' => [
        'title' => 'EMT Training',
        'period' => '2026',
        'description' => 'Notes from my EMT training in Hamburg.',

        'posts' => [
            'first-day' => [
                'date' => '2026-06-08',
                'title' => 'First day of EMT training',
                'lead' => 'Starting my training as a Rettungssanitäter in Hamburg.',
                'content' => [
                    'Today marked the beginning of my EMT training at DRK-Schwesternschaft Hamburg.',
                    'The training combines theoretical instruction, clinical experience and practical work in emergency medical services. I am especially interested in how medical knowledge, communication and decision-making come together in emergency situations.'
                ]
            ],

            'why-emergency-medicine' => [
                'date' => '2026-05-20',
                'title' => 'Why emergency medicine?',
                'lead' => 'Some thoughts before starting the training.',
                'content' => [
                    'Emergency medicine combines practical responsibility, teamwork and direct contact with people in difficult situations.',
                    'For me, the training is also an opportunity to gain practical experience before beginning my medical studies at TU Dresden.'
                ]
            ],

            'preparing-for-training' => [
                'date' => '2026-04-14',
                'title' => 'Preparing for Hamburg',
                'lead' => 'Organization, reading and anticipation.',
                'content' => [
                    'Before the training begins, there are practical questions to answer: accommodation, schedules, equipment and preparation.',
                    'At the same time, I am reviewing basic anatomy and physiology and familiarizing myself with the structure of emergency medical services in Germany.'
                ]
            ]
        ]
    ],

    'political-science' => [
        'title' => 'Political Science',
        'period' => '2021–2026',
        'description' => 'Studies and academic work at Leuphana University Lüneburg.',

        'posts' => [
            'bachelor-thesis' => [
                'date' => '2026-06-30',
                'title' => 'My bachelor thesis',
                'lead' => 'Herbert Marcuse and predictive policing technology.',
                'content' => [
                    'My bachelor thesis examines Herbert Marcuse’s theory of one-dimensional society as a critique of predictive policing technology.',
                    'The thesis asks how supposedly neutral technologies can reproduce existing social structures and restrict the political imagination of alternative forms of society.',
                    'Its title is: “Criticizing the system is the most revolutionary act – Herbert Marcuse’s theory of one-dimensional society as a critique of predictive policing technology.”'
                ]
            ],

            'finishing-my-degree' => [
                'date' => '2026-06-15',
                'title' => 'Finishing my degree',
                'lead' => 'Looking back at five years of political science.',
                'content' => [
                    'After five years at Leuphana University Lüneburg, I completed my B.A. in Political Science.',
                    'My studies focused on political theory, institutions and the relationship between society, technology and power.'
                ]
            ]
        ]
    ],

    'university-politics' => [
        'title' => 'University Politics',
        'period' => '2022–2025',
        'description' => 'Student representation and academic self-governance.',

        'posts' => [
            'academic-senate' => [
                'date' => '2025-09-30',
                'title' => 'Academic Senate',
                'lead' => 'The end of my term in the Academic Senate.',
                'content' => [
                    'From October 2024 to September 2025, I was a member of the Academic Senate at Leuphana University Lüneburg.',
                    'The Senate offered an important perspective on academic self-governance and the different interests that shape a university.'
                ]
            ],

            'student-parliament' => [
                'date' => '2025-09-15',
                'title' => 'Student Parliament',
                'lead' => 'Reflections on student representation.',
                'content' => [
                    'From February 2022 to November 2025, I was a member of the Student Parliament and various student committees.',
                    'This work involved political debate, organizational questions and the representation of student interests.'
                ]
            ],

            'asta-spokesperson' => [
                'date' => '2024-08-31',
                'title' => 'A year as AStA spokesperson',
                'lead' => 'Looking back at my term in the General Students’ Committee.',
                'content' => [
                    'From July 2023 to August 2024, I served as an elected spokesperson of the General Students’ Committee at Leuphana University Lüneburg.',
                    'The role included political representation, coordination and responsibility for organizational processes.'
                ]
            ]
        ]
    ],

    'local-politics' => [
        'title' => 'Local Politics',
        'period' => '2021–2026',
        'description' => 'My work in the City Council of Amöneburg.',

        'posts' => [
            'five-years-city-council' => [
                'date' => '2026-03-31',
                'title' => 'Five years in the City Council',
                'lead' => 'The end of my term in Amöneburg.',
                'content' => [
                    'From March 2021 to March 2026, I served as a member of the City Council of Amöneburg.',
                    'Local politics makes the effects of political decisions especially visible. It also shows how important direct discussion, compromise and democratic participation are.'
                ]
            ]
        ]
    ],

    'voluntary-social-year' => [
        'title' => 'Voluntary Social Year',
        'period' => '2020–2021',
        'description' => 'Social work in Frankfurt and the Lahn-Dill/Eder region.',

        'posts' => [
            'youth-work-center' => [
                'date' => '2021-07-31',
                'title' => 'Youth work in Lahn-Dill/Eder',
                'lead' => 'The second part of my Voluntary Social Year.',
                'content' => [
                    'From February to July 2021, I completed the second part of my Voluntary Social Year at a youth work center in the Lahn-Dill/Eder region.',
                    'The work gave me practical experience in youth work, communication and the organization of social projects.'
                ]
            ],

            'bahnhofsmission-frankfurt' => [
                'date' => '2021-01-31',
                'title' => 'Bahnhofsmission Frankfurt',
                'lead' => 'The first part of my Voluntary Social Year.',
                'content' => [
                    'From August 2020 to January 2021, I worked at Bahnhofsmission Frankfurt.',
                    'The experience shaped my understanding of social inequality, practical assistance and respectful communication with people in difficult situations.'
                ]
            ]
        ]
    ]
];


/*
|--------------------------------------------------------------------------
| Hilfsfunktionen
|--------------------------------------------------------------------------
*/

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function formatDate(string $date): string
{
    $timestamp = strtotime($date);

    if ($timestamp === false) {
        return $date;
    }

    return date('d.m.Y', $timestamp);
}

function sectionUrl(string $section): string
{
    return 'index.php?section=' . rawurlencode($section) . '#posts';
}

function postUrl(string $section, string $post): string
{
    return 'index.php?section=' . rawurlencode($section)
        . '&amp;post=' . rawurlencode($post)
        . '#entry';
}


/*
|--------------------------------------------------------------------------
| Auswahl des Abschnitts
|--------------------------------------------------------------------------
*/

$sectionSlug = isset($_GET['section'])
    ? (string) $_GET['section']
    : array_key_first($sections);

if (!isset($sections[$sectionSlug])) {
    $sectionSlug = array_key_first($sections);
}

$selectedSection = $sections[$sectionSlug];


/*
|--------------------------------------------------------------------------
| Beiträge nach Datum sortieren
|--------------------------------------------------------------------------
*/

$sortedPosts = $selectedSection['posts'];

uasort(
    $sortedPosts,
    static function (array $firstPost, array $secondPost): int {
        return strcmp($secondPost['date'], $firstPost['date']);
    }
);


/*
|--------------------------------------------------------------------------
| Auswahl des Beitrags
|--------------------------------------------------------------------------
*/

$postSlug = isset($_GET['post'])
    ? (string) $_GET['post']
    : array_key_first($sortedPosts);

if (!isset($sortedPosts[$postSlug])) {
    $postSlug = array_key_first($sortedPosts);
}

$selectedPost = $sortedPosts[$postSlug];


/*
|--------------------------------------------------------------------------
| Metadaten
|--------------------------------------------------------------------------
*/

$siteName = 'Marius Michel';
$pageTitle = $selectedPost['title'] . ' — ' . $siteName;
$pageDescription = $selectedPost['lead'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title><?= e($pageTitle) ?></title>

    <meta
        name="description"
        content="<?= e($pageDescription) ?>"
    >

    <link
        rel="icon"
        type="image/png"
        href="https://em-content.zobj.net/source/apple/391/waving-hand_1f44b.png"
    >

    <style>
        :root {
            --white: #ffffff;
            --black: #111111;
            --orange: #f15a24;
            --grey: #6d6d6d;
            --light-grey: #ededed;
            --page-width: 1500px;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            margin: 0;
            background: var(--white);
            color: var(--black);
            font-family: "Courier New", Courier, monospace;
            font-size: 1rem;
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        a:focus-visible {
            outline: 3px solid var(--orange);
            outline-offset: 3px;
        }

        /*
        |--------------------------------------------------------------------------
        | Header
        |--------------------------------------------------------------------------
        */

        .site-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
            width: min(calc(100% - 3rem), var(--page-width));
            margin: 0 auto;
            padding: 1.5rem 0;
            border-bottom: 2px solid var(--black);
        }

        .wordmark {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .wordmark::before {
            width: 1.25rem;
            height: 1.25rem;
            flex: 0 0 auto;
            background: var(--orange);
            border-radius: 50%;
            content: "";
        }

        .header-info {
            margin: 0;
            color: var(--grey);
            font-size: 0.75rem;
            letter-spacing: 0.08em;
            text-align: right;
            text-transform: uppercase;
        }

        /*
        |--------------------------------------------------------------------------
        | Intro
        |--------------------------------------------------------------------------
        */

        .intro {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 2fr);
            gap: 3rem;
            width: min(calc(100% - 3rem), var(--page-width));
            margin: 0 auto;
            padding: clamp(3rem, 7vw, 7rem) 0;
            border-bottom: 2px solid var(--black);
        }

        .eyebrow {
            margin: 0;
            color: var(--orange);
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .intro h1 {
            max-width: 1000px;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: clamp(2.75rem, 6vw, 6.5rem);
            font-weight: 900;
            letter-spacing: -0.06em;
            line-height: 0.9;
            text-transform: uppercase;
        }

        .intro-text {
            grid-column: 2;
            max-width: 700px;
            margin: 0;
            font-size: clamp(1rem, 1.5vw, 1.25rem);
        }

        /*
        |--------------------------------------------------------------------------
        | Dreispaltiges Blogsystem
        |--------------------------------------------------------------------------
        */

        .blog {
            display: grid;
            grid-template-columns:
                minmax(190px, 0.85fr)
                minmax(230px, 1.1fr)
                minmax(380px, 2.5fr);
            width: min(calc(100% - 3rem), var(--page-width));
            margin: 0 auto;
            border-bottom: 2px solid var(--black);
        }

        .column {
            min-width: 0;
            padding: 2rem;
        }

        .column:first-child {
            padding-left: 0;
        }

        .column:last-child {
            padding-right: 0;
        }

        .column + .column {
            border-left: 1px solid var(--black);
        }

        .column-title {
            margin: 0 0 2rem;
            color: var(--grey);
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        /*
        |--------------------------------------------------------------------------
        | Linke Spalte: CV-Abschnitte
        |--------------------------------------------------------------------------
        */

        .section-navigation {
            position: sticky;
            top: 2rem;
        }

        .section-list {
            display: flex;
            flex-direction: column;
            gap: 0;
            margin: 0;
            padding: 0;
            list-style: none;
            border-top: 1px solid var(--light-grey);
        }

        .section-link {
            display: block;
            padding: 1.1rem 0;
            border-bottom: 1px solid var(--light-grey);
            transition:
                color 150ms ease,
                padding-left 150ms ease;
        }

        .section-link:hover {
            padding-left: 0.5rem;
            color: var(--orange);
        }

        .section-link[aria-current="true"] {
            padding-left: 0.75rem;
            color: var(--black);
            border-left: 0.5rem solid var(--orange);
        }

        .section-name {
            display: block;
            font-weight: 700;
            line-height: 1.25;
        }

        .section-period {
            display: block;
            margin-top: 0.3rem;
            color: var(--grey);
            font-size: 0.75rem;
        }

        /*
        |--------------------------------------------------------------------------
        | Mittlere Spalte: Beiträge
        |--------------------------------------------------------------------------
        */

        .posts-header {
            margin-bottom: 2rem;
        }

        .posts-header h2 {
            margin: 0.3rem 0 0.75rem;
            font-family: Arial, Helvetica, sans-serif;
            font-size: clamp(1.6rem, 2.5vw, 2.5rem);
            letter-spacing: -0.04em;
            line-height: 1;
        }

        .posts-description {
            margin: 0;
            color: var(--grey);
            font-size: 0.85rem;
        }

        .post-list {
            margin: 0;
            padding: 0;
            list-style: none;
            border-top: 1px solid var(--light-grey);
        }

        .post-link {
            display: block;
            padding: 1.25rem 0;
            border-bottom: 1px solid var(--light-grey);
        }

        .post-link:hover .post-title {
            color: var(--orange);
        }

        .post-link[aria-current="true"] {
            margin-inline: -1rem;
            padding-inline: 1rem;
            background: var(--orange);
            color: var(--white);
        }

        .post-link[aria-current="true"] .post-date,
        .post-link[aria-current="true"] .post-lead {
            color: var(--white);
        }

        .post-date {
            display: block;
            margin-bottom: 0.35rem;
            color: var(--grey);
            font-size: 0.7rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .post-title {
            display: block;
            font-weight: 700;
            line-height: 1.3;
        }

        .post-lead {
            display: block;
            margin-top: 0.5rem;
            color: var(--grey);
            font-size: 0.8rem;
            line-height: 1.4;
        }

        /*
        |--------------------------------------------------------------------------
        | Rechte Spalte: Artikel
        |--------------------------------------------------------------------------
        */

        .article {
            max-width: 850px;
        }

        .article-header {
            padding-bottom: 2rem;
            border-bottom: 2px solid var(--black);
        }

        .article-meta {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.5rem 1rem;
            margin-bottom: 1.5rem;
        }

        .article-category {
            display: inline-block;
            padding: 0.2rem 0.5rem;
            background: var(--orange);
            color: var(--white);
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .article-date {
            color: var(--grey);
            font-size: 0.75rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .article h2 {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: clamp(2.5rem, 5vw, 5.5rem);
            font-weight: 900;
            letter-spacing: -0.06em;
            line-height: 0.92;
            text-transform: uppercase;
        }

        .article-lead {
            max-width: 700px;
            margin: 1.5rem 0 0;
            font-size: clamp(1.1rem, 1.8vw, 1.4rem);
            font-weight: 700;
            line-height: 1.45;
        }

        .article-body {
            max-width: 720px;
            padding: 2rem 0 4rem;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.05rem;
            line-height: 1.75;
        }

        .article-body p {
            margin: 0 0 1.5rem;
        }

        .article-body p:first-child::first-letter {
            float: left;
            margin: 0.08em 0.12em 0 0;
            color: var(--orange);
            font-size: 4rem;
            font-weight: 900;
            line-height: 0.8;
        }

        /*
        |--------------------------------------------------------------------------
        | Footer
        |--------------------------------------------------------------------------
        */

        .site-footer {
            display: flex;
            justify-content: space-between;
            gap: 2rem;
            width: min(calc(100% - 3rem), var(--page-width));
            margin: 0 auto;
            padding: 2rem 0;
            color: var(--grey);
            font-size: 0.8rem;
        }

        .site-footer p {
            margin: 0;
        }

        .site-footer a {
            text-decoration: underline;
            text-decoration-thickness: 1px;
            text-underline-offset: 0.25em;
        }

        .site-footer a:hover {
            color: var(--orange);
        }

        /*
        |--------------------------------------------------------------------------
        | Tablet
        |--------------------------------------------------------------------------
        */

        @media (max-width: 1050px) {
            .blog {
                grid-template-columns: 220px minmax(0, 1fr);
            }

            .sections-column {
                grid-row: 1 / span 2;
            }

            .posts-column {
                border-bottom: 1px solid var(--black);
            }

            .article-column {
                grid-column: 2;
            }

            .column:last-child {
                padding-right: 0;
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Smartphone
        |--------------------------------------------------------------------------
        */

        @media (max-width: 720px) {
            .site-header,
            .intro,
            .blog,
            .site-footer {
                width: min(calc(100% - 2rem), var(--page-width));
            }

            .site-header {
                align-items: flex-start;
                flex-direction: column;
                gap: 0.75rem;
            }

            .header-info {
                text-align: left;
            }

            .intro {
                grid-template-columns: 1fr;
                gap: 1.25rem;
            }

            .intro-text {
                grid-column: auto;
            }

            .blog {
                display: block;
            }

            .column {
                padding: 2rem 0;
            }

            .column + .column {
                border-top: 1px solid var(--black);
                border-left: 0;
            }

            .section-navigation {
                position: static;
            }

            .section-list {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 0;
            }

            .section-link {
                height: 100%;
                padding: 1rem 0.75rem;
            }

            .section-link[aria-current="true"] {
                padding-left: 0.75rem;
                background: var(--orange);
                color: var(--white);
                border-left: 0;
            }

            .section-link[aria-current="true"] .section-period {
                color: var(--white);
            }

            .post-link[aria-current="true"] {
                margin-inline: 0;
            }

            .article-body {
                padding-bottom: 2rem;
            }

            .site-footer {
                align-items: flex-start;
                flex-direction: column;
                gap: 0.5rem;
            }
        }

        @media (max-width: 430px) {
            .section-list {
                grid-template-columns: 1fr;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            .section-link {
                transition: none;
            }
        }
    </style>
</head>

<body>

<header class="site-header">
    <a class="wordmark" href="index.php">
        Marius Michel
    </a>

    <p class="header-info">
        Hamburg · Political Science · Emergency Medicine
    </p>
</header>

<main>
    <section class="intro">
        <p class="eyebrow">Personal notes / CV</p>

        <h1>
            Work, education and public engagement.
        </h1>

        <p class="intro-text">
            A chronological collection of notes organized around the
            different stages of my education and public work.
        </p>
    </section>

    <div class="blog">

        <!-- Linke Spalte: Abschnitte -->
        <aside class="column sections-column">
            <nav
                class="section-navigation"
                aria-label="CV sections"
            >
                <p class="column-title">01 / Sections</p>

                <ul class="section-list">
                    <?php foreach ($sections as $currentSectionSlug => $section): ?>
                        <li>
                            <a
                                class="section-link"
                                href="<?= e(sectionUrl($currentSectionSlug)) ?>"
                                <?= $currentSectionSlug === $sectionSlug
                                    ? 'aria-current="true"'
                                    : '' ?>
                            >
                                <span class="section-name">
                                    <?= e($section['title']) ?>
                                </span>

                                <span class="section-period">
                                    <?= e($section['period']) ?>
                                </span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </aside>

        <!-- Mittlere Spalte: Beiträge -->
        <section class="column posts-column" id="posts">
            <p class="column-title">02 / Entries</p>

            <header class="posts-header">
                <p class="eyebrow">
                    <?= e($selectedSection['period']) ?>
                </p>

                <h2><?= e($selectedSection['title']) ?></h2>

                <p class="posts-description">
                    <?= e($selectedSection['description']) ?>
                </p>
            </header>

            <ol class="post-list">
                <?php foreach ($sortedPosts as $currentPostSlug => $post): ?>
                    <li>
                        <a
                            class="post-link"
                            href="<?= postUrl($sectionSlug, $currentPostSlug) ?>"
                            <?= $currentPostSlug === $postSlug
                                ? 'aria-current="true"'
                                : '' ?>
                        >
                            <time
                                class="post-date"
                                datetime="<?= e($post['date']) ?>"
                            >
                                <?= e(formatDate($post['date'])) ?>
                            </time>

                            <span class="post-title">
                                <?= e($post['title']) ?>
                            </span>

                            <span class="post-lead">
                                <?= e($post['lead']) ?>
                            </span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ol>
        </section>

        <!-- Rechte Spalte: gewählter Beitrag -->
        <section class="column article-column" id="entry">
            <p class="column-title">03 / Selected entry</p>

            <article class="article">
                <header class="article-header">
                    <div class="article-meta">
                        <span class="article-category">
                            <?= e($selectedSection['title']) ?>
                        </span>

                        <time
                            class="article-date"
                            datetime="<?= e($selectedPost['date']) ?>"
                        >
                            <?= e(formatDate($selectedPost['date'])) ?>
                        </time>
                    </div>

                    <h2><?= e($selectedPost['title']) ?></h2>

                    <p class="article-lead">
                        <?= e($selectedPost['lead']) ?>
                    </p>
                </header>

                <div class="article-body">
                    <?php foreach ($selectedPost['content'] as $paragraph): ?>
                        <p><?= e($paragraph) ?></p>
                    <?php endforeach; ?>
                </div>
            </article>
        </section>

    </div>
</main>

<footer class="site-footer">
    <p>
        &copy; <?= date('Y') ?> Marius Michel
    </p>

    <p>
        <a href="mailto:kontakt@marius-michel.de">
            kontakt@marius-michel.de
        </a>
    </p>
</footer>

</body>
</html>
