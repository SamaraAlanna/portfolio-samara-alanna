<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --bg:            #0c0c0b;
    --bg2:           #111110;
    --bg3:           #171716;
    --border:        rgba(230,183,211,0.08);
    --border-hover:  rgba(230,183,211,0.18);
    --text:          #f0ede8;
    --text-muted:    #8a8680;
    --text-dim:      #4a4845;
    --accent:        #e6b7d3;
    --accent-dim:    rgba(230,183,211,0.10);
    --accent-mid:    rgba(230,183,211,0.16);
    --accent-border: rgba(230,183,211,0.22);
    --font:          'DM Sans', sans-serif;
    --radius:        12px;
    --radius-sm:     8px;
    --max-width:     1200px;
    --text-xs:       0.75rem;
    --text-sm:       0.78rem;
    --text-base:     0.9rem;
    --text-md:       1.05rem;
    --text-lg:       1.1rem;
  }

  html {
    overflow-x: hidden;
    max-width: 100vw;
    scroll-behavior: smooth;
    scroll-padding-top: 64px;
  }
  section[id] { scroll-margin-top: 64px; }

  body {
    background: var(--bg);
    color: var(--text);
    font-family: var(--font);
    font-size: 16px;
    line-height: 1.6;
    padding-top: 64px;
    overflow-x: hidden;
    max-width: 100vw;
  }

  .container {
    max-width: var(--max-width);
    margin: 0 auto;
    padding: 0 2.5rem;
  }

  nav {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
    background: rgba(12,12,11,0.88);
    backdrop-filter: blur(14px);
    border-bottom: 0.5px solid var(--border);
  }

  .nav-inner {
    max-width: var(--max-width);
    margin: 0 auto;
    padding: 1.1rem 2.5rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .nav-logo {
    font-weight: 600;
    font-size: 1rem;
    color: var(--text);
    text-decoration: none;
    letter-spacing: -0.01em;
  }

  .nav-links {
    display: flex;
    gap: 2.5rem;
    list-style: none;
  }

  .nav-links a {
    font-size: 0.88rem;
    font-weight: 400;
    color: var(--text-muted);
    text-decoration: none;
    transition: color 0.3s;
    position: relative;
    padding-bottom: 0.3rem;
  }
  .nav-links a::after {
    content: '';
    position: absolute;
    bottom: -6px;
    left: 0;
    right: 0;
    height: 2px;
    background: var(--accent);
    border-radius: 99px;
    opacity: 0;
    transition: opacity 0.4s ease;
  }
  .nav-links a:hover { color: var(--accent); }
  .nav-links a.active { color: var(--text); }
  .nav-links a.active::after { opacity: 1; }

  .nav-cta {
    background: var(--accent);
    color: #1a1018;
    font-family: var(--font);
    font-size: 0.85rem;
    font-weight: 500;
    padding: 0.6rem 1.35rem;
    border-radius: 99px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    position: relative;
    overflow: hidden;
    transform: translateZ(0);
    transition: transform 0.25s cubic-bezier(.16,1,.3,1), box-shadow 0.25s;
  }
  .nav-cta::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.22), transparent);
    transform: skewX(-15deg) translateX(-150%);
    pointer-events: none;
  }
  .nav-cta:hover { transform: translateY(-2px); box-shadow: 0 6px 22px rgba(230,183,211,0.38); }
  .nav-cta:hover::before { animation: btnShimmer 0.55s cubic-bezier(.4,0,.2,1) forwards; }
  .nav-cta svg { width: 15px; height: 15px; flex-shrink: 0; }

  @keyframes btnShimmer {
    from { transform: skewX(-15deg) translateX(-150%); }
    to   { transform: skewX(-15deg) translateX(280%); }
  }

  .nav-menu-btn {
    display: none;
    background: none;
    border: none;
    padding: 0.25rem;
    color: var(--text);
    flex-direction: column;
    gap: 5px;
  }
  .nav-menu-btn span {
    display: block;
    width: 22px;
    height: 1.5px;
    background: var(--text);
    transition: transform 0.3s, opacity 0.3s;
    border-radius: 99px;
  }
  .nav-menu-btn.open span:nth-child(1) { transform: translateY(6.5px) rotate(45deg); }
  .nav-menu-btn.open span:nth-child(2) { opacity: 0; }
  .nav-menu-btn.open span:nth-child(3) { transform: translateY(-6.5px) rotate(-45deg); }

  .nav-dropdown {
    display: none;
    position: fixed;
    left: 0;
    right: 0;
    z-index: 9998;
    background: rgba(12,12,11,0.97);
    backdrop-filter: blur(14px);
    border-bottom: 0.5px solid var(--border);
    flex-direction: column;
  }
  .nav-dropdown.open { display: flex; }
  .nav-dropdown a {
    font-size: 0.95rem;
    color: var(--text-muted);
    text-decoration: none;
    transition: color 0.2s, background 0.2s;
    padding: 0.85rem 2.5rem;
    border-bottom: 0.5px solid var(--border);
  }
  .nav-dropdown a:last-child { border-bottom: none; }
  .nav-dropdown a:hover { color: var(--text); background: var(--bg2); }

  @media (max-width: 960px) {
    .nav-links { display: none; }
    .nav-menu-btn { display: flex; }
    .nav-cta { display: none; }
    body { padding-top: 64px; }
    nav { border-bottom: none; }
  }

  @media (max-width: 960px) {
    .nav-links a::after,
    .nav-links a.active::after {
      display: none !important;
    }
  }


</style>

<nav>
  <div class="nav-inner">
    <a href="#hero" class="nav-logo">Samara Alanna</a>
    <ul class="nav-links">
      <li><a href="#sobre">Sobre</a></li>
      <li><a href="#projetos">Projetos</a></li>
      <li><a href="#servicos">Serviços</a></li>
      <li><a href="#quiz">Quiz</a></li>
      <li><a href="#contato">Contato</a></li>
    </ul>
    <button class="nav-menu-btn" id="menuBtn" aria-label="Menu" onclick="toggleMenu()">
      <span></span><span></span><span></span>
    </button>
    <a href="https://wa.me/5541920058670" class="nav-cta" target="_blank">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      Vamos conversar
    </a>
  </div>
</nav>
<div class="nav-dropdown" id="navDropdown">
  <a href="#sobre" onclick="toggleMenu()">Sobre</a>
  <a href="#projetos" onclick="toggleMenu()">Projetos</a>
  <a href="#servicos" onclick="toggleMenu()">Serviços</a>
  <a href="#quiz" onclick="toggleMenu()">Quiz</a>
  <a href="#faq" onclick="toggleMenu()">FAQ</a>
  <a href="#contato" onclick="toggleMenu()">Contato</a>
</div>

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