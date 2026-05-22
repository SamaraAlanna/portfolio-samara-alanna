<style>
  .faq {
    padding: 6rem 0;
  }

  .faq-header {
    margin-bottom: 3rem;
  }

  .faq-group {
    margin-bottom: 2.5rem;
  }
  .faq-group:last-child { margin-bottom: 0; }

  .faq-group-label {
    font-size: var(--text-sm);
    font-weight: 500;
    color: var(--text-muted);
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-bottom: 0.75rem;
    padding-left: 0.25rem;
  }

  .faq-list {
    display: flex;
    flex-direction: column;
    gap: 4px;
  }

  .faq-item {
    border: 0.5px solid var(--border);
    border-radius: var(--radius-sm);
    overflow: hidden;
  }

  .faq-trigger {
    width: 100%;
    background: var(--bg2);
    border: none;
    padding: 1.1rem 1.25rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-family: var(--font);
    gap: 1rem;
    transition: background 0.2s;
    text-align: left;
  }
  .faq-trigger:hover { background: var(--bg3); }
  .faq-trigger.open { background: var(--accent-dim); }

  .faq-question {
    font-size: var(--text-base);
    font-weight: 500;
    color: var(--text);
    line-height: 1.4;
    flex: 1;
  }
  .faq-trigger.open .faq-question { color: var(--accent); }

  .faq-chevron {
    width: 16px; height: 16px;
    color: var(--text-dim);
    flex-shrink: 0;
    transition: transform 0.3s cubic-bezier(0.4,0,0.2,1);
  }
  .faq-trigger.open .faq-chevron { transform: rotate(180deg); color: var(--accent); }

  .faq-body {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.35s cubic-bezier(0.4,0,0.2,1);
    background: var(--bg);
  }
  .faq-body.open { max-height: 400px; }

  .faq-answer {
    padding: 1rem 1.25rem 1.25rem;
    font-size: var(--text-base);
    color: var(--text-muted);
    line-height: 1.75;
    border-top: 0.5px solid var(--border);
  }

  .faq-answer a {
    color: var(--accent);
    text-decoration: none;
    border-bottom: 0.5px solid var(--accent-border);
    transition: border-color 0.2s;
  }
  .faq-answer a:hover { border-color: var(--accent); }

  .faq-answer strong {
    color: var(--text);
    font-weight: 500;
  }
</style>

<section class="faq" id="faq">
  <div class="container">
    <div class="faq-header">
      <div class="section-label">FAQ</div>
      <h2 class="section-title">Perguntas frequentes</h2>
    </div>

    <!-- HOSPEDAGEM E DOMÍNIO -->
    <div class="faq-group">
      <div class="faq-group-label">Hospedagem e domínio</div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">
            <span class="faq-question">O que é hospedagem e domínio?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-body">
            <div class="faq-answer">O <strong>domínio</strong> é o endereço do seu site na internet (ex: seusite.com.br). A <strong>hospedagem</strong> é o serviço que mantém seu site no ar, armazenando todos os arquivos. São serviços essenciais para qualquer site funcionar.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">
            <span class="faq-question">Está incluso no valor do site?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-body">
            <div class="faq-answer">Não. Hospedagem e domínio são serviços externos cobrados à parte, com renovação anual. O valor varia conforme o plano escolhido.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">
            <span class="faq-question">Onde você recomenda contratar?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-body">
            <div class="faq-answer">Recomendo a <strong>HostGator</strong> — é a plataforma que utilizo e indico para todos os meus clientes. <a href="https://indique-um-amigo.hostgator.com.br/sami_andrade!dcb635d2ff!a?locale=pt" target="_blank">Contratar pela HostGator →</a></div>
          </div>
        </div>
      </div>
    </div>

    <!-- PROCESSO -->
    <div class="faq-group">
      <div class="faq-group-label">Processo</div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">
            <span class="faq-question">Como funciona o processo de criação do site?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-body">
            <div class="faq-answer">O processo segue 6 etapas: <strong>preenchimento do briefing</strong> (documento base do projeto), contratação de hospedagem e domínio, <strong>desenvolvimento do layout no Figma</strong>, aprovação do layout, <strong>desenvolvimento do site</strong> e aprovação final.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">
            <span class="faq-question">Preciso ter o conteúdo pronto antes de começar?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-body">
            <div class="faq-answer">Não. Caso precise de ajuda com os textos, posso indicar parceiros de copywriting. O serviço é cobrado à parte.</div>
          </div>
        </div>
      </div>
    </div>

    <!-- PAGAMENTO -->
    <div class="faq-group">
      <div class="faq-group-label">Pagamento</div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">
            <span class="faq-question">Como funciona o pagamento?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-body">
            <div class="faq-answer">O pagamento é feito via <strong>Mercado Pago</strong>, com parcelamento em até <strong>12x</strong>. As parcelas são sem juros meus, porém sujeitas à taxa do Mercado Pago.</div>
          </div>
        </div>
      </div>
    </div>

    <!-- APÓS A ENTREGA -->
    <div class="faq-group">
      <div class="faq-group-label">Após a entrega</div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">
            <span class="faq-question">E depois que o site ficar pronto?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-body">
            <div class="faq-answer">Após a entrega, você recebe o site funcionando, hospedado e pronto para uso. Para manutenções futuras, ofereço o plano de <strong>Suporte Mensal</strong> com atualizações ilimitadas.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">
            <span class="faq-question">Posso pedir alterações depois da entrega?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-body">
            <div class="faq-answer">Sim! Alterações após a entrega podem ser solicitadas através do plano de <strong>Suporte Mensal</strong>, que inclui atualizações ilimitadas de texto, imagens, ajustes de layout e correção de bugs por R$400/mês.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">
            <span class="faq-question">O que acontece se meu site cair?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-body">
            <div class="faq-answer">Quedas podem acontecer por problemas na hospedagem ou domínio. Com o plano de <strong>Suporte Mensal</strong>, cuido do diagnóstico e resolução para deixar tudo no ar novamente.</div>
          </div>
        </div>
      </div>
    </div>

    <!-- GERAL -->
    <div class="faq-group">
      <div class="faq-group-label">Geral</div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">
            <span class="faq-question">Você faz site para qualquer tipo de negócio?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-body">
            <div class="faq-answer">Sim! Atendo desde pequenos empreendedores até empresas consolidadas, em diferentes segmentos e nichos.</div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">
            <span class="faq-question">Como entro em contato para começar?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-body">
            <div class="faq-answer">Pelo WhatsApp <a href="https://wa.me/5541920058670" target="_blank">(41) 92005-8670</a> ou pelo Instagram <a href="https://instagram.com/bordadesignn" target="_blank">@bordadesignn</a>.</div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<script>
function toggleFaq(btn) {
  var body = btn.nextElementSibling;
  var isOpen = btn.classList.contains('open');
  document.querySelectorAll('.faq-trigger.open').forEach(function(b) {
    b.classList.remove('open');
    b.nextElementSibling.classList.remove('open');
  });
  if (!isOpen) {
    btn.classList.add('open');
    body.classList.add('open');
  }
}
</script>
