---
layout: page
title: Secret Contact
description: Private Mzansi Bonds contact form.
permalink: /secret-contact/
hide_contact_strip: true
hide_page_nav: true
noindex: true
nofollow: true
---

<style>
#pagecontainer {
  max-width: none;
  padding: 0;
}

.secret-contact {
  min-height: 100vh;
  padding: 120px 20px 80px;
  background: #f7f3ee;
  color: #17463f;
}

.secret-contact__wrap {
  width: min(100%, 680px);
  margin: 0 auto;
}

.secret-contact h1 {
  margin: 0 0 12px;
  color: #17463f;
  font-size: clamp(34px, 7vw, 64px);
  line-height: 1;
}

.secret-contact p {
  margin: 0 0 28px;
  color: #641b2e;
  font-size: 18px;
}

.secret-contact__form {
  display: grid;
  gap: 16px;
}

.secret-contact__field {
  display: grid;
  gap: 8px;
}

.secret-contact__field label {
  font-weight: 700;
  color: #17463f;
}

.secret-contact__field input,
.secret-contact__field textarea {
  width: 100%;
  border: 0;
  border-radius: 8px;
  padding: 15px 16px;
  background: #bfe1d1;
  color: #17463f;
  font-size: 16px;
}

.secret-contact__field textarea {
  min-height: 150px;
  resize: vertical;
}

.secret-contact__honeypot {
  position: absolute;
  left: -9999px;
  opacity: 0;
}

.secret-contact__button {
  justify-self: start;
  border: 0;
  border-radius: 999px;
  padding: 14px 34px;
  background: #641b2e;
  color: #fff;
  font-size: 17px;
  font-weight: 700;
  cursor: pointer;
}

.secret-contact__button:disabled {
  cursor: wait;
  opacity: 0.7;
}

.secret-contact__status {
  display: none;
  padding: 14px 16px;
  border-radius: 8px;
  font-weight: 700;
}

.secret-contact__status--success {
  background: #d6eadf;
  color: #17463f;
}

.secret-contact__status--error {
  background: #f2d7dc;
  color: #641b2e;
}
</style>

<section class="secret-contact">
  <div class="secret-contact__wrap">
    <h1>Secret Contact</h1>
    <p>This private test form sends to hello@mzansibonds.co.za.</p>

    <form id="secretContactForm" class="secret-contact__form">
      <div class="secret-contact__honeypot" aria-hidden="true">
        <label for="company">Company</label>
        <input id="company" name="company" type="text" tabindex="-1" autocomplete="off">
      </div>

      <div class="secret-contact__field">
        <label for="secretName">Name</label>
        <input id="secretName" name="name" type="text" autocomplete="name" required>
      </div>

      <div class="secret-contact__field">
        <label for="secretEmail">Email</label>
        <input id="secretEmail" name="email" type="email" autocomplete="email" required>
      </div>

      <div class="secret-contact__field">
        <label for="secretPhone">Phone</label>
        <input id="secretPhone" name="phone" type="tel" autocomplete="tel">
      </div>

      <div class="secret-contact__field">
        <label for="secretMessage">Message</label>
        <textarea id="secretMessage" name="message" required></textarea>
      </div>

      <div id="secretContactSuccess" class="secret-contact__status secret-contact__status--success">
        Sent. Check hello@mzansibonds.co.za.
      </div>

      <div id="secretContactError" class="secret-contact__status secret-contact__status--error">
        Something went wrong. Please try again.
      </div>

      <button class="secret-contact__button" type="submit">
        Send Test
      </button>
    </form>
  </div>
</section>

<script>
  (function () {
    'use strict';

    const form = document.getElementById('secretContactForm');
    const button = form.querySelector('button[type="submit"]');
    const success = document.getElementById('secretContactSuccess');
    const error = document.getElementById('secretContactError');

    form.addEventListener('submit', async function (event) {
      event.preventDefault();
      success.style.display = 'none';
      error.style.display = 'none';

      const data = new FormData(form);
      if (data.get('company')) return;

      button.disabled = true;
      button.textContent = 'Sending...';

      try {
        const response = await fetch('{{ site.baseurl }}/secret-contact-send.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({
            name: String(data.get('name') || '').trim(),
            email: String(data.get('email') || '').trim(),
            phone: String(data.get('phone') || '').trim(),
            message: String(data.get('message') || '').trim()
          })
        });

        if (!response.ok) throw new Error('Send failed');

        form.reset();
        success.style.display = 'block';
      } catch (sendError) {
        error.style.display = 'block';
      } finally {
        button.disabled = false;
        button.textContent = 'Send Test';
      }
    });
  })();
</script>
