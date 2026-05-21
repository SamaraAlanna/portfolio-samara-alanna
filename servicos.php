<style>
  .servicos {
    padding: 6rem 0;
    border-bottom: 0.5px solid var(--border);
  }

  .servicos .container {
    padding-left: 4rem;
    padding-right: 4rem;
  }

  .servicos-header {
    margin-bottom: 3rem;
  }

  .servicos-header p {
    font-size: 0.95rem;
    color: var(--text-muted);
    max-width: 480px;
    line-height: 1.7;
    margin-top: 0.75rem;
  }

  .servicos-carousel-wrapper {
    position: relative;
    display: flex;
    align-items: center;
  }

  .servicos-grid {
    flex: 1;
    min-width: 0;
    display: flex;
    gap: 1px;
    background: var(--border);
    border: 0.5px solid var(--border);
    border-radius: var(--radius);
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
  }
  .servicos-grid::-webkit-scrollbar { display: none; }

  .servico-card {
    flex: 0 0 calc(33.333% - 1px);
    scroll-snap-align: start;
    background: var(--bg2);
    padding: 2rem;
    display: flex;
    flex-direction: column;
    min-height: 520px;
    position: relative;
    overflow: hidden;
    transition: background 0.25s;
  }
  .servico-card:hover { background: var(--bg3); }

  .servico-card::after {
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
  .servico-card:hover::after { opacity: 1; }

  .servico-card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.75rem;
    min-height: 36px;
    margin-bottom: 1rem;
  }

  .servico-icon {
    width: 36px;
    height: 36px;
    background: var(--accent-dim);
    border: 0.5px solid var(--accent-border);
    border-radius: var(--radius-sm);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--accent);
    flex-shrink: 0;
  }
  .servico-icon svg { width: 16px; height: 16px; }

  .servico-badge {
    background: var(--accent-dim);
    border: 0.5px solid var(--accent-border);
    border-radius: 99px;
    padding: 0.18rem 0.65rem;
    font-size: 0.67rem;
    font-weight: 500;
    color: var(--accent);
    letter-spacing: 0.04em;
    white-space: nowrap;
  }

  .servico-card h3 {
    font-size: 1rem;
    font-weight: 700;
    color: var(--text);
    letter-spacing: -0.02em;
    margin: 0 0 0.75rem 0;
  }

  .servico-card > p {
    font-size: 0.82rem;
    color: var(--text-muted);
    line-height: 1.7;
    margin: 0 0 1.5rem 0;
    flex-shrink: 0;
  }

  .card-acc {
    border: 0.5px solid var(--border);
    border-radius: var(--radius-sm);
    overflow: hidden;
    margin-bottom: 0.5rem;
    flex-shrink: 0;
    transition: border-color 0.2s;
  }
  .card-acc:last-of-type { margin-bottom: 0; }
  .card-acc:has(.card-acc-trigger.open) { border-color: var(--accent); }

  .card-acc-trigger {
    width: 100%;
    background: rgba(255,255,255,0.02);
    border: none;
    padding: 0.65rem 0.85rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    font-family: var(--font);
    transition: background 0.2s;
  }
  .card-acc-trigger:hover { background: rgba(255,255,255,0.04); }
  .card-acc-trigger.open {
    background: var(--accent-dim);
    border-bottom: 0.5px solid var(--accent-border);
    box-shadow: 0 0 8px rgba(230,183,211,0.25);
  }

  .card-acc-label {
    font-size: 0.68rem;
    font-weight: 500;
    color: var(--text-dim);
    letter-spacing: 0.08em;
    text-transform: uppercase;
  }
  .card-acc-trigger.open .card-acc-label { color: var(--accent); }

  .card-acc-chevron {
    width: 14px;
    height: 14px;
    color: var(--text-dim);
    transition: transform 0.3s cubic-bezier(0.4,0,0.2,1);
    flex-shrink: 0;
  }
  .card-acc-trigger.open .card-acc-chevron { transform: rotate(180deg); color: var(--accent); }

  .card-acc-body {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.35s cubic-bezier(0.4,0,0.2,1);
    background: rgba(0,0,0,0.15);
  }
  .card-acc-body.open { max-height: 300px; }

  .card-acc-inner {
    padding: 0.85rem;
    display: flex;
    flex-direction: column;
    gap: 0.4rem;
    border-top: 0.5px solid var(--border);
  }

  .card-acc-item {
    display: flex;
    align-items: flex-start;
    gap: 0.5rem;
    font-size: 0.78rem;
    color: var(--text-muted);
    line-height: 1.4;
  }

  .card-acc-dot {
    width: 4px;
    height: 4px;
    border-radius: 50%;
    background: var(--accent);
    margin-top: 0.42rem;
    flex-shrink: 0;
    opacity: 0.5;
  }

  .rosa { color: var(--accent); font-weight: 700; }

  .servico-footer {
    margin-top: auto;
    border-top: 0.5px solid var(--border);
    padding-top: 1.25rem;
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 0.75rem;
  }

  .servico-price-label {
    font-size: 0.67rem;
    color: var(--text-dim);
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 0.15rem;
  }

  .servico-price {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--text);
    letter-spacing: -0.03em;
    line-height: 1;
  }

  .servico-prazo {
    font-size: 0.7rem;
    color: var(--text-dim);
    margin-top: 0.2rem;
  }
  .servico-prazo strong { color: var(--text-muted); font-weight: 500; }

  .btn-servico {
    background: var(--accent);
    color: #1a1018;
    font-family: var(--font);
    font-size: 0.78rem;
    font-weight: 600;
    padding: 0.65rem 1.1rem;
    border-radius: 99px;
    text-decoration: none;
    white-space: nowrap;
    display: inline-flex;
    align-items: center;
    flex-shrink: 0;
    position: relative;
    overflow: hidden;
    transform: translateZ(0);
    transition: transform 0.25s cubic-bezier(.16,1,.3,1), box-shadow 0.25s;
    border: none;
    cursor: pointer;
  }
  .btn-servico::before {
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
  .btn-servico:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(230,183,211,0.36); }
  .btn-servico:hover::before { animation: btnShimmer 0.55s cubic-bezier(.4,0,.2,1) forwards; }

  @keyframes btnShimmer { to { transform: skewX(-15deg) translateX(350%); } }

  #srv-prev {
    position: absolute;
    left: -60px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 2;
  }

  #srv-next {
    position: absolute;
    right: -60px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 2;
  }

  .carousel-btn {
    background: var(--accent-dim);
    border: 1px solid var(--accent-border);
    border-radius: 99px;
    color: var(--accent);
    width: 44px;
    height: 44px;
    min-width: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-size: 1.1rem;
    flex-shrink: 0;
    align-self: center;
    transition: background 0.25s, color 0.25s, box-shadow 0.25s;
  }
  .carousel-btn:hover { background: var(--accent); color: #1a1018; box-shadow: 0 4px 16px rgba(230,183,211,0.32); }

  @media (max-width: 960px) { .servico-card { flex: 0 0 calc(50% - 1px); } }
  @media (max-width: 600px) { .servico-card { flex: 0 0 88%; } }
</style>

<section class="servicos" id="servicos">
  <div class="container">
    <div class="servicos-header">
      <div class="section-label">Serviços</div>
      <h2 class="section-title">O que posso fazer pelo seu negócio</h2>
      <p>Cada projeto é desenvolvido de forma personalizada, pensando no visual, na experiência e no que realmente faz sentido para o seu negócio.</p>
    </div>

    <div class="servicos-carousel-wrapper">
      <button class="carousel-btn" id="srv-prev" aria-label="Anterior">&#8592;</button>
      <div class="servicos-grid">

        <!-- IDENTIDADE VISUAL -->
        <div class="servico-card">
          <div class="servico-card-top">
            <div class="servico-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
            </div>
            <span class="servico-badge">Mais pedido</span>
          </div>
          <h3>Identidade Visual</h3>
          <p>Personalidade e consistência para sua marca em todos os pontos de contato com o público.</p>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label">O que está incluso</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div>Logotipo + variações</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Paleta de cores + tipografia</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Ícones organizados</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Mockup de aplicação</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Manual de marca</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Arquivos em AI, PDF e PNG</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Revisões <span class="rosa">ilimitadas</span></div>
              </div>
            </div>
          </div>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label">Recomendado para</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div>Marcas</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Empresas</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Profissionais autônomos</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Marcas pessoais</div>
              </div>
            </div>
          </div>
          <div class="servico-footer">
            <div>
              <div class="servico-price-label">A partir de</div>
              <div class="servico-price">R$400</div>
              <div class="servico-prazo">Prazo: 10–14 dias úteis</div>
            </div>
            <a href="https://wa.me/5541920058670" class="btn-servico" target="_blank">Solicitar serviço</a>
          </div>
        </div>

        <!-- SITE ACESSÍVEL -->
        <div class="servico-card">
          <div class="servico-card-top">
            <div class="servico-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
            </div>
          </div>
          <h3>Site Acessível</h3>
          <p>Site profissional em plataforma visual. Qualidade sem precisar de um grande investimento.</p>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label">O que está incluso</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div>WordPress, Shopify ou Nuvemshop</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Design personalizado</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Responsivo + SEO básico</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Integrações com WhatsApp e redes sociais</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Ajustes <span class="rosa">ilimitados</span></div>
              </div>
            </div>
          </div>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label">Recomendado para</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div>Pequenos negócios</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Pequenos empreendedores</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Quem está começando</div>
              </div>
            </div>
          </div>
          <div class="servico-footer">
            <div>
              <div class="servico-price-label">A partir de</div>
              <div class="servico-price">R$800</div>
              <div class="servico-prazo">Prazo: 7–10 dias úteis</div>
            </div>
            <a href="https://wa.me/5541920058670" class="btn-servico" target="_blank">Solicitar serviço</a>
          </div>
        </div>

        <!-- LANDING PAGE -->
        <div class="servico-card">
          <div class="servico-card-top">
            <div class="servico-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
            </div>
          </div>
          <h3>Landing Page</h3>
          <p>Página focada em converter visitantes em clientes. Design estratégico e código otimizado.</p>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label">O que está incluso</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div>Design exclusivo</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Desenvolvimento completo</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Responsivo</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>1 página · 1 rodada de ajustes</div>
              </div>
            </div>
          </div>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label">Recomendado para</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div>Empresas · Lançamentos</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Produtos digitais</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Profissionais autônomos</div>
              </div>
            </div>
          </div>
          <div class="servico-footer">
            <div>
              <div class="servico-price-label">A partir de</div>
              <div class="servico-price">R$1.200</div>
              <div class="servico-prazo">Prazo: 15–20 dias úteis</div>
            </div>
            <a href="https://wa.me/5541920058670" class="btn-servico" target="_blank">Solicitar serviço</a>
          </div>
        </div>

        <!-- LOJA VIRTUAL -->
        <div class="servico-card">
          <div class="servico-card-top">
            <div class="servico-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            </div>
          </div>
          <h3>Loja Virtual</h3>
          <p>E-commerce completo para vender online com credibilidade, design estratégico e experiência pensada para converter.</p>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label">O que está incluso</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div>Design exclusivo</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Loja completa com carrinho e checkout</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Integração com meios de pagamento</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Responsivo + SEO básico</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Integrações com redes sociais</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Páginas + revisões <span class="rosa">ilimitadas</span></div>
              </div>
            </div>
          </div>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label">Recomendado para</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div>Lojas</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Marcas</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Produtos digitais</div>
              </div>
            </div>
          </div>
          <div class="servico-footer">
            <div>
              <div class="servico-price-label">A partir de</div>
              <div class="servico-price">R$4.000</div>
              <div class="servico-prazo">Prazo: 30–45 dias úteis</div>
            </div>
            <a href="https://wa.me/5541920058670" class="btn-servico" target="_blank">Solicitar serviço</a>
          </div>
        </div>

        <!-- SITE PERSONALIZADO -->
        <div class="servico-card">
          <div class="servico-card-top">
            <div class="servico-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
            </div>
          </div>
          <h3>Site Personalizado</h3>
          <p>Solução completa sob medida para o seu negócio. Desenvolvido do zero de forma estratégica e escalável.</p>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label">O que está incluso</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div>Design exclusivo</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Desenvolvimento completo</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Responsivo + SEO básico</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Integrações com WhatsApp e redes sociais</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Páginas + revisões <span class="rosa">ilimitadas</span></div>
              </div>
            </div>
          </div>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label">Recomendado para</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div>Marcas</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Empresas</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Profissionais autônomos</div>
                <div class="card-acc-item"><div class="card-acc-dot"></div>Marcas pessoais</div>
              </div>
            </div>
          </div>
          <div class="servico-footer">
            <div>
              <div class="servico-price-label">A partir de</div>
              <div class="servico-price">R$6.000</div>
              <div class="servico-prazo">Prazo: 30–60 dias úteis</div>
            </div>
            <a href="https://wa.me/5541920058670" class="btn-servico" target="_blank">Solicitar serviço</a>
          </div>
        </div>

      </div>
      <button class="carousel-btn" id="srv-next" aria-label="Próximo">&#8594;</button>
    </div>
  </div>
</section>

<script>
function toggleCard(btn) {
  var body = btn.nextElementSibling;
  var isOpen = btn.classList.contains('open');
  btn.classList.toggle('open', !isOpen);
  body.classList.toggle('open', !isOpen);
}

(function() {
  var grid = document.querySelector('.servicos-grid');
  document.getElementById('srv-prev').addEventListener('click', function() {
    var card = grid.querySelector('.servico-card');
    grid.scrollBy({ left: -(card.offsetWidth + 1), behavior: 'smooth' });
  });
  document.getElementById('srv-next').addEventListener('click', function() {
    var card = grid.querySelector('.servico-card');
    grid.scrollBy({ left: card.offsetWidth + 1, behavior: 'smooth' });
  });
})();
</script>
