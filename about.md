---
layout: page
title: About Mzansi Bonds
description: Learn how Mzansi Bonds helps South Africans take ownership of their future through property with clear bond guidance and better bank deals.
permalink: /about
hide_contact_strip: true
hide_page_nav: true
---

<style>
#pagecontainer {
  max-width: none;
  padding: 0;
}

.about-hero {
  position: relative;
  width: 100vw;
  min-height: 100vh;
  margin-left: calc(-50vw + 50%);
  display: flex;
  flex-direction: column;
  overflow: hidden;
  background-image: url("{{ site.baseurl }}/assets/img/sections/contact-bg-1900.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.about-hero::before {
  content: "";
  position: absolute;
  inset: 0;
  z-index: 1;
  background: rgba(240, 237, 230, 0.28);
}

.about-hero [data-purpose="site-navigation"] {
  position: relative;
  z-index: 3;
}

.about-hero__inner {
  position: relative;
  z-index: 2;
  flex: 1;
  width: 100%;
  max-width: 1280px;
  margin: 0 auto;
  padding: 52px 80px 80px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.about-hero__content {
  max-width: 900px;
  text-align: center;
}

.about-hero__title {
  margin: 0 0 28px;
  color: #1a4a3a;
  font-size: clamp(56px, 7vw, 78px);
  font-weight: 900;
  line-height: 0.98;
  letter-spacing: 0;
}

.about-hero__copy {
  margin: 0 auto;
  color: rgb(94, 32, 63);
  font-size: 24px;
  font-weight: 600;
  line-height: 1.5;
}

.about-hero__tagline {
  margin-bottom: 16px;
  color: #e8522a;
  font-size: 25.92px;
  font-weight: 800;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

@media (max-width: 768px) {
  .about-hero__inner {
    padding: 32px 24px 56px;
    align-items: flex-start;
  }

  .about-hero__content {
    padding-top: 32px;
  }

  .about-hero__title {
    font-size: 48px;
  }

  .about-hero__copy {
    font-size: 19px;
    line-height: 1.48;
  }

  .about-hero__tagline {
    font-size: 21.6px;
  }
}
</style>

<section class="about-hero">
  {% include nav.html variant="hero" %}
  <div class="about-hero__inner">
    <div class="about-hero__content">
      <h3 class="about-hero__tagline">About Mzansi Bonds</h3>
      <h2 class="about-hero__title">OWN YOUR DREAM</h2>
      <p class="about-hero__copy">
        Mzansi Bonds empowers South Africans to take ownership of their future through property.
        We guide people through the bond process with clarity, simplify what can feel complex, and
        secure the very best deals from the banks - fast tracking your journey to property ownership.
      </p>
    </div>
  </div>
</section>
