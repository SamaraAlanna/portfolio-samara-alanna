<style>
  .hero {
    position: relative;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 6rem 2.5rem 5rem;
    max-width: var(--max-width);
    margin: 0 auto;
    overflow: hidden;
  }
  .hero::after {
    content: '';
    position: absolute;
    bottom: -80px;
    left: 50%;
    transform: translateX(-50%);
    width: 1100px;
    height: 520px;
    background: radial-gradient(ellipse at center bottom,
      rgba(180,100,150,0.28) 0%,
      rgba(230,183,211,0.14) 30%,
      rgba(150,80,130,0.05) 60%,
      transparent 75%
    );
    pointer-events: none;
    z-index: 0;
  }
  .hero > * { position: relative; z-index: 1; }

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

  .hero h1 {
    font-size: clamp(2.6rem, 5vw, 4.2rem);
    font-weight: 800;
    line-height: 1.08;
    letter-spacing: -0.03em;
    color: var(--text);
    max-width: 660px;
    margin-bottom: 1.5rem;
  }
  .hero-desc {
    font-size: 0.97rem;
    font-weight: 400;
    color: var(--text-muted);
    max-width: 520px;
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

<section class="hero">
  <div class="hero-badge">Disponível para projetos</div>
  <h1>Ter um site profissional é mais simples do que parece.</h1>
  <p class="hero-desc">Sou a Samara Alanna, designer e desenvolvedora. Você me conta o que precisa e eu crio seu site — cuidando do visual, da experiência e de tudo que envolve o funcionamento.</p>
  <div class="hero-actions">
    <a href="#servicos" class="btn-primary">Conhecer serviços</a>
    <a href="#projetos" class="btn-ghost">Ver projetos</a>
  </div>
</section>