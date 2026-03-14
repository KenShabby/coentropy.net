<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="site-wrapper">

    <!-- Header -->
    <header class="site-header">
        <a href="https://www.coentropy.net" class="header-logo-link">
            <img src="/images/CoEntropy-1-01.png" width="180" alt="CoEntropy.net logo">
        </a>
        <p class="header-tagline">Computer Consulting &amp; IT Support for Sonoma County</p>

        <nav class="main-nav">
            <ul>
                <li><a href="https://www.coentropy.net/index.html">Home</a></li>
                <li><a href="https://www.coentropy.net/services.html">Services</a></li>
                <li><a href="https://www.coentropy.net/pricing.html">Pricing</a></li>
                <li><a href="https://www.coentropy.net/contact.html">Contact</a></li>
                <li><a href="https://www.coentropy.net/appointment.html">Appointments</a></li>
                <li><a href="https://www.coentropy.net/faq.html">FAQs</a></li>
                <li><a href="https://www.coentropy.net/about.html">About</a></li>
                <li class="current-page"><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
            </ul>
        </nav>
    </header>

    <!-- Content -->
    <div class="content-area">
