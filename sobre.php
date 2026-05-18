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
    border-bottom: 0.5px solid var(--border);
  }
  .sobre-text { margin-bottom: 3rem; }
  .sobre-text h2 { margin-bottom: 1.5rem; }
  .sobre-text p {
    font-size: 0.95rem;
    color: var(--text-muted);
    font-weight: 400;
    line-height: 1.8;
    margin-bottom: 0.85rem;
    max-width: 640px;
  }
  .areas-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
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
    gap: 0.85rem;
    transition: background 0.2s;
    position: relative;
    overflow: hidden;
  }
  .area-card::before {
    content: '';
    position: absolute;
    bottom: -40px; left: -40px;
    width: 160px; height: 160px;
    background: radial-gradient(circle, rgba(230,183,211,0.07) 0%, transparent 65%);
    opacity: 0; transition: opacity 0.3s;
    pointer-events: none;
  }
  .area-card:hover { background: var(--bg3); }
  .area-card:hover::before { opacity: 1; }
  .area-num { font-size: 0.68rem; color: var(--text-dim); letter-spacing: 0.06em; font-weight: 500; }
  .area-icon {
    width: 38px; height: 38px;
    background: var(--accent-dim);
    border: 0.5px solid var(--accent-border);
    border-radius: var(--radius-sm);
    display: flex; align-items: center; justify-content: center;
    font-size: 1rem; color: var(--accent);
    transition: background 0.2s, transform 0.2s;
  }
  .area-card:hover .area-icon { background: var(--accent-mid); transform: translateY(-2px); }
  .area-card h4 { font-size: 0.95rem; font-weight: 700; color: var(--text); letter-spacing: -0.02em; }
  .area-card p { font-size: 0.8rem; color: var(--text-muted); font-weight: 400; line-height: 1.65; flex: 1; }
  .area-tags {
    display: flex; flex-wrap: wrap; gap: 0.35rem;
    padding-top: 0.85rem;
    border-top: 0.5px solid var(--border);
  }
  .tag {
    background: var(--accent-dim);
    border: 0.5px solid var(--border);
    border-radius: 99px;
    padding: 0.18rem 0.6rem;
    font-size: 0.67rem;
    color: var(--text-dim);
    transition: border-color 0.2s, color 0.2s;
  }
  .area-card:hover .tag { border-color: var(--accent-border); color: var(--accent); }

  @media (max-width: 960px) { .areas-grid { grid-template-columns: repeat(2, 1fr); } }
  @media (max-width: 600px) { .areas-grid { grid-template-columns: 1fr; } }
</style>

<section class="sobre" id="sobre">
  <div class="container">
    <div class="section-label">Sobre mim</div>
    <div class="sobre-text">
      <h2 class="section-title">Do briefing ao produto final</h2>
      <p>Sou uma profissional multidisciplinar que transita com fluência entre design e código. Acredito que a melhor interface é aquela que o usuário nem percebe — ela simplesmente funciona.</p>
      <p>Minha abordagem une pensamento estratégico de UX, olhar crítico de UI e a precisão técnica do desenvolvimento web. O resultado? Produtos digitais coesos, escaláveis e memoráveis.</p>
    </div>
    <div class="areas-grid">
      <div class="area-card">
        <div class="area-num">01</div>
        <div class="area-icon">◈</div>
        <h4>UX Design</h4>
        <p>Pesquiso, estruturo e valido experiências centradas em quem vai usar — do fluxo ao protótipo navegável.</p>
        <div class="area-tags">
          <span class="tag">Pesquisa</span>
          <span class="tag">Fluxos</span>
          <span class="tag">Testes</span>
        </div>
      </div>
      <div class="area-card">
        <div class="area-num">02</div>
        <div class="area-icon">◉</div>
        <h4>UI Design</h4>
        <p>Crio interfaces visuais com identidade, consistência e atenção a cada detalhe — do componente ao Design System.</p>
        <div class="area-tags">
          <span class="tag">Figma</span>
          <span class="tag">Design System</span>
          <span class="tag">Componentes</span>
        </div>
      </div>
      <div class="area-card">
        <div class="area-num">03</div>
        <div class="area-icon">◻</div>
        <h4>Web Design</h4>
        <p>Sites com visual forte, layout responsivo e experiência pensada para quem navega — em qualquer dispositivo.</p>
        <div class="area-tags">
          <span class="tag">Landing Pages</span>
          <span class="tag">UI/UX</span>
          <span class="tag">E-commerce</span>
        </div>
      </div>
      <div class="area-card">
        <div class="area-num">04</div>
        <div class="area-icon">⌨</div>
        <h4>Desenvolvimento Full Stack</h4>
        <p>Do design ao código — desenvolvo o que projeto, garantindo fidelidade entre o Figma e o site final.</p>
        <div class="area-tags">
          <span class="tag">HTML</span>
          <span class="tag">CSS</span>
          <span class="tag">JS</span>
          <span class="tag">WordPress</span>
          <span class="tag">PHP</span>
        </div>
      </div>
    </div>
  </div>
</section>