<style>
  .hero-wrap {
    position: relative;
    z-index: 1;
    min-height: 85vh;
    overflow: hidden;
    display: flex;
    flex-direction: column;
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
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 2rem 2.5rem 3rem;
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    min-height: 85vh;
  }

  .hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(230,183,211,0.12);
    border: 0.5px solid rgba(255,255,255,0.12);
    border-radius: 99px;
    padding: 0.38rem 1rem;
    font-size: 0.72rem;
    font-weight: 500;
    color: var(--accent);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 2.5rem;
    width: fit-content;
  }

  .hero-badge::before {
    content: '';
    width: 6px;
    height: 6px;
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
    font-size: clamp(2.4rem, 3.8vw, 3.5rem);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -0.03em;
    color: var(--text);
    max-width: 680px;
    margin-bottom: 1.5rem;
  }

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
    position: relative;
    overflow: hidden;
    transform: translateZ(0);
    transition: transform 0.25s cubic-bezier(.16,1,.3,1), box-shadow 0.25s;
  }

  .btn-primary::before {
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

  .btn-primary:hover        { transform: translateY(-2px); box-shadow: 0 8px 28px rgba(230,183,211,0.38); }
  .btn-primary:hover::before { animation: btnShimmer 0.55s cubic-bezier(.4,0,.2,1) forwards; }

  .btn-ghost {
    color: var(--text-muted);
    font-family: var(--font);
    font-size: 0.9rem;
    font-weight: 400;
    text-decoration: none;
    border: 0.5px solid rgba(255,255,255,0.25);
    padding: 0.85rem 1.75rem;
    border-radius: 99px;
    position: relative;
    overflow: hidden;
    transform: translateZ(0);
    transition: color 0.35s cubic-bezier(.16,1,.3,1), border-color 0.35s,
                transform 0.25s cubic-bezier(.16,1,.3,1);
  }

  .btn-ghost::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(230,183,211,0.1);
    border-radius: inherit;
    transform: translateX(-101%);
    transition: transform 0.4s cubic-bezier(.16,1,.3,1);
    pointer-events: none;
  }

  .btn-ghost:hover        { color: var(--accent); border-color: rgba(230,183,211,0.4); transform: translateY(-2px); }
  .btn-ghost:hover::before { transform: translateX(0); }

  @media (max-width: 600px) {
    .hero-actions {
      flex-direction: column;
      align-items: flex-start;
    }
    .btn-primary,
    .btn-ghost {
      width: auto;
      display: inline-flex;
    }
  }
</style>

<div class="hero-wrap">
  <section class="hero" id="hero">
    <div class="hero-badge">Disponível para novos projetos</div>
    <h1>Nunca foi tão fácil<br>ter um site próprio.</h1>
    <p class="hero-desc">Estúdio de design e desenvolvimento de sites. Crio sites bonitos, funcionais e responsivos, pensados para destacar sua marca na internet e funcionar perfeitamente em qualquer dispositivo. Além disso, você conta com suporte completo após o lançamento (a parte).</p>
    <div class="hero-actions">
      <a href="#servicos" class="btn-primary">Conhecer serviços</a>
      <a href="#projetos" class="btn-ghost">Ver projetos</a>
    </div>
  </section>
  <?php include 'marquee.php'; ?>
</div>