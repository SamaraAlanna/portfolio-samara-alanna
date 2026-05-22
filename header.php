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
    <a href="https://wa.me/5541920058670?text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20adoraria%20conversar!" class="nav-cta" target="_blank">
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