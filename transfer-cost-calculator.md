---
layout: page
title: Transfer Cost Calculator
description: Estimate South African property transfer costs, bond registration fees, and upfront cash needed when buying a home.
permalink: /transfer-cost-calculator/
background: white
hide_contact_strip: true
hide_page_nav: true
---

<style>
/* ==============================================
   Transfer Cost Calculator Page Styles
   ============================================== */

/* --- Section 1: Hero Banner --- */
#pagecontainer {
  padding-top: 0;
}
.hero-banner {
  position: relative;
  width: 100vw;
  height: 700px;
  overflow: hidden;
  margin-left: calc(-50vw + 50%);
  margin-top: 0;
}
.hero-banner [data-purpose="site-navigation"] {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}
.hero-banner img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center top;
  display: block;
}
.hero-heading {
  position: absolute;
  bottom: 10%;
  left: 32px;
  color: rgb(12, 80, 69);
  letter-spacing: 0;
  max-width: 800px;
}

/* --- Responsive (768px breakpoint) --- */
@media (max-width: 768px) {
  .hero-banner { height: 350px; overflow: hidden; }
  .hero-banner > img { height: 100%; object-fit: cover; }
  .hero-heading {
    top: auto;
    left: 50%;
    bottom: 6.18%;
    width: calc(100% - 32px);
    max-width: 414px;
    text-align: center;
    transform: translateX(-50%);
    font-size: 55px !important;
    line-height: 1.05;
  }
  .hero-banner [data-purpose="logo"] img {
    height: 52px;
  }
  .hero-banner [data-purpose="cta-button-header"] { display: none; }
  .hero-banner [data-purpose="mobile-menu-toggle"] {
    transform: scale(1.15);
    transform-origin: center;
  }
}

@media (min-width: 769px) {
  .hero-banner [data-purpose="site-navigation"] {
    padding-left: 0;
    padding-right: 0;
  }
  .hero-banner [data-purpose="site-navigation"] > div {
    max-width: none;
    padding-left: 300px;
    padding-right: 230px;
  }
  .hero-banner [data-purpose="site-navigation"] [data-purpose="logo"] img {
    height: 83px;
  }
  .hero-banner [data-purpose="cta-button-header"] {
    transform: translateX(-70px);
  }
  .hero-heading {
    bottom: 10%;
    left: 230px;
    width: 800px;
    max-width: calc(100vw - 460px);
    font-size: 76px !important;
  }
}
</style>

<!-- ============================================ -->
<!-- Section 1: Hero Banner                       -->
<!-- ============================================ -->
<div class="hero-banner">
  {% include nav.html variant="hero" %}
  <img src="/assets/img/hero/bond-calculator-hero.png" alt="Happy family in front of their new home" loading="lazy">
  <h1
    class="hero-heading heading-stacked text-6xl md:text-8xl lg:text-9xl font-bold"
    data-purpose="hero-headline">
    Apply for<br>a bond today!
  </h1>
</div>

{% include transfer-cost-calculator.html %}

{% include 2-card-calc-section.html %}
