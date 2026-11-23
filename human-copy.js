const copy={
  '.hero-copy .eyebrow':'CONFIANÇA PARA PROTEGER O QUE IMPORTA.',
  '.hero-lead':'Quando a decisão é importante, você precisa entender o caminho antes de dar o próximo passo.',
  '.intro-text p':'Você conta sua história. A gente analisa o que aconteceu, explica suas opções e ajuda a escolher o caminho mais seguro.',
  '.panel-head>p':'Atendemos pessoas e empresas que precisam tomar decisões com mais segurança.',
  '.service-list>p':'Começamos pela conversa. Depois, organizamos os fatos, avaliamos os documentos e acompanhamos cada etapa com você.',
  '.service-row:nth-of-type(1) span':'Para entender seus riscos e se antecipar aos problemas.',
  '.service-row:nth-of-type(2) span':'Para chegar à audiência sabendo o que esperar e como agir.',
  '.service-row:nth-of-type(3) span':'Para resolver as providências do seu caso sem deixar etapas para trás.',
  '.contact-banner>p':'Conte o que aconteceu. Vamos entender juntos se podemos ajudar.',
  '.location-copy>p:not(.eyebrow)':'Veja como chegar ao escritório e escolha o melhor horário para conversar com a nossa equipe.'
};
Object.entries(copy).forEach(([selector,text])=>{const el=document.querySelector(selector);if(el)el.textContent=text});
const instagramLink=document.querySelector('.footer-contact a[href*="instagram.com"]');
if(instagramLink) instagramLink.innerHTML='<svg class="instagram-icon" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg><span>@escritoriopadilhaadvogados</span><span class="sr-only">Instagram Padilha Advogados</span>';
if(instagramLink && instagramLink.parentElement) instagramLink.parentElement.innerHTML=instagramLink.outerHTML;
