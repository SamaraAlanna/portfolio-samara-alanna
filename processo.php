<style>
  .processo { padding: 6rem 0; border-bottom: 0.5px solid var(--border); }
  .processo h2 { font-size: clamp(1.6rem, 3vw, 2.2rem); font-weight: 700; letter-spacing: -0.03em; margin-bottom: 3rem; max-width: 480px; }
  .processo-steps {
    display: grid; grid-template-columns: repeat(4, 1fr);
    gap: 1px; background: var(--border);
    border: 0.5px solid var(--border); border-radius: var(--radius); overflow: hidden;
  }
  .step { background: var(--bg2); padding: 2rem 1.5rem; transition: background 0.25s, box-shadow 0.25s; position: relative; overflow: hidden; }
  .step::before {
    content: '';
    position: absolute;
    bottom: -40px; left: -40px;
    width: 220px; height: 220px;
    background: radial-gradient(circle, rgba(230,183,211,0.14) 0%, transparent 65%);
    opacity: 0; transition: opacity 0.3s;
    pointer-events: none;
  }
  .step::after {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--accent), transparent);
    opacity: 0; transition: opacity 0.25s;
  }
  .step:hover { background: var(--bg3); box-shadow: 0 8px 32px rgba(230,183,211,0.08); }
  .step:hover::before { opacity: 1; }
  .step:hover::after { opacity: 1; }
  .step-num { font-size: 1.75rem; font-weight: 800; color: rgba(230,183,211,0.12); line-height: 1; margin-bottom: 1.25rem; }
  .step h4 { font-size: 0.9rem; font-weight: 600; color: var(--text); margin-bottom: 0.5rem; }
  .step p { font-size: 0.78rem; color: var(--text-dim); line-height: 1.65; }

  @media (max-width: 960px) { .processo-steps { grid-template-columns: repeat(2, 1fr); } }
  @media (max-width: 600px) { .processo-steps { grid-template-columns: 1fr; } }
</style>

<section class="processo" id="metodologia">
  <div class="container">
    <div class="section-label">Método de trabalho</div>
    <h2>Um processo claro gera resultados previsíveis.</h2>
    <div class="processo-steps">
      <div class="step">
        <div class="step-num">01</div>
        <h4>Descoberta</h4>
        <p>Entendo o negócio, o usuário e os objetivos antes de qualquer tela.</p>
      </div>
      <div class="step">
        <div class="step-num">02</div>
        <h4>Estratégia</h4>
        <p>Defino arquitetura, fluxos e prioridades com base em dados de descoberta.</p>
      </div>
      <div class="step">
        <div class="step-num">03</div>
        <h4>Design</h4>
        <p>Crio interfaces testadas, refinadas e alinhadas à identidade da marca.</p>
      </div>
      <div class="step">
        <div class="step-num">04</div>
        <h4>Entrega</h4>
        <p>Desenvolvo ou handoff técnico com código limpo.</p>
      </div>
    </div>
  </div>
</section>