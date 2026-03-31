<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="ribbon-container">
    <div class="ribbon r1"></div>
    <div class="ribbon r2"></div>
    <div class="ribbon r3"></div>
</div>

<nav class="navbar navbar-expand-lg">
    <div class="container d-flex align-items-center justify-content-start">
        <a class="navbar-brand p-0" href="#">
            <img src="<?= $nav['logo'] ?>" alt="IronPDF Logo" class="nav-logo-custom">
        </a>

        <div class="d-flex align-items-center ms-4">
            <?php foreach($nav['links'] as $link): ?>
                <a href="<?= $link['url'] ?>" class="nav-link-custom">
                    <?= $link['label'] ?> <?= isset($link['dropdown']) && $link['dropdown'] ? '<small>▼</small>' : '' ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</nav>

<section class="hero-wrap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="brand-group">
                    <img src="<?= $hero['logo'] ?>" alt="IronPDF Logo" class="iron-logo">
                    <div class="logo-text">
                        <span class="iron-white"><?= $hero['text']['iron'] ?></span>
                        <span class="pdf-red"><?= $hero['text']['pdf'] ?></span>
                        <span class="for-cpp"><?= $hero['text']['for'] ?></span>
                    </div>
                </div>
                <div class="hero-subtitle"><?= $hero['subtitle'] ?></div>
                <h1 class="hero-title"><?= $hero['title1'] ?></h1>
                <h1 class="hero-title"><?= $hero['title2'] ?></h1>
                <p class="mt-3" style="color: #9c8fb0; font-size: 14px;"><?= $hero['comingSoon'] ?></p>
            </div>

            <div class="col-lg-5">
                <div class="cpp-doc-container">
                    <div class="cpp-doc-icon"></div>
                    <img src="<?= $hero['images']['logo'] ?>" alt="C++ Logo" class="cpp-logo">
                    <img src="<?= $hero['images']['banner'] ?>" alt=".CPP Label" class="cpp-banner">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2 class="cta-header"><?= $cta['header'] ?></h2>
                <p class="mb-0 fw-semibold"><?= $cta['subtitle'] ?></p>

                <div class="email-pill">
                    <input type="text" placeholder="<?= $cta['placeholder'] ?>">
                    <button class="btn-signup"><?= $cta['buttonText'] ?> <span>▸</span></button>
                </div>

                <div class="bottom-links">
                    <span class="status-tag"><?= $cta['statusTag'] ?></span>
                    <span class="opacity-75"><?= $cta['description'] ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="info-section">
    <div class="container text-center">
        <div class="headline-container">
            <h2 class="main-title"><?= $infoSection['mainTitle'] ?></h2>
            <div class="coming-soon-badge"><?= $infoSection['badge'] ?></div>
        </div>

        <!-- Features -->
        <div class="features-inline">
            <?php foreach($features as $index => $feature): ?>
                <div class="feature-point">
                    <span class="hash">#</span> <?= $feature ?>
                </div>
                <?php if ($index < count($features) - 1): ?>
                    <div class="divider">|</div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <div class="description-block">
            <?php foreach($infoSection['description'] as $desc): ?>
                <p><?= $desc ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="why-make-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 d-flex justify-content-center">
                <div class="conversion-graphic-wrap">
                    <img src="<?= $whyMake['images']['icon1'] ?>" alt="HTML5 Icon" class="icon-html">
                    <img src="<?= $whyMake['images']['arrow'] ?>" alt="C++ Conversion" class="icon-arrow">
                    <img src="<?= $whyMake['images']['icon2'] ?>" alt="PDF Icon" class="icon-pdf">
                </div>
            </div>
            <div class="col-lg-7">
                <h2 class="why-title"><?= $whyMake['title'] ?> <span><?= $whyMake['highlight'] ?></span></h2>
                <div class="why-text-content">
                    <?php foreach($whyMake['paragraphs'] as $para): ?>
                        <p><?= $para ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="early-access-section">
    <div class="container">
        <h2 class="access-title"><?= $earlyAccess['title'] ?></h2>
        <p class="access-description"><?= $earlyAccess['description'] ?></p>

        <!-- Status Cards -->
        <div class="status-cards-row">
            <?php foreach($statusCards as $card): ?>
                <div class="status-card">
                    <div class="pill <?= $card['pill'] == '# Released' ? 'pill-released' : 'pill-coming' ?>">
                        <?= $card['pill'] ?>
                    </div>
                    <div class="card-text">
                        <span class="card-brand"><?= $card['brand'] ?></span>
                        <span class="card-pdf-red"><?= $card['pdfColor'] ?></span>
                        <div class="card-lang"><?= $card['lang'] ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-beta-signup">
    <div class="container text-center">
        <h2 class="beta-headline mb-4">
            <span class="text-white fw-bold"><?= $betaSignup['text1'] ?></span>
            <span class="text-light-purple fw-bold"><?= $betaSignup['text2'] ?></span>
            <span class="status-tag"><?= $betaSignup['statusTag'] ?></span>
        </h2>

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="beta-email-pill">
                    <input type="text" placeholder="<?= $betaSignup['placeholder'] ?>">
                    <button class="btn-beta-signup"><?= $betaSignup['buttonText'] ?> <span>▸</span></button>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>