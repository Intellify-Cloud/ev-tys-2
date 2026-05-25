---
layout: page
title: Bond Calculator
background: white
hide_contact_strip: true
hide_page_nav: true
---

<style>
/* ==============================================
   Bond Calculator Page Styles
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
  bottom: 24px;
  left: 32px;
  color: rgb(12, 80, 69);
  letter-spacing: 0;
  max-width: 800px;
}

/* --- Section 2: Calculator --- */
.calculator-section {
  background: #ffffff;
  padding: 60px 80px;
  text-align: center;
  max-width: 1100px;
  margin: 0 auto;
}
.calculator-section h2 {
  color: #1a4a3a;
  font-weight: 700;
  margin-bottom: 12px;
}
.calculator-subtext {
  font-size: 0.95rem;
  color: #4a4a4a;
  max-width: 560px;
  margin: 0 auto 32px;
  line-height: 1.6;
}
.calculator-wrapper {
  max-width: 860px;
  margin: 0 auto;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}
.calculator-wrapper iframe {
  width: 100%;
  height: 420px;
  border: 0;
  display: block;
}
.bond-calc {
  min-height: 75vh;
}
/* --- Responsive (768px breakpoint) --- */
@media (max-width: 768px) {
  .hero-banner { height: auto; overflow: visible; }
  .hero-banner img { height: auto; }
  .hero-heading {
    left: 16px;
    bottom: 16px;
  }
  .calculator-section { padding: 32px 16px; }
  .calculator-wrapper iframe { height: 560px; }
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
  .hero-heading {
    top: 285px;
    bottom: auto;
    left: 230px;
    width: 800px;
    max-width: calc(100vw - 460px);
    font-size: 80px !important;
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

<!-- ============================================ -->
<!-- Section 2: Bond Repayment Calculator         -->
<!-- ============================================ -->
<div class="calculator-section">
  <h2>Bond Repayment Calculator</h2>
  <p class="calculator-subtext">
    Use our simple bond repayment calculator to estimate your monthly home loan repayments based on the purchase price, deposit, interest rate and loan term.
  </p>

  <div class="calculator-wrapper">
    <iframe class="bond-calc" frameborder="0"
        src="https://www.ooba.co.za/calculators/bond-repayment-calculator?iframe=true&iftype=evogroup"
        title="Bond Calculator"></iframe>
  </div>
</div>

{% include 2-card-calc-section.html %}
