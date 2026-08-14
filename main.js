// header scroll state
const header = document.getElementById('siteHeader');
if (header) {
  window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 40);
  });
}

// mobile menu
const menuBtn = document.getElementById('menuBtn');
const mobileMenu = document.getElementById('mobileMenu');
if (menuBtn && mobileMenu) {
  menuBtn.addEventListener('click', () => {
    mobileMenu.style.display = mobileMenu.style.display === 'block' ? 'none' : 'block';
  });
  mobileMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
    mobileMenu.style.display = 'none';
  }));
}

// reveal on scroll
const revealEls = document.querySelectorAll('.reveal');
if (revealEls.length) {
  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  revealEls.forEach(el => io.observe(el));
}

// footer year
const yearEl = document.getElementById('year');
if (yearEl) yearEl.textContent = new Date().getFullYear();

// contact form -> mailto
const enquireForm = document.getElementById('enquireForm');
if (enquireForm) {
  enquireForm.addEventListener('submit', function (e) {
    e.preventDefault();
    const name = document.getElementById('fname').value;
    const phone = document.getElementById('fphone').value;
    const div = document.getElementById('fdiv').value;
    const msg = document.getElementById('fmsg').value;
    const body = `Name: ${name}%0APhone: ${phone}%0ADivision: ${div}%0A%0AMessage:%0A${encodeURIComponent(msg)}`;
    window.location.href = `mailto:info@mukhlisfarhantrading.com?subject=Enquiry from website — ${encodeURIComponent(div)}&body=${body}`;
  });
}
