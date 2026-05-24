<footer>
  <div class="footer-inner">
    <p class="footer-copy">© 2025 Samara Alanna.</p>
    <div class="footer-links">
      <a href="https://www.instagram.com/bordadesignn/" target="_blank">Instagram</a>
      <a href="https://www.linkedin.com/in/samaraalanna/" target="_blank">LinkedIn</a>
      <a href="https://www.behance.net/samaraalanna" target="_blank">Behance</a>
      <a href="https://wa.me/5541920058670" target="_blank">WhatsApp</a>
    </div>
  </div>
</footer>

<script>
function smoothScrollTo(target, duration, center) {
  var navHeight = document.querySelector('nav').offsetHeight;
  var viewportHeight = window.innerHeight;
  var sectionHeight = target.offsetHeight;
  var topPos = target.getBoundingClientRect().top + window.pageYOffset;
  var offset;

  if (center && sectionHeight < viewportHeight - navHeight) {
    offset = (viewportHeight - navHeight - sectionHeight) / 2 + navHeight;
  } else {
    offset = navHeight;
  }

  var targetPos = topPos - offset;
  var startPos = window.pageYOffset;
  var distance = targetPos - startPos;
  var startTime = null;

  function step(currentTime) {
    if (!startTime) startTime = currentTime;
    var elapsed = currentTime - startTime;
    var progress = Math.min(elapsed / duration, 1);
    var ease = progress < 0.5
      ? 4 * progress * progress * progress
      : 1 - Math.pow(-2 * progress + 2, 3) / 2;
    window.scrollTo(0, startPos + distance * ease);
    if (elapsed < duration) requestAnimationFrame(step);
  }

  requestAnimationFrame(step);
}

/* ─── Animations ─── */
(function () {

  /* ── CSS ── */
  var s = document.createElement('style');
  s.textContent =
    /* Hero entrance */
    '@keyframes heroUp{from{opacity:0;transform:translateY(30px);filter:blur(8px)}to{opacity:1;transform:none;filter:none}}' +
    '.hero-badge{animation:heroUp .85s cubic-bezier(.16,1,.3,1) .05s both}' +
    '.hero h1{animation:heroUp .9s cubic-bezier(.16,1,.3,1) .2s both}' +
    '.hero-desc{animation:heroUp .85s cubic-bezier(.16,1,.3,1) .38s both}' +
    '.hero-actions{animation:heroUp .85s cubic-bezier(.16,1,.3,1) .54s both}' +
    /* Scroll reveal */
    '.reveal{opacity:0;transform:translateY(36px) scale(.97);filter:blur(5px);transition:opacity .8s cubic-bezier(.16,1,.3,1),transform .8s cubic-bezier(.16,1,.3,1),filter .75s cubic-bezier(.16,1,.3,1)}' +
    '.reveal.in-view{opacity:1;transform:none;filter:none}' +
    /* Cursor-tracked card glows */
    '.area-card,.project-card,.servico-card{--gx:50%;--gy:50%}' +
    '.area-card::before{top:0!important;left:0!important;right:0!important;bottom:0!important;width:100%!important;height:100%!important;background:radial-gradient(circle at var(--gx) var(--gy),rgba(230,183,211,.2) 0%,transparent 65%)!important}' +
    '.servico-card::before{top:0!important;left:0!important;right:0!important;bottom:0!important;width:100%!important;height:100%!important;background:radial-gradient(circle at var(--gx) var(--gy),rgba(230,183,211,.2) 0%,transparent 65%)!important}' +
    '.project-card::before{content:"";position:absolute;inset:0;background:radial-gradient(circle at var(--gx) var(--gy),rgba(230,183,211,.12) 0%,transparent 60%);opacity:0;transition:opacity .3s;pointer-events:none;z-index:0}' +
    '.project-card:hover::before{opacity:1}' +
    /* Gradient text nos labels */
    '.section-label{background:linear-gradient(90deg,var(--accent) 0%,rgba(230,183,211,.5) 100%);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent}' +
    /* FAB WhatsApp */
    '.fab-wa{position:fixed;bottom:1.75rem;right:1.75rem;z-index:1000;width:52px;height:52px;background:#25D366;border-radius:50%;display:flex;align-items:center;justify-content:center;text-decoration:none;box-shadow:0 4px 20px rgba(37,211,102,.3);animation:fabIn .7s cubic-bezier(.16,1,.3,1) 1.5s both;transition:transform .2s,box-shadow .2s}' +
    '.fab-wa:hover{transform:translateY(-2px) scale(1.08);box-shadow:0 8px 28px rgba(37,211,102,.45)}' +
    '@keyframes fabIn{from{opacity:0;transform:translateY(20px) scale(.85)}to{opacity:1;transform:none}}' +
    '.fab-wa svg{width:28px;height:28px;fill:white}';
  document.head.appendChild(s);

  /* ── Scroll reveal ── */
  ['.section-label', '.section-title', '.cta h2',
   '.btn-cv', '.sobre-text p', '.servicos-header p',
   '.section-header > a', '.cta-eyebrow', '.cta p', '.cta-actions'].forEach(function (sel) {
    document.querySelectorAll(sel).forEach(function (el) { el.classList.add('reveal'); });
  });
  document.querySelectorAll('.area-card, .project-card').forEach(function (el) {
    el.classList.add('reveal');
    var idx = Array.from(el.parentElement.children).indexOf(el);
    el.style.transitionDelay = (idx * 110) + 'ms';
  });
  var obs = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) { e.target.classList.add('in-view'); obs.unobserve(e.target); }
    });
  }, { threshold: 0.07, rootMargin: '0px 0px -20px 0px' });
  document.querySelectorAll('.reveal').forEach(function (el) { obs.observe(el); });

  /* ── Tilt 3D + cursor glow combinados, throttled com RAF ── */
  document.querySelectorAll('.area-card, .project-card').forEach(function (card) {
    var isTilt = card.classList.contains('area-card') || card.classList.contains('project-card');
    var rafPending = false, pe = null;

    if (isTilt) {
      card.addEventListener('mouseenter', function () {
        card.style.transition = 'transform 0.15s ease, background 0.25s, box-shadow 0.25s';
      });
      card.addEventListener('mouseleave', function () {
        pe = null;
        card.style.transition = 'transform 0.55s cubic-bezier(.16,1,.3,1), background 0.25s, box-shadow 0.25s';
        card.style.transform = '';
        var c = card;
        setTimeout(function () { c.style.transition = ''; }, 600);
      });
    }

    card.addEventListener('mousemove', function (e) {
      pe = e;
      if (rafPending) return;
      rafPending = true;
      requestAnimationFrame(function () {
        if (!pe) { rafPending = false; return; }
        var r = card.getBoundingClientRect();
        var ex = pe.clientX, ey = pe.clientY;
        card.style.setProperty('--gx', (ex - r.left) + 'px');
        card.style.setProperty('--gy', (ey - r.top)  + 'px');
        if (isTilt) {
          var x = (ex - r.left) / r.width  - 0.5;
          var y = (ey - r.top)  / r.height - 0.5;
          card.style.transform = 'perspective(700px) rotateY(' + (x * 8) + 'deg) rotateX(' + (-y * 8) + 'deg) scale(1.015)';
        }
        rafPending = false; pe = null;
      });
    });
  });

  /* ── Grain (SVG turbulence, sem blend-mode) ── */
  var svgNoise = 'data:image/svg+xml,' + encodeURIComponent(
    '<svg xmlns="http://www.w3.org/2000/svg" width="256" height="256">' +
    '<filter id="n"><feTurbulence type="fractalNoise" baseFrequency="0.85" numOctaves="4" stitchTiles="stitch"/></filter>' +
    '<rect width="256" height="256" filter="url(#n)"/></svg>'
  );
  var grain = document.createElement('div');
  grain.style.cssText = 'position:fixed;inset:0;pointer-events:none;z-index:9996;opacity:0.025;background:url(' + svgNoise + ') repeat;background-size:256px 256px';
  document.body.appendChild(grain);

  /* ── Botão flutuante WhatsApp ── */
  var fab = document.createElement('a');
  fab.className = 'fab-wa';
  fab.href = 'https://wa.me/5541920058670?text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20adoraria%20conversar!';
  fab.target = '_blank';
  fab.rel = 'noopener';
  fab.setAttribute('aria-label', 'Fale pelo WhatsApp');
  fab.innerHTML = '<svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>';
  document.body.appendChild(fab);

  var fabTop = document.createElement('a');
  fabTop.href = '#hero';
  fabTop.setAttribute('aria-label', 'Voltar ao topo');
  fabTop.style.cssText = 'position:fixed;bottom:1.75rem;left:50%;transform:translateX(-50%);z-index:1000;width:44px;height:44px;background:var(--accent-dim);border:1px solid var(--accent-border);border-radius:50%;display:flex;align-items:center;justify-content:center;text-decoration:none;color:var(--accent);transition:background 0.2s,box-shadow 0.2s;';
  fabTop.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg>';
  fabTop.addEventListener('mouseenter', function() {
    this.style.background = 'var(--accent)';
    this.style.color = '#1a1018';
    this.style.boxShadow = '0 4px 16px rgba(230,183,211,0.32)';
  });
  fabTop.addEventListener('mouseleave', function() {
    this.style.background = 'var(--accent-dim)';
    this.style.color = 'var(--accent)';
    this.style.boxShadow = '';
  });
  document.body.appendChild(fabTop);

})();

document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
  anchor.addEventListener('click', function(e) {
    var href = this.getAttribute('href');
    if (href === '#') return;
    var target = document.querySelector(href);
    if (!target) return;
    e.preventDefault();
    smoothScrollTo(target, 700, href === '#servicos');
  });
});

document.querySelectorAll('a[href^="http"], a[href^="https"]').forEach(function(link) {
  link.setAttribute('target', '_blank');
  link.setAttribute('rel', 'noopener');
});
</script>