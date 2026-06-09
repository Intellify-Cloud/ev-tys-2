---
layout: page
title: How It Works
description: See how Mzansi Bonds helps you get pre-approved, find your dream property, and secure the best possible bond.
permalink: /how-it-works/
hide_contact_strip: true
hide_page_nav: true
---

<style>
#pagecontainer {
  max-width: none;
  padding: 0;
}

.how-hero {
  position: relative;
  width: 100vw;
  min-height: 100vh;
  margin-left: calc(-50vw + 50%);
  overflow: hidden;
  background-color: #f0ede0;
  background-image: url("{{ site.baseurl }}/assets/img/sections/contact-bg-1900.jpg");
  background-position: center top;
  background-repeat: repeat-y;
  background-size: cover;
}

.how-hero::before {
  content: "";
  position: absolute;
  inset: 0;
  z-index: 1;
  background: rgba(240, 237, 230, 0.24);
}

.how-hero [data-purpose="site-navigation"] {
  position: relative;
  z-index: 3;
}

.how-hero__inner {
  position: relative;
  z-index: 2;
  width: 100%;
  max-width: 1120px;
  margin: 0 auto;
  padding: 52px 80px 108px;
}

.how-hero__intro {
  text-align: center;
  margin-bottom: 92px;
}

.how-hero__title {
  margin: 0 0 20px;
  color: #0c5045;
  font-size: clamp(52px, 6vw, 76px);
  font-weight: 900;
  line-height: 1;
  letter-spacing: 0;
}

.how-hero__subtitle {
  margin: 0;
  color: #0c5045;
  font-size: 18px;
  font-weight: 800;
  line-height: 1.35;
}

.how-steps {
  display: grid;
  gap: 86px;
}

.how-step {
  position: relative;
  display: block;
  padding-left: 92px;
}

.how-step__number {
  position: absolute;
  top: -15px;
  left: 92px;
  z-index: 1;
  width: 86px;
  height: 86px;
  margin: 0;
  border-radius: 999px;
  background: #ff4a22;
  color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 34px;
  font-weight: 900;
  line-height: 1;
  transform: translateX(-50%);
}

.how-step__content {
  min-width: 0;
}

.how-step__heading {
  min-height: 49px;
  margin: 0 0 26px;
  padding: 8px 36px 7px 68px;
  background: rgba(160, 211, 193, 0.86);
  color: #0c5045;
  font-size: clamp(28px, 3.2vw, 36px);
  font-weight: 900;
  line-height: 1.08;
  letter-spacing: 0.01em;
  text-transform: uppercase;
}

.how-step__body {
  max-width: 900px;
  padding-left: 68px;
  color: #0c5045;
  line-height: 1.55;
}

.how-step__body p {
  margin: 0 0 28px;
  font-size: 18px;
  font-weight: 600;
}

.how-step__body p:last-child {
  margin-bottom: 0;
}

.how-step__link {
  color: #ff4a22;
  text-decoration: none;
}

.how-step__link:hover {
  text-decoration: underline;
}

.how-actions {
  display: flex;
  justify-content: center;
  gap: 56px;
  margin-top: 120px;
}

.how-actions__button {
  min-width: 365px;
  border-radius: 999px;
  padding: 20px 34px;
  color: #ffffff;
  font-size: 18px;
  font-weight: 900;
  line-height: 1;
  text-align: center;
  text-decoration: none;
  transition: transform 160ms ease, opacity 160ms ease;
}

.how-actions__button:hover {
  opacity: 0.9;
  transform: translateY(-1px);
}

.how-actions__button--contact {
  background: #ff4a22;
}

.how-actions__button--calculator {
  background: #5e203f;
}

@media (max-width: 900px) {
  .how-hero__inner {
    padding: 36px 24px 72px;
  }

  .how-hero__intro {
    margin-bottom: 64px;
  }

  .how-step {
    padding-left: 68px;
  }

  .how-step__number {
    left: 68px;
    width: 64px;
    height: 64px;
    font-size: 26px;
  }

  .how-step__heading {
    padding: 9px 18px 8px 42px;
    font-size: 25px;
  }

  .how-step__body {
    padding-left: 42px;
    font-size: 16px;
  }

  .how-actions {
    flex-direction: column;
    gap: 20px;
    margin-top: 72px;
  }

  .how-actions__button {
    min-width: 0;
    width: 100%;
  }
}

@media (max-width: 560px) {
  .how-hero__title {
    font-size: 44px;
  }

  .how-step {
    padding-left: 0;
  }

  .how-step__number {
    position: absolute;
    top: -7.5px;
    left: 0;
    margin: 0;
    transform: translateX(-50%);
  }

  .how-step__heading {
    padding-left: 92px;
    font-size: 20px;
  }

  .how-step__body {
    padding-left: 0;
  }
}

@media (min-width: 375px) and (max-width: 425px) {
  .how-hero__inner {
    width: 90%;
    padding-left: 0;
    padding-right: 0;
  }

  .how-hero__title {
    font-size: 42px;
  }

  .how-hero__subtitle {
    font-size: 16px;
  }

  .how-step__number {
    left: 32px;
    font-size: 24px;
    transform: translateX(-50%);
  }

  .how-step__heading {
    width: calc(100% - 32px);
    margin-left: 32px;
    padding-left: 24px;
    padding-right: 24px;
    font-size: 18px;
    text-align: center;
  }

  .how-step__body p {
    font-size: 16px;
  }

  .how-actions__button {
    font-size: 16px;
  }
}

@media (min-width: 480px) and (max-width: 576px) {
  .how-step__number {
    left: 32px;
  }

  .how-step__heading {
    display: flex;
    align-items: center;
    justify-content: center;
    width: calc(100% - 32px);
    margin-left: 32px;
    padding-left: 14px;
    padding-right: 14px;
    font-size: clamp(20px, 4.2vw, 22px);
    font-weight: 1000;
    white-space: nowrap;
  }

  .how-step__body {
    width: 80vw;
    max-width: 80vw;
    margin-left: auto;
    margin-right: auto;
    padding-left: 0;
  }

  .how-step__body p {
    font-size: 16px;
  }
}
</style>

<section class="how-hero">
  {% include nav.html variant="hero" %}
  <div class="how-hero__inner">
    <div class="how-hero__intro">
      <h1 class="how-hero__title">How It Works</h1>
      <p class="how-hero__subtitle">It's as easy as...</p>
    </div>

    <div class="how-steps">
      <article class="how-step">
        <div class="how-step__number">1.</div>
        <div class="how-step__content">
          <h3 class="how-step__heading">Get Pre-Approved</h3>
          <div class="how-step__body">
            <p>The difference between inquiring on a property when you're pre-approved and non-approved is like night and day. Pre-approval transforms you from a 'casual looker' to a 'serious buyer' and instantly puts you ahead of non-qualified buyers.</p>
            <p>Simply click on the 'Contact Us' WhatsApp link and our team will get you pre-approved today! Think of pre-approval as your license to dream.</p>
            <p><a class="how-step__link" href="{{ site.baseurl }}/bond-calculators/">Click on our Bond Calculator to see how much you qualify for!</a></p>
          </div>
        </div>
      </article>

      <article class="how-step">
        <div class="how-step__number">2.</div>
        <div class="how-step__content">
          <h3 class="how-step__heading">Find Your Dream Property</h3>
          <div class="how-step__body">
            <p>You'll know it the moment you walk in. It's more than just a place for living, it's where all your possibilities come together. Share the property details with us.</p>
            <p>Finding a home is your part. Making it yours is ours.</p>
          </div>
        </div>
      </article>

      <article class="how-step">
        <div class="how-step__number">3.</div>
        <div class="how-step__content">
          <h3 class="how-step__heading">We Make It Yours</h3>
          <div class="how-step__body">
            <p>Using our relationships, we negotiate the best possible bond for your needs, quickly and efficiently.</p>
            <p>So while you get back to planning what your new home will look like, we tie down the deal that works best for you.</p>
          </div>
        </div>
      </article>
    </div>

    <div class="how-actions">
      <a class="how-actions__button how-actions__button--contact" href="{{ site.baseurl }}/contact/">Contact us</a>
      <a class="how-actions__button how-actions__button--calculator" href="{{ site.baseurl }}/bond-calculators/">Bond Calculator</a>
    </div>
  </div>
</section>
