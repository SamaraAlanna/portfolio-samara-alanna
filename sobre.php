<style>
  .section-label {
    font-size: 0.7rem;
    font-weight: 500;
    color: var(--accent);
    letter-spacing: 0.12em;
    text-transform: uppercase;
    margin-bottom: 1rem;
  }

  .section-title {
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    font-weight: 700;
    letter-spacing: -0.03em;
    line-height: 1.2;
  }

  .sobre {
    padding: 6rem 0;
  }

  .sobre-text {
    margin-bottom: 3rem;
  }

  .sobre-title-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
  }

  .btn-cv {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    flex-shrink: 0;
    background: var(--accent);
    color: #1a1018;
    font-family: var(--font);
    font-size: 0.82rem;
    font-weight: 600;
    padding: 0.6rem 1.35rem;
    border-radius: 99px;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    transform: translateZ(0);
    transition: transform 0.25s cubic-bezier(.16,1,.3,1), box-shadow 0.25s;
  }

  .btn-cv::before {
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

  .btn-cv:hover { transform: translateY(-2px); box-shadow: 0 6px 22px rgba(230,183,211,0.38); }
  .btn-cv:hover::before { animation: btnShimmer 0.55s cubic-bezier(.4,0,.2,1) forwards; }

  .btn-cv svg {
    width: 14px;
    height: 14px;
    flex-shrink: 0;
  }

  .sobre-text p {
    font-size: 0.95rem;
    color: var(--text-muted);
    font-weight: 400;
    line-height: 1.8;
    margin-bottom: 0.85rem;
  }

  .areas-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: 1fr;
    gap: 1px;
    background: var(--border);
    border: 0.5px solid var(--border);
    border-radius: var(--radius);
    overflow: hidden;
  }

  .area-card {
    background: var(--bg2);
    padding: 1.75rem;
    display: flex;
    flex-direction: column;
    transition: background 0.25s, box-shadow 0.25s;
    position: relative;
    overflow: hidden;
  }

  .area-card::before {
    content: '';
    position: absolute;
    bottom: -40px;
    left: -40px;
    width: 220px;
    height: 220px;
    background: radial-gradient(circle, rgba(230,183,211,0.14) 0%, transparent 65%);
    opacity: 0;
    transition: opacity 0.3s;
    pointer-events: none;
  }

  .area-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--accent), transparent);
    opacity: 0;
    transition: opacity 0.25s;
  }

  .area-card:hover { background: var(--bg3); box-shadow: 0 8px 32px rgba(230,183,211,0.08); }
  .area-card:hover::before { opacity: 1; }
  .area-card:hover::after { opacity: 1; }

  .area-num {
    font-size: 0.68rem;
    color: var(--text-dim);
    letter-spacing: 0.06em;
    font-weight: 500;
    margin-bottom: 0.85rem;
  }

  .area-icon {
    width: 38px;
    height: 38px;
    background: var(--accent-dim);
    border: 0.5px solid var(--accent-border);
    border-radius: var(--radius-sm);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--accent);
    transition: background 0.2s, transform 0.2s;
    margin-bottom: 0.85rem;
  }

  .area-icon svg {
    width: 18px;
    height: 18px;
    flex-shrink: 0;
  }

  .area-card:hover .area-icon { background: var(--accent-mid); transform: translateY(-2px); }

  .area-card h4 {
    font-size: 0.95rem;
    font-weight: 700;
    color: var(--text);
    letter-spacing: -0.02em;
    margin-bottom: 0.85rem;
  }

  .area-card p {
    font-size: 0.88rem;
    color: var(--text-muted);
    font-weight: 400;
    line-height: 1.65;
    flex: 1;
  }

  .area-tags {
    display: flex;
    height: 80px;
    overflow: hidden;
    flex-wrap: wrap;
    align-content: flex-start;
    gap: 0.35rem;
    padding-top: 0.85rem;
    border-top: 0.5px solid var(--border);
    margin-top: 1.5rem;
  }

  .tag {
    background: var(--accent-dim);
    border: 0.5px solid var(--border);
    border-radius: 99px;
    padding: 0.18rem 0.6rem;
    font-size: 0.75rem;
    color: var(--text-muted);
    transition: border-color 0.2s, color 0.2s;
  }

  .area-card:hover .tag {
    border-color: var(--accent-border);
    color: var(--accent);
  }

  @media (max-width: 960px) {
    .areas-grid { grid-template-columns: repeat(2, 1fr); grid-auto-rows: auto; }
  }
  @media (max-width: 600px) {
    .areas-grid { grid-template-columns: 1fr; }
  }
</style>

<section class="sobre" id="sobre">
  <div class="container">
    <div class="section-label">Sobre mim</div>
    <div class="sobre-text">
      <div class="sobre-title-row">
        <h2 class="section-title">UX/UI Designer e Desenvolvedora Full Stack</h2>
        <a href="#" class="btn-cv">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download CV
        </a>
      </div>
      <p>Olá, sou a Samara Alanna, fundadora do estúdio Borda Design. Sou especialista em UX/UI Design, identidade visual e desenvolvimento de sites. Atualmente curso Análise e Desenvolvimento de Sistemas e Design Gráfico, unindo a parte visual com a técnica para criar projetos mais completos.</p>
      <p>Hoje trabalho em uma agência como UX/UI Designer e Desenvolvedora Full Stack, atuando no setor automotivo e atendendo marcas reconhecidas como Mercedes-Benz, BMW, Nissan, Volkswagen Caminhões e Ônibus e Michelin.</p>
      <p>Uma das coisas que mais valorizo no meu trabalho é entregar projetos com qualidade, agilidade e atenção aos detalhes. Gosto de manter um processo próximo do cliente, tornando tudo mais leve, organizado e transparente durante o desenvolvimento.</p>
    </div>
    <div class="areas-grid">
      <div class="area-card">
        <div class="area-num">01</div>
        <div class="area-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h4>UX Design</h4>
        <p>Quem nunca entrou em um site e teve dificuldade para encontrar o que queria? UX Design é o que torna a experiência mais intuitiva, organizada e agradável para quem navega.</p>
        <div class="area-tags">
          <span class="tag">Pesquisa</span>
          <span class="tag">Fluxos</span>
          <span class="tag">Testes</span>
        </div>
      </div>
      <div class="area-card">
        <div class="area-num">02</div>
        <div class="area-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
        </div>
        <h4>UI Design</h4>
        <p>UI Design é a parte visual da experiência. Um site bonito, bem construído e organizado muda completamente como sua marca é percebida e valorizada pelo público.</p>
        <div class="area-tags">
          <span class="tag">Figma</span>
          <span class="tag">Design System</span>
          <span class="tag">Componentes</span>
        </div>
      </div>
      <div class="area-card">
        <div class="area-num">03</div>
        <div class="area-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        </div>
        <h4>Web Design</h4>
        <p>Web Design une UX/UI e desenvolvimento web para criar experiências digitais completas. Do layout ao código, tudo pensado para funcionar bem em qualquer dispositivo.</p>
        <div class="area-tags">
          <span class="tag">Desenvolvimento</span>
          <span class="tag">UI/UX</span>
          <span class="tag">E-commerce</span>
          <span class="tag">Landing Page</span>
        </div>
      </div>
      <div class="area-card">
        <div class="area-num">04</div>
        <div class="area-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
        <h4>Desenvolvimento Full Stack</h4>
        <p>Transformo design em sites reais e funcionais. Utilizo boas práticas para entregar projetos leves, rápidos, acessíveis e fiéis ao que foi projetado no Figma.</p>
        <div class="area-tags">
          <span class="tag">HTML</span>
          <span class="tag">CSS</span>
          <span class="tag">JS</span>
          <span class="tag">PHP</span>
        </div>
      </div>
    </div>
  </div>
</section>