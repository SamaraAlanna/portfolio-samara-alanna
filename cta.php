<style>
  .cta {
    padding: 8rem 2.5rem;
    min-height: calc(100vh - 64px);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  .cta::before {
    content: '';
    position: absolute;
    top: calc(50% + 5.5rem);
    bottom: auto;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 300px;
    background: radial-gradient(ellipse, rgba(230,183,211,0.10) 0%, rgba(230,183,211,0.03) 50%, transparent 70%);
    pointer-events: none;
  }
  .cta-eyebrow {
    font-size: 0.7rem;
    font-weight: 500;
    color: var(--accent);
    letter-spacing: 0.12em;
    text-transform: uppercase;
    margin-bottom: 1.5rem;
  }
  .cta h2 {
    font-size: clamp(1.8rem, 3.5vw, 3rem);
    font-weight: 800;
    letter-spacing: -0.04em;
    line-height: 1.05;
    margin-bottom: 1.5rem;
    max-width: 580px;
    margin-left: auto;
    margin-right: auto;
    white-space: nowrap;
  }
  .cta p {
    color: var(--text-muted);
    max-width: 400px;
    margin: 0 auto 2.5rem;
    font-size: 0.98rem;
  }
  .cta-actions {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1.25rem;
  }
  .btn-cta {
    background: var(--accent);
    color: #1a1018;
    font-size: 0.9rem;
    font-weight: 500;
    padding: 0.9rem 2rem;
    border-radius: 99px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: opacity 0.2s, transform 0.2s;
  }
  .btn-cta:hover {
    opacity: 0.85;
    transform: translateY(-1px);
  }
  .btn-cta svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
  }
</style>

<section class="cta" id="contato">
  <div class="cta-eyebrow">Vamos trabalhar juntos</div>
  <h2>Tem um projeto em mente?</h2>
  <p>Se interessou por algum serviço ou não encontrou o que desejava? Entre em contato!</p>
  <div class="cta-actions">
    <a href="https://wa.me/5541920058670" class="btn-cta" target="_blank">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      Entrar em contato
    </a>
  </div>
</section>