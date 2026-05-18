<style>
  footer { border-top: 0.5px solid var(--border); padding: 2rem 0; }
  .footer-inner { max-width: var(--max-width); margin: 0 auto; padding: 0 2.5rem; display: flex; align-items: center; justify-content: space-between; }
  .footer-copy { font-size: 0.78rem; color: var(--text-dim); }
  .footer-links { display: flex; gap: 1.5rem; }
  .footer-links a { font-size: 0.78rem; color: var(--text-dim); text-decoration: none; transition: color 0.2s; }
  .footer-links a:hover { color: var(--accent); }

  @media (max-width: 600px) {
    .footer-inner { flex-direction: column; gap: 1rem; text-align: center; }
    .footer-links { flex-wrap: wrap; justify-content: center; }
  }
</style>

<footer>
  <div class="footer-inner">
    <p class="footer-copy">© 2025 Samara Alanna.</p>
    <div class="footer-links">
      <a href="#" target="_blank">Instagram</a>
      <a href="#" target="_blank">LinkedIn</a>
      <a href="#" target="_blank">Behance</a>
      <a href="https://wa.me/5541920058670" target="_blank">WhatsApp</a>
    </div>
  </div>
</footer>

<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    const href = this.getAttribute('href');
    if (href === '#') return;
    e.preventDefault();
    const target = document.querySelector(href);
    if (target) {
      const navHeight = document.querySelector('nav').offsetHeight;
      const top = target.getBoundingClientRect().top + window.scrollY - navHeight;
      window.scrollTo({ top, behavior: 'smooth' });
    }
  });
});
</script>