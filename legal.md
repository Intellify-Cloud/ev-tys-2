---
layout: page
title: Legal
description: Read the Mzansi Bonds legal notice covering site privacy, cookies, updates, and contact details.
permalink: /legal
background: grey
hide_contact_strip: true
---

<style>
#pagecontainer {
  width: 90vw;
  max-width: 850px;
  padding: 130px 0 80px;
}

#pagecontainer, #pagecontainer h1, #pagecontainer h2, #pagecontainer h3, #pagecontainer h4 {
  color: #5c1f3c;
}

@media (max-width: 991px) {
  #pagecontainer {
    width: 90vw;
    max-width: 90vw;
    padding-top: 110px;
  }
}
</style>

## Legal

This Privacy Policy describes how your personal information is collected, used, and shared when you visit **{{ site.company }}** (the "Site").

### Personal Information We Collect

{% if site.analytics.google %}

**Automatically Collected (Google Analytics):**

When you visit the Site, we automatically receive information about your device from your browser, such as your IP address. As you browse the Site, we also collect information about how you interact with the Site. We refer to this automatically-collected information as "Device Information".

We collect Device Information using cookies. "Cookies" are data files that are placed on your device. For more information about cookies and how to disable them, visit [All About Cookies](http://www.allaboutcookies.org).

We do this using [Google Analytics](https://www.google.com/intl/en/policies/privacy/).

You can opt-out of Google Analytics [here](https://tools.google.com/dlpage/gaoptout).

{% else %}
We do not collect any data about you or use any cookies.
{% endif %}

### Changes
We may update this privacy policy from time to time for personal, operational, legal, or regulatory reasons.

### Contact Us
For more information about our privacy practices or if you have questions, please contact us by email at [{{ site.email }}](mailto:{{ site.email }}).
