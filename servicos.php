<style>
  .servicos { padding: 6rem 0; border-bottom: 0.5px solid var(--border); }
  .servicos-header { margin-bottom: 3rem; }
  .servicos-header p { font-size: 0.95rem; color: var(--text-muted); max-width: 440px; line-height: 1.7; margin-top: 0.75rem; }
  .servicos-grid {
    display: grid; grid-template-columns: repeat(3, 1fr);
    gap: 1px; background: var(--border);
    border: 0.5px solid var(--border); border-radius: var(--radius); overflow: hidden;
  }
  .servico-card {
    background: var(--bg2); padding: 2rem;
    display: flex; flex-direction: column; gap: 1.1rem;
    transition: background 0.25s, box-shadow 0.25s; position: relative; overflow: hidden;
  }
  .servico-card::before {
    content: '';
    position: absolute;
    bottom: -40px; left: -40px;
    width: 220px; height: 220px;
    background: radial-gradient(circle, rgba(230,183,211,0.14) 0%, transparent 65%);
    opacity: 0; transition: opacity 0.3s;
    pointer-events: none;
  }
  .servico-card::after {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--accent), transparent);
    opacity: 0; transition: opacity 0.25s;
  }
  .servico-card:hover { background: var(--bg3); box-shadow: 0 8px 32px rgba(230,183,211,0.08); }
  .servico-card:hover::before { opacity: 1; }
  .servico-card:hover::after { opacity: 1; }
  .servico-card.destaque { border: 1.5px solid var(--accent-border); }
  .servico-badge {
    position: absolute; top: 1.5rem; right: 1.5rem;
    background: var(--accent-dim); border: 0.5px solid var(--accent-border);
    border-radius: 99px; padding: 0.18rem 0.65rem;
    font-size: 0.67rem; font-weight: 500; color: var(--accent); letter-spacing: 0.04em;
  }
  .servico-icon {
    width: 38px; height: 38px; background: var(--accent-dim);
    border: 0.5px solid var(--accent-border); border-radius: var(--radius-sm);
    display: flex; align-items: center; justify-content: center;
    font-size: 1rem; color: var(--accent);
  }
  .servico-card h3 { font-size: 1.05rem; font-weight: 700; color: var(--text); letter-spacing: -0.02em; }
  .servico-card > p { font-size: 0.82rem; color: var(--text-muted); line-height: 1.7; }
  .servico-includes { border-top: 0.5px solid var(--border); padding-top: 1.1rem; display: flex; flex-direction: column; gap: 0.45rem; }
  .servico-includes-label { font-size: 0.67rem; font-weight: 500; color: var(--text-dim); letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 0.2rem; }
  .include-item { display: flex; align-items: flex-start; gap: 0.55rem; font-size: 0.8rem; color: var(--text-muted); line-height: 1.5; }
  .include-dot { width: 4px; height: 4px; border-radius: 50%; background: var(--accent); margin-top: 0.5rem; flex-shrink: 0; opacity: 0.55; }
  .servico-footer { margin-top: auto; border-top: 0.5px solid var(--border); padding-top: 1.25rem; display: flex; align-items: flex-end; justify-content: space-between; gap: 1rem; }
  .servico-price-label { font-size: 0.67rem; color: var(--text-dim); letter-spacing: 0.06em; text-transform: uppercase; margin-bottom: 0.2rem; }
  .servico-price { font-size: 1.5rem; font-weight: 800; color: var(--text); letter-spacing: -0.03em; line-height: 1; }
  .servico-prazo { font-size: 0.7rem; color: var(--text-dim); margin-top: 0.3rem; }
  .servico-prazo strong { color: var(--text-muted); font-weight: 500; }
  .btn-servico {
    background: var(--accent); color: #1a1018;
    font-size: 0.8rem; font-weight: 500;
    padding: 0.65rem 1.25rem; border-radius: 99px;
    text-decoration: none; white-space: nowrap;
    display: flex; align-items: center; gap: 0.4rem;
    transition: opacity 0.2s; flex-shrink: 0;
  }
  .btn-servico:hover { opacity: 0.82; }

  @media (max-width: 960px) { .servicos-grid { grid-template-columns: 1fr; } }
</style>

<section class="servicos" id="servicos">
  <div class="container">
    <div class="servicos-header">
      <div class="section-label">Serviços</div>
      <h2 class="section-title">O que posso fazer pelo seu negócio</h2>
      <p>Cada projeto é feito do zero, com atenção ao visual, à experiência e ao que realmente importa para o seu cliente.</p>
    </div>
    <div class="servicos-grid">

      <div class="servico-card">
        <div class="servico-badge">Mais pedido</div>
        <div class="servico-icon">✦</div>
        <h3>Identidade Visual</h3>
        <p>Sua marca com personalidade própria. Crio uma identidade visual completa que representa quem você é.</p>
        <div class="servico-includes">
          <div class="servico-includes-label">O que está incluso</div>
          <div class="include-item"><div class="include-dot"></div>Logotipo</div>
          <div class="include-item"><div class="include-dot"></div>Paleta de cores</div>
          <div class="include-item"><div class="include-dot"></div>Tipografia</div>
          <div class="include-item"><div class="include-dot"></div>Ícones organizados</div>
          <div class="include-item"><div class="include-dot"></div>Mockup de aplicação</div>
          <div class="include-item"><div class="include-dot"></div>Manual de marca</div>
          <div class="include-item"><div class="include-dot"></div>Arquivos em AI, PDF e PNG</div>
          <div class="include-item"><div class="include-dot"></div>Ajustes e revisões ilimitadas</div>
        </div>
        <div class="servico-footer">
          <div>
            <div class="servico-price-label">A partir de</div>
            <div class="servico-price">R$400</div>
            <div class="servico-prazo">Prazo: <strong>7 a 14 dias úteis</strong></div>
          </div>
          <a href="https://wa.me/5541920058670" class="btn-servico" target="_blank">Solicitar serviço</a>
        </div>
      </div>

      <div class="servico-card destaque">
        <div class="servico-icon">◈</div>
        <h3>Landing Page</h3>
        <p>Página focada em converter visitantes em clientes. Design estratégico e código otimizado.</p>
        <div class="servico-includes">
          <div class="servico-includes-label">O que está incluso</div>
          <div class="include-item"><div class="include-dot"></div>Design exclusivo no Figma</div>
          <div class="include-item"><div class="include-dot"></div>Desenvolvimento completo</div>
          <div class="include-item"><div class="include-dot"></div>Responsivo para mobile e desktop</div>
          <div class="include-item"><div class="include-dot"></div>Formulário de contato integrado</div>
          <div class="include-item"><div class="include-dot"></div>1 rodada de ajustes inclusa</div>
        </div>
        <div class="servico-footer">
          <div>
            <div class="servico-price-label">A partir de</div>
            <div class="servico-price">R$1.200</div>
            <div class="servico-prazo">Prazo: <strong>7 a 10 dias úteis</strong></div>
          </div>
          <a href="https://wa.me/5541920058670" class="btn-servico" target="_blank">Solicitar serviço</a>
        </div>
      </div>

      <div class="servico-card">
        <div class="servico-icon">◉</div>
        <h3>Site Personalizado</h3>
        <p>Site completo com múltiplas páginas, design exclusivo e focado na sua necessidade específica.</p>
        <div class="servico-includes">
          <div class="servico-includes-label">O que está incluso</div>
          <div class="include-item"><div class="include-dot"></div>Até 5 páginas personalizadas</div>
          <div class="include-item"><div class="include-dot"></div>Design exclusivo no Figma</div>
          <div class="include-item"><div class="include-dot"></div>Desenvolvimento completo</div>
          <div class="include-item"><div class="include-dot"></div>Responsivo para todos os dispositivos</div>
          <div class="include-item"><div class="include-dot"></div>2 rodadas de ajustes inclusas</div>
        </div>
        <div class="servico-footer">
          <div>
            <div class="servico-price-label">A partir de</div>
            <div class="servico-price">R$2.500</div>
            <div class="servico-prazo">Prazo: <strong>15 a 25 dias úteis</strong></div>
          </div>
          <a href="https://wa.me/5541920058670" class="btn-servico" target="_blank">Solicitar serviço</a>
        </div>
      </div>

    </div>
  </div>
</section>