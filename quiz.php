<style>
  .quiz {
    padding: 6rem 0;
  }

  .quiz-inner {
    max-width: 580px;
    margin: 0 auto;
  }

  .quiz-header {
    text-align: center;
    margin-bottom: 2.5rem;
  }

  .quiz-progress {
    display: flex;
    gap: 6px;
    justify-content: center;
    margin-bottom: 2rem;
  }

  .quiz-progress-dot {
    width: 32px;
    height: 4px;
    border-radius: 99px;
    background: var(--border-hover);
    transition: background 0.3s;
  }
  .quiz-progress-dot.active { background: var(--accent); }
  .quiz-progress-dot.done { background: rgba(230,183,211,0.4); }

  .quiz-step {
    display: none;
    flex-direction: column;
    gap: 1rem;
    animation: quizFade 0.3s ease;
  }
  .quiz-step.active { display: flex; }

  @keyframes quizFade {
    from { opacity: 0; transform: translateY(8px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .quiz-question {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text);
    letter-spacing: -0.02em;
    text-align: center;
    margin: 0 0 0.5rem;
  }

  .quiz-options {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }

  .quiz-option {
    background: var(--bg2);
    border: 0.5px solid var(--border);
    border-radius: var(--radius);
    padding: 1rem 1.25rem;
    cursor: pointer;
    font-family: var(--font);
    font-size: 0.9rem;
    font-weight: 400;
    color: var(--text-muted);
    text-align: left;
    transition: background 0.2s, border-color 0.2s, color 0.2s;
    display: flex;
    align-items: center;
    gap: 0.75rem;
  }
  .quiz-option:hover {
    background: var(--bg3);
    border-color: var(--border-hover);
    color: var(--text);
  }
  .quiz-option.selected {
    background: var(--accent-dim);
    border-color: var(--accent);
    color: var(--text);
  }

  .quiz-option-icon {
    width: 32px;
    height: 32px;
    border-radius: var(--radius-sm);
    background: var(--accent-dim);
    border: 0.5px solid var(--accent-border);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: var(--accent);
  }
  .quiz-option-icon svg { width: 16px; height: 16px; }

  .quiz-result {
    display: none;
    flex-direction: column;
    gap: 1rem;
    animation: quizFade 0.3s ease;
  }
  .quiz-result.active { display: flex; }

  .quiz-result-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--text);
    letter-spacing: -0.02em;
    text-align: center;
    margin: 0;
  }

  .result-card {
    background: var(--bg2);
    border: 0.5px solid var(--border-hover);
    border-radius: var(--radius);
    padding: 1.25rem;
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
  }

  .result-card-top {
    display: flex;
    align-items: center;
    gap: 0.75rem;
  }

  .result-icon {
    width: 38px;
    height: 38px;
    background: var(--accent-dim);
    border: 0.5px solid var(--accent-border);
    border-radius: var(--radius-sm);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--accent);
    flex-shrink: 0;
  }
  .result-icon svg { width: 18px; height: 18px; }

  .result-name {
    font-size: 1rem;
    font-weight: 700;
    color: var(--text);
    letter-spacing: -0.02em;
    margin: 0;
  }

  .result-price {
    font-size: 0.78rem;
    color: var(--text-muted);
  }

  .result-desc {
    font-size: 0.82rem;
    color: var(--text-muted);
    line-height: 1.65;
    margin: 0;
  }

  .result-note {
    font-size: 0.75rem;
    color: var(--accent);
    background: var(--accent-dim);
    border: 0.5px solid var(--accent-border);
    border-radius: var(--radius-sm);
    padding: 0.6rem 0.85rem;
    line-height: 1.5;
  }

  .result-actions {
    display: flex;
    gap: 0.75rem;
    flex-direction: column;
    margin-top: 0.5rem;
  }

  .btn-quiz-primary {
    background: var(--accent);
    color: #1a1018;
    font-family: var(--font);
    font-size: 0.88rem;
    font-weight: 600;
    padding: 0.85rem 1.5rem;
    border-radius: 99px;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    transition: opacity 0.2s, transform 0.2s;
    border: none;
    cursor: pointer;
    width: 100%;
  }
  .btn-quiz-primary:hover { opacity: 0.85; transform: translateY(-1px); }
  .btn-quiz-primary svg { width: 15px; height: 15px; flex-shrink: 0; }

  .btn-quiz-secondary {
    background: transparent;
    border: 0.5px solid var(--border-hover);
    border-radius: 99px;
    padding: 0.85rem 1.5rem;
    font-family: var(--font);
    font-size: 0.82rem;
    font-weight: 400;
    color: var(--text-muted);
    cursor: pointer;
    transition: border-color 0.2s, color 0.2s;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
  }
  .btn-quiz-secondary:hover { border-color: var(--accent-border); color: var(--text); }

  .btn-restart {
    background: transparent;
    border: none;
    font-family: var(--font);
    font-size: 0.78rem;
    color: var(--text-dim);
    cursor: pointer;
    text-align: center;
    padding: 0.5rem;
    transition: color 0.2s;
    width: 100%;
  }
  .btn-restart:hover { color: var(--text-muted); }
</style>

<section class="quiz" id="quiz">
  <div class="container">
    <div class="quiz-inner">
      <div class="quiz-header">
        <div class="section-label">Quiz</div>
        <h2 class="section-title">Que tal uma ajudinha?</h2>
        <p style="font-size:0.9rem; color:var(--text-muted); margin-top:0.5rem;">Responda 2 perguntas e descubra o serviço ideal para você.</p>
      </div>

      <div class="quiz-progress">
        <div class="quiz-progress-dot active" id="qdot-0"></div>
        <div class="quiz-progress-dot" id="qdot-1"></div>
      </div>

      <!-- STEP 1 -->
      <div class="quiz-step active" id="qstep-0">
        <p class="quiz-question">O que você precisa?</p>
        <div class="quiz-options">
          <button class="quiz-option" onclick="qAnswer(0, 'marca')">
            <div class="quiz-option-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
            </div>
            Criar ou renovar minha marca
          </button>
          <button class="quiz-option" onclick="qAnswer(0, 'site')">
            <div class="quiz-option-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
            </div>
            Site
          </button>
          <button class="quiz-option" onclick="qAnswer(0, 'loja')">
            <div class="quiz-option-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            </div>
            Loja virtual
          </button>
        </div>
      </div>

      <!-- STEP 2 -->
      <div class="quiz-step" id="qstep-1">
        <p class="quiz-question">Qual é o seu orçamento?</p>
        <div class="quiz-options">
          <button class="quiz-option" onclick="qAnswer(1, 'baixo')">
            <div class="quiz-option-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            </div>
            Até R$1.000
          </button>
          <button class="quiz-option" onclick="qAnswer(1, 'medio')">
            <div class="quiz-option-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            </div>
            Entre R$1.000 e R$3.000
          </button>
          <button class="quiz-option" onclick="qAnswer(1, 'alto')">
            <div class="quiz-option-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            </div>
            Acima de R$3.000
          </button>
        </div>
      </div>

      <!-- RESULTADO -->
      <div class="quiz-result" id="qresult">
        <p class="quiz-result-title" id="qresult-title"></p>
        <div id="qresult-cards"></div>
        <div class="result-actions">
          <a href="#servicos" class="btn-quiz-primary">
            Ver mais informações
          </a>
          <button class="btn-restart" onclick="qRestart()">Refazer o quiz</button>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
var qAnswers = {};

var qServices = {
  marca: {
    icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>',
    name: 'Identidade Visual',
    price: 'A partir de R$400 · 10–14 dias úteis',
    desc: 'Personalidade e consistência para sua marca em todos os pontos de contato com o público.'
  },
  acessivel: {
    icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
    name: 'Site Acessível',
    price: 'A partir de R$800 · 7–10 dias úteis',
    desc: 'Site profissional desenvolvido em plataforma visual, com design personalizado e qualidade sem grande investimento.'
  },
  landing: {
    icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>',
    name: 'Landing Page',
    price: 'A partir de R$1.200 · 15–20 dias úteis',
    desc: 'Página focada em converter visitantes em clientes, com design estratégico, código otimizado e experiência pensada para resultados.'
  },
  personalizado: {
    icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>',
    name: 'Site Personalizado',
    price: 'A partir de R$6.000 · 30–60 dias úteis',
    desc: 'Solução completa sob medida para o seu negócio, desenvolvida do zero com foco em estratégia e escalabilidade.'
  },
  loja: {
    icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>',
    name: 'Loja Virtual',
    price: 'A partir de R$4.000 · 30–45 dias úteis',
    desc: 'E-commerce completo para vender online com design estratégico, experiência de compra fluida e credibilidade.'
  }
};

function qAnswer(step, value) {
  qAnswers[step] = value;

  var opts = document.querySelectorAll('#qstep-' + step + ' .quiz-option');
  opts.forEach(function(o) { o.classList.remove('selected'); });
  event.currentTarget.classList.add('selected');

  setTimeout(function() {
    if (step === 0 && value === 'marca') {
      qShowResult([qServices.marca], 'Encontramos o serviço ideal para você!', null);
    } else if (step === 0) {
      qGoToStep(1);
    } else {
      var need = qAnswers[0];
      var budget = value;
      var result = [];
      var note = null;

      if (need === 'site') {
        if (budget === 'baixo') {
          result = [qServices.acessivel];
        } else if (budget === 'medio') {
          result = [qServices.landing, qServices.acessivel];
        } else {
          result = [qServices.personalizado];
        }
      } else if (need === 'loja') {
        if (budget === 'baixo' || budget === 'medio') {
          result = [qServices.acessivel];
          note = 'A Loja Virtual começa em R$4.000. O Site Acessível é a opção mais próxima dentro do seu orçamento atual.';
        } else {
          result = [qServices.loja];
        }
      }

      qShowResult(result, result.length > 1 ? 'Encontramos mais de uma opção para você!' : 'Encontramos o serviço ideal para você!', note);
    }
  }, 300);
}

function qGoToStep(step) {
  document.querySelectorAll('.quiz-step').forEach(function(s) { s.classList.remove('active'); });
  document.getElementById('qstep-' + step).classList.add('active');
  document.querySelectorAll('.quiz-progress-dot').forEach(function(d, i) {
    d.classList.remove('active', 'done');
    if (i < step) d.classList.add('done');
    if (i === step) d.classList.add('active');
  });
}

function qShowResult(items, title, note) {
  document.querySelectorAll('.quiz-step').forEach(function(s) { s.classList.remove('active'); });
  document.querySelectorAll('.quiz-progress-dot').forEach(function(d) { d.classList.remove('active'); d.classList.add('done'); });
  document.getElementById('qresult-title').textContent = title;

  var html = '';
  items.forEach(function(s) {
    html += '<div class="result-card"><div class="result-card-top"><div class="result-icon">' + s.icon + '</div><div><p class="result-name">' + s.name + '</p><span class="result-price">' + s.price + '</span></div></div><p class="result-desc">' + s.desc + '</p></div>';
  });
  if (note) {
    html += '<div class="result-note">💡 ' + note + '</div>';
  }
  document.getElementById('qresult-cards').innerHTML = html;
  document.getElementById('qresult').classList.add('active');
}

function qRestart() {
  qAnswers = {};
  document.getElementById('qresult').classList.remove('active');
  document.querySelectorAll('.quiz-option').forEach(function(o) { o.classList.remove('selected'); });
  qGoToStep(0);
}
</script>
