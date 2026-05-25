<nav>
  <div class="nav-inner">
    <a href="#hero" class="nav-logo">Borda Design</a>
    <ul class="nav-links">
      <li><a href="#sobre" data-i18n="nav.sobre">Sobre</a></li>
      <li><a href="#projetos" data-i18n="nav.projetos">Projetos</a></li>
      <li><a href="#quiz" data-i18n="nav.quiz">Quiz</a></li>
      <li><a href="#servicos" data-i18n="nav.servicos">Serviços</a></li>
      <li><a href="#faq" data-i18n="nav.faq">FAQ</a></li>
      <li><a href="#contato" data-i18n="nav.contato">Contato</a></li>
    </ul>
    <div class="nav-actions">
      <button id="langToggle" onclick="setLang(currentLang === 'pt' ? 'en' : 'pt')" aria-label="Trocar idioma" style="background:transparent;border:none;padding:0 0.4rem;display:flex;align-items:center;gap:6px;">
        <span class="flag-br" style="width:24px;height:24px;border-radius:50%;overflow:hidden;border:1.5px solid var(--border-hover);display:flex;opacity:1;transition:opacity 0.2s;"><img src="https://flagcdn.com/w40/br.png" alt="PT" style="width:100%;height:100%;object-fit:cover;"></span>
        <span class="flag-en" style="width:24px;height:24px;border-radius:50%;overflow:hidden;border:1.5px solid var(--border-hover);display:flex;opacity:0.35;transition:opacity 0.2s;"><img src="https://flagcdn.com/w40/us.png" alt="EN" style="width:100%;height:100%;object-fit:cover;"></span>
      </button>
      <button class="theme-toggle-btn" id="themeToggle" aria-label="Alternar tema" onclick="toggleTheme()">
        <svg class="icon-sun" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
        <svg class="icon-moon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
      </button>
      <button class="nav-menu-btn" id="menuBtn" aria-label="Menu" onclick="toggleMenu()">
        <span></span><span></span><span></span>
      </button>
      <a href="https://wa.me/5541920058670?text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20adoraria%20conversar!" class="nav-cta" target="_blank">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        <span data-i18n="nav.cta">Vamos conversar</span>
      </a>
    </div>
  </div>
</nav>
<div class="nav-dropdown" id="navDropdown">
  <a href="#sobre" onclick="toggleMenu()" data-i18n="nav.sobre">Sobre</a>
  <a href="#projetos" onclick="toggleMenu()" data-i18n="nav.projetos">Projetos</a>
  <a href="#quiz" onclick="toggleMenu()" data-i18n="nav.quiz">Quiz</a>
  <a href="#servicos" onclick="toggleMenu()" data-i18n="nav.servicos">Serviços</a>
  <a href="#faq" onclick="toggleMenu()" data-i18n="nav.faq">FAQ</a>
  <a href="#contato" onclick="toggleMenu()" data-i18n="nav.contato">Contato</a>
</div>

<style>
.theme-toggle-btn {
  background: transparent;
  border: none;
  padding: 0 0.5rem;
  display: flex;
  align-items: center;
  gap: 0.4rem;
  color: var(--accent);
  font-family: var(--font);
  font-size: 0.82rem;
  font-weight: 500;
  white-space: nowrap;
  transition: opacity 0.2s;
}
.theme-toggle-btn:hover { opacity: 0.75; }

[data-theme="light"] .icon-moon,
[data-theme="light"] .icon-moon-text { display: none; }

[data-theme="light"] .icon-sun,
[data-theme="light"] .icon-sun-text { display: flex; }

:root:not([data-theme="light"]) .icon-sun,
:root:not([data-theme="light"]) .icon-sun-text { display: none; }

:root:not([data-theme="light"]) .icon-moon,
:root:not([data-theme="light"]) .icon-moon-text { display: flex; }

.nav-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.nav-actions {
  display: flex;
  align-items: center;
  gap: 4px;
  margin-left: auto;
}

@media (max-width: 960px) {
  .nav-links { display: none; }
  .nav-cta { display: none; }
  .nav-menu-btn { display: flex; }
}
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var sections = document.querySelectorAll('section[id]');
    var navLinks = document.querySelectorAll('.nav-links a');

    function updateActive() {
      var current = '';
      var atBottom = window.scrollY + window.innerHeight >= document.documentElement.scrollHeight - 50;

      if (atBottom && sections.length) {
        current = sections[sections.length - 1].getAttribute('id');
      } else {
        sections.forEach(function(section) {
          if (window.scrollY >= section.offsetTop - 100) {
            current = section.getAttribute('id');
          }
        });
      }

      navLinks.forEach(function(link) {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
          link.classList.add('active');
        }
      });
    }

    window.addEventListener('scroll', updateActive);
    updateActive();
  });

  function toggleTheme() {
    var html = document.documentElement;
    var current = html.getAttribute('data-theme');
    var next = current === 'light' ? 'dark' : 'light';
    html.setAttribute('data-theme', next);
    localStorage.setItem('theme', next);
  }

  (function() {
    var saved = localStorage.getItem('theme') || 'dark';
    document.documentElement.setAttribute('data-theme', saved);
  })();

  function toggleMenu() {
    var btn = document.getElementById('menuBtn');
    var dropdown = document.getElementById('navDropdown');
    var nav = document.querySelector('nav');
    btn.classList.toggle('open');
    dropdown.classList.toggle('open');
    if (dropdown.classList.contains('open')) {
      dropdown.style.top = nav.getBoundingClientRect().bottom + 'px';
    }
  }
</script>