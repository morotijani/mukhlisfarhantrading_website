<!DOCTYPE html>
<html lang="en">
<head>
<?php
$page_title = "Contact Us — Mukhlis Farhan Trading Limited";
$page_description = "Contact Mukhlis Farhan Trading Limited in Konongo, Ashanti Region, Ghana — mining equipment, farm machinery, cattle and gold trading enquiries.";
$page_slug = "contact";
include 'includes/head.php';
?>
</head>
<body>

<?php include 'includes/header.php'; ?>

<!-- ================= PAGE HERO (short) ================= -->
<section style="background:var(--charcoal);color:var(--cream);padding:150px 0 64px;">
  <div class="wrap">
    <div class="breadcrumb"><a href="index">Home</a><span class="sep">/</span><span class="current">Contact</span></div>
    <div class="eyebrow">Get in touch</div>
    <h1 style="font-size:clamp(2.4rem,4.6vw,3.6rem);color:var(--cream);margin:18px 0 20px;max-width:16ch;">Come by, call, or write in.</h1>
    <p style="color:var(--cream-dim);font-size:16.5px;max-width:52ch;">The office is in Konongo, but every division can be reached directly. Tell us what you need and which trade it concerns, and we'll get back to you.</p>

    <div class="contact-quick reveal">
      <a href="mining-equipment"><span class="lbl">Div. 01</span><span class="nm">Mining Equipment</span></a>
      <a href="farm-machinery"><span class="lbl">Div. 02</span><span class="nm">Farm Machinery</span></a>
      <a href="cattle-farming"><span class="lbl">Div. 03</span><span class="nm">Cattle Farming</span></a>
      <a href="gold-trading"><span class="lbl">Div. 04</span><span class="nm">Gold Trading</span></a>
    </div>
  </div>
</section>

<!-- ================= CONTACT DETAIL + FORM ================= -->
<section class="contact" id="contact" style="padding-top:90px;">
  <div class="wrap">
    <div class="reveal">
      <div class="eyebrow" style="color:var(--gold-bright);">Reach us directly</div>
      <h2 style="margin-top:18px;">Contact details.</h2>

      <div class="contact-block" style="margin-top:30px;">
        <span class="label">Head office</span>
        <p>Mukhlis Farhan Trading Limited<br>Konongo, Ashanti Region, Ghana</p>
      </div>
      <div class="contact-block">
        <span class="label">Phone / WhatsApp</span>
        <a href="tel:+233000000000">+233 00 000 0000</a>
      </div>
      <div class="contact-block">
        <span class="label">Email</span>
        <a href="mailto:info@mukhlisfarhantrading.com">info@mukhlisfarhantrading.com</a>
      </div>
      <div class="contact-block hours">
        <span class="label">Opening hours</span>
        <p>Monday – Saturday, 7:00am – 6:00pm<br>Sunday: Gold desk by appointment</p>
      </div>

      <iframe class="map-embed reveal" style="margin-top:10px;" loading="lazy"
        src="https://maps.google.com/maps?q=Konongo,+Ashanti+Region,+Ghana&z=12&output=embed"
        title="Map showing Konongo, Ashanti Region, Ghana"></iframe>
    </div>

    <form class="enquire reveal" id="enquireForm">
      <div class="row">
        <div>
          <label for="fname">Full name</label>
          <input id="fname" name="fname" type="text" required>
        </div>
        <div>
          <label for="fphone">Phone number</label>
          <input id="fphone" name="fphone" type="tel" required>
        </div>
      </div>
      <div class="full">
        <label for="fdiv">Which trade concerns you?</label>
        <select id="fdiv" name="fdiv">
          <option>Mining equipment, tools &amp; materials</option>
          <option>Farming equipment &amp; machinery</option>
          <option>Cattle farming</option>
          <option>Gold buying / selling</option>
          <option>Something else</option>
        </select>
      </div>
      <div class="full">
        <label for="fmsg">Message</label>
        <textarea id="fmsg" name="fmsg" required></textarea>
      </div>
      <div class="submit-row">
        <button type="submit" class="btn btn-solid">Send enquiry</button>
        <span class="form-note">Opens your email app, addressed to our office.</span>
      </div>
    </form>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="main.js"></script>
</body>
</html>
