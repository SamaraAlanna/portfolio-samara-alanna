<style>
  .marquee-wrap {
    border-top: 0.5px solid var(--border);
    border-bottom: 0.5px solid var(--border);
    overflow: hidden;
    padding: 0.9rem 0;
    background: var(--bg2);
  }
  .marquee-track {
    display: flex;
    gap: 2.5rem;
    animation: marquee 28s linear infinite;
    width: max-content;
  }
  .marquee-item {
    font-size: 0.72rem;
    font-weight: 500;
    color: var(--text-dim);
    letter-spacing: 0.1em;
    text-transform: uppercase;
    white-space: nowrap;
  }
  .marquee-item span { color: var(--accent); margin-right: 2.5rem; }
  @keyframes marquee {
    from { transform: translateX(0); }
    to   { transform: translateX(-50%); }
  }
</style>

<div class="marquee-wrap">
  <div class="marquee-track">
    <span class="marquee-item">UX Design <span>✦</span></span>
    <span class="marquee-item">UI Design <span>✦</span></span>
    <span class="marquee-item">Web Design <span>✦</span></span>
    <span class="marquee-item">Desenvolvimento Front-end <span>✦</span></span>
    <span class="marquee-item">HTML <span>✦</span></span>
    <span class="marquee-item">CSS <span>✦</span></span>
    <span class="marquee-item">JavaScript <span>✦</span></span>
    <span class="marquee-item">Figma <span>✦</span></span>
    <span class="marquee-item">WordPress <span>✦</span></span>
    <span class="marquee-item">Design System <span>✦</span></span>
    <span class="marquee-item">UX Design <span>✦</span></span>
    <span class="marquee-item">UI Design <span>✦</span></span>
    <span class="marquee-item">Web Design <span>✦</span></span>
    <span class="marquee-item">Desenvolvimento Front-end <span>✦</span></span>
    <span class="marquee-item">HTML <span>✦</span></span>
    <span class="marquee-item">CSS <span>✦</span></span>
    <span class="marquee-item">JavaScript <span>✦</span></span>
    <span class="marquee-item">Figma <span>✦</span></span>
    <span class="marquee-item">WordPress <span>✦</span></span>
    <span class="marquee-item">Design System <span>✦</span></span>
  </div>
</div>