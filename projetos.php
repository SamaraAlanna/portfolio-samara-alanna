<style>
  .projetos {
    padding: 6rem 0;
  }

  .section-header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    margin-bottom: 3rem;
  }

  .section-header a {
    font-size: var(--text-base);
    color: var(--text-muted);
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.3rem;
    border: 0.5px solid var(--border);
    padding: 0.5rem 1rem;
    border-radius: 99px;
    transition: color 0.2s, border-color 0.2s;
  }

  .section-header a:hover { color: var(--accent); border-color: var(--accent-border); }

  .projects-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1px;
    background: var(--border);
    border: 0.5px solid var(--border);
    border-radius: var(--radius);
    overflow: hidden;
  }

  .project-card {
    background: var(--bg2);
    display: flex;
    flex-direction: column;
    text-decoration: none;
    overflow: hidden;
    transition: background 0.25s, box-shadow 0.25s;
    position: relative;
  }

  .project-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--accent), transparent);
    opacity: 0;
    transition: opacity 0.25s;
    z-index: 1;
  }

  .project-card:hover               { background: var(--bg3); box-shadow: 0 8px 32px rgba(230,183,211,0.08); }
  .project-card:hover::after        { opacity: 1; }
  .project-card:hover .proj-img img { transform: scale(1.04); }
  .project-card:hover .proj-arrow   { opacity: 1; transform: translate(0,0); }

  .proj-img {
    width: 100%;
    aspect-ratio: 16/9;
    overflow: hidden;
    background: var(--bg3);
    border-bottom: 0.5px solid var(--border);
  }

  .proj-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.45s cubic-bezier(0.4,0,0.2,1);
    display: block;
  }

  .proj-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 0.5rem;
  }

  .proj-placeholder-icon  { font-size: 1.5rem; color: var(--text-dim); opacity: 0.3; }
  .proj-placeholder-label { font-size: var(--text-xs); color: var(--text-dim); letter-spacing: 0.06em; text-transform: uppercase; }

  .proj-content {
    padding: 1.5rem 1.75rem 1.75rem;
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    flex: 1;
  }

  .proj-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .proj-tag {
    background: var(--accent-dim);
    border: 0.5px solid var(--accent-border);
    border-radius: 99px;
    padding: 0.25rem 0.85rem;
    font-size: var(--text-xs);
    color: var(--accent);
    font-weight: 500;
    letter-spacing: 0.04em;
  }

  .proj-num {
    font-size: var(--text-xs);
    color: var(--text-dim);
    letter-spacing: 0.06em;
  }

  .project-card h3 {
    font-size: var(--text-md);
    font-weight: 700;
    color: var(--text);
    letter-spacing: -0.02em;
    line-height: 1.3;
  }

  .project-card p {
    font-size: var(--text-sm);
    color: var(--text-muted);
    font-weight: 400;
    line-height: 1.65;
    flex: 1;
  }

  .proj-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 1rem;
    border-top: 0.5px solid var(--border);
  }

  .proj-tools {
    display: flex;
    gap: 0.35rem;
    flex-wrap: wrap;
  }

  .tool-tag {
    background: var(--accent-dim);
    border: 0.5px solid var(--border);
    border-radius: 99px;
    padding: 0.18rem 0.6rem;
    font-size: var(--text-xs);
    color: var(--text-muted);
    letter-spacing: 0.03em;
    transition: border-color 0.2s, color 0.2s;
  }
  .project-card:hover .tool-tag {
    border-color: var(--accent-border);
    color: var(--accent);
  }

  .proj-arrow {
    font-size: var(--text-base);
    color: var(--accent);
    opacity: 0;
    transform: translate(-4px, 4px);
    transition: opacity 0.25s, transform 0.25s;
    flex-shrink: 0;
  }

  @media (max-width: 960px) {
    .projects-grid { grid-template-columns: repeat(2, 1fr); }
    .section-header { flex-direction: column; align-items: flex-start; gap: 1rem; }
    .proj-tag { background: var(--accent-dim); border: 0.5px solid var(--accent-border); border-radius: 99px; padding: 0.18rem 0.6rem; font-size: var(--text-xs); color: var(--text-dim); }
  }
  @media (max-width: 600px) { .projects-grid { grid-template-columns: 1fr; } }
</style>

<section class="projetos" id="projetos">
  <div class="container">
    <div class="section-header">
      <div>
        <div class="section-label">Projetos</div>
        <h2 class="section-title">Veja alguns de meus trabalhos</h2>
      </div>
      <a href="#">↗ Ver todos os projetos</a>
    </div>
    <div class="projects-grid">
      <a class="project-card" href="#">
        <div class="proj-img">
          <div class="proj-placeholder">
            <div class="proj-placeholder-icon">⬚</div>
            <div class="proj-placeholder-label">Imagem do projeto</div>
          </div>
        </div>
        <div class="proj-content">
          <div class="proj-top"><span class="proj-tag">UX / Web App</span><span class="proj-num">01</span></div>
          <h3>Nome do Projeto</h3>
          <p>Descrição breve do projeto e o resultado entregue ao cliente.</p>
          <div class="proj-footer">
            <div class="proj-tools"><span class="tool-tag">Figma</span><span class="tool-tag">UX</span></div>
            <span class="proj-arrow">↗</span>
          </div>
        </div>
      </a>
      <a class="project-card" href="#">
        <div class="proj-img">
          <div class="proj-placeholder">
            <div class="proj-placeholder-icon">⬚</div>
            <div class="proj-placeholder-label">Imagem do projeto</div>
          </div>
        </div>
        <div class="proj-content">
          <div class="proj-top"><span class="proj-tag">Web Design</span><span class="proj-num">02</span></div>
          <h3>Nome do Projeto</h3>
          <p>Descrição breve do projeto e o resultado entregue ao cliente.</p>
          <div class="proj-footer">
            <div class="proj-tools"><span class="tool-tag">Figma</span><span class="tool-tag">HTML</span></div>
            <span class="proj-arrow">↗</span>
          </div>
        </div>
      </a>
      <a class="project-card" href="#">
        <div class="proj-img">
          <div class="proj-placeholder">
            <div class="proj-placeholder-icon">⬚</div>
            <div class="proj-placeholder-label">Imagem do projeto</div>
          </div>
        </div>
        <div class="proj-content">
          <div class="proj-top"><span class="proj-tag">Identidade Visual</span><span class="proj-num">03</span></div>
          <h3>Nome do Projeto</h3>
          <p>Descrição breve do projeto e o resultado entregue ao cliente.</p>
          <div class="proj-footer">
            <div class="proj-tools"><span class="tool-tag">Figma</span><span class="tool-tag">Branding</span></div>
            <span class="proj-arrow">↗</span>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>