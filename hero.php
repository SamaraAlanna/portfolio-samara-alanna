<style>
  .hero-wrap {
    position: relative;
    min-height: 100vh;
    overflow: hidden;
  }

  .hero-wrap::after {
    content: '';
    position: absolute;
    bottom: -220px;
    left: 50%;
    transform: translateX(-50%);
    width: 150%;
    height: 520px;
    border-radius: 50%;
    background: radial-gradient(ellipse at center,
      rgba(230,183,211,0.45) 0%,
      rgba(230,183,211,0.22) 35%,
      rgba(230,183,211,0.07) 60%,
      transparent 75%
    );
    filter: blur(70px);
    pointer-events: none;
    z-index: 0;
  }

  .hero {
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
    padding: 0 2.5rem;
    max-width: 1200px;
    margin: 0 auto;
  }

  .hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255,255,255,0.04);
    border: 0.5px solid rgba(255,255,255,0.12);
    border-radius: 99px;
    padding: 0.38rem 1rem;
    font-size: 0.72rem;
    font-weight: 500;
    color: var(--text-dim);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 2.5rem;
    width: fit-content;
  }
  .hero-badge::before {
    content: '';
    width: 6px; height: 6px;
    border-radius: 50%;
    background: var(--accent);
    flex-shrink: 0;
    animation: pulse 2.5s infinite;
  }
  @keyframes pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50%       { opacity: 0.35; transform: scale(0.65); }
  }

  /* Título em 2 linhas — largura controlada para quebrar naturalmente em 2 */
  .hero h1 {
    font-size: clamp(2.4rem, 3.8vw, 3.5rem);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -0.03em;
    color: var(--text);
    max-width: 680px;
    margin-bottom: 1.5rem;
  }

  /* Descrição em 2 linhas — largura controlada */
  .hero-desc {
    font-size: 0.97rem;
    font-weight: 400;
    color: var(--text-muted);
    max-width: 580px;
    line-height: 1.75;
    margin-bottom: 2.5rem;
  }

  .hero-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
  }
  .btn-primary {
    background: var(--accent);
    color: #1a1018;
    font-family: var(--font);
    font-size: 0.9rem;
    font-weight: 500;
    padding: 0.85rem 2rem;
    border-radius: 99px;
    text-decoration: none;
    transition: opacity 0.2s, transform 0.2s;
  }
  .btn-primary:hover { opacity: 0.85; transform: translateY(-1px); }
  .btn-ghost {
    color: var(--text-muted);
    font-family: var(--font);
    font-size: 0.9rem;
    font-weight: 400;
    text-decoration: none;
    border: 0.5px solid rgba(255,255,255,0.12);
    padding: 0.85rem 1.75rem;
    border-radius: 99px;
    transition: color 0.2s, border-color 0.2s;
  }
  .btn-ghost:hover { color: var(--text); border-color: rgba(230,183,211,0.3); }
</style>

<div class="hero-wrap">
  <section class="hero" id="hero">
    <div class="hero-badge">Disponível para projetos</div>
    <h1>Ter um site profissional é<br>mais simples do que parece.</h1>
    <p class="hero-desc">Sou a Samara Alanna, designer e desenvolvedora. Você me conta o que precisa e eu crio seu site — cuidando do visual, da experiência e de tudo que envolve o funcionamento.</p>
    <div class="hero-actions">
      <a href="#servicos" class="btn-primary">Conhecer serviços</a>
      <a href="#projetos" class="btn-ghost">Ver projetos</a>
    </div>
  </section>
</div>