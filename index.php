<?php
declare(strict_types=1);
$siteUrl = 'https://www.padilhaadvogados.com.br';
$phone = '556230855220';
$phoneLabel = '(62) 3085-5220';
$areas = [
    ['title' => 'Direito Civil', 'text' => 'Contratos, responsabilidade civil e patrimônio.', 'icon' => '◈'],
    ['title' => 'Direito Trabalhista', 'text' => 'Relações de trabalho e direitos trabalhistas.', 'icon' => '✦'],
    ['title' => 'Direito de Família', 'text' => 'Divórcio, guarda, alimentos e partilha.', 'icon' => '♡'],
    ['title' => 'Direito Empresarial', 'text' => 'Contratos e assessoria jurídica empresarial.', 'icon' => '⌂'],
    ['title' => 'Direito Criminal', 'text' => 'Defesa criminal e acompanhamento de investigações.', 'icon' => '⚖'],
];
$areaImages = [
    'Direito Civil' => '/Assets/img/webp/direito-civil.webp',
    'Direito Trabalhista' => '/Assets/img/webp/direito-trabalhista.webp',
    'Direito de Família' => '/Assets/img/webp/direito-de-familia.webp',
    'Direito Empresarial' => '/Assets/img/webp/direito-empresarial.webp',
    'Direito Criminal' => '/Assets/img/webp/direito-criminal.webp',
];
function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Padilha Advocacia | Assessoria jurídica em Goiânia</title>
  <meta name="description" content="Advocacia para proteger seus direitos. Assessoria jurídica para pessoas e empresas em Goiânia, Goiás e todo o Brasil.">
  <meta name="keywords" content="advogado em Goiânia, advocacia, direito civil, direito trabalhista, direito de família, direito empresarial">
  <link rel="canonical" href="<?= e($siteUrl) ?>/">
  <meta property="og:type" content="website"><meta property="og:title" content="Padilha Advocacia | Proteção jurídica com clareza">
  <meta property="og:description" content="Orientação jurídica estratégica para decisões importantes."><meta property="og:url" content="<?= e($siteUrl) ?>/">
  <meta name="theme-color" content="#0c0d0f">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/style.css"><link rel="stylesheet" href="/mobile.css">
  <script type="application/ld+json">
  {"@context":"https://schema.org","@type":"Attorney","name":"Padilha Advocacia","url":"<?= e($siteUrl) ?>","telephone":"+55 62 3085-5220","areaServed":["Goiânia","Goiás","Brasil"],"address":{"@type":"PostalAddress","addressLocality":"Goiânia","addressRegion":"GO","addressCountry":"BR"},"sameAs":["https://www.instagram.com/escritoriopadilhaadvogados/"]}
  </script>
</head>
<body>
  <header class="site-header"><a class="brand" href="#inicio" aria-label="Padilha Advocacia início"><img src="/Assets/img/logo.png" alt="Padilha Advogados Associados" class="brand-logo"></a><button class="menu-toggle" aria-label="Abrir menu">Menu</button><nav><a href="#escritorio">O escritório</a><a href="#atuacao">Áreas de atuação</a><a href="#contato">Contato</a><a class="button button-gold" href="https://wa.me/<?= $phone ?>?text=Olá%2C%20gostaria%20de%20falar%20com%20a%20Padilha%20Advocacia">Entre em contato <span>↗</span></a></nav></header>
  <main>
    <section class="hero" id="inicio"><div class="hero-glow"></div><div class="hero-copy"><p class="eyebrow">PADILHA ADVOCACIA · GOIÂNIA / GO</p><h1>Advocacia para proteger <em>seus direitos.</em></h1><p class="hero-lead">Decisões importantes pedem orientação jurídica clara, estratégica e próxima.</p><div class="hero-actions"><a class="button button-gold" href="https://wa.me/<?= $phone ?>?text=Olá%2C%20gostaria%20de%20agendar%20uma%20consulta">Fale pelo WhatsApp <span>↗</span></a><a class="text-link" href="#atuacao">Conheça nossa atuação <span>↓</span></a></div></div><div class="hero-art" aria-label="Ilustração abstrata de proteção jurídica"><div class="halo"></div><div class="shield">⚖</div><div class="art-caption"><span>01</span><p>Estratégia<br>e confiança</p></div></div><div class="hero-aside"><strong>Assessoria jurídica para pessoas e empresas no Brasil e no exterior.</strong><a href="tel:+55<?= $phone ?>">WhatsApp<br><span><?= e($phoneLabel) ?></span></a></div><div class="values"><span>⚖ Ética</span><i></i><span>◈ Responsabilidade</span><i></i><span>◌ Clareza</span><i></i><span>♧ Proximidade</span></div></section>
    <section class="intro section" id="escritorio"><div class="section-label">O ESCRITÓRIO</div><div><h2>Decisões importantes<br>exigem <em>orientação jurídica.</em></h2></div><div class="intro-text"><p>Conheça seus direitos e receba orientação jurídica de acordo com as particularidades do seu caso.</p><a class="button button-outline" href="#contato">Conheça o escritório <span>↗</span></a></div></section>
    <section class="dark-panel section" id="atuacao"><div class="panel-head"><div><p class="eyebrow">COMO PODEMOS AJUDAR</p><h2>Áreas de <em>atuação</em></h2></div><p>Atuação nas principais demandas jurídicas de pessoas e empresas.</p></div><div class="cards"><?php foreach ($areas as $area): ?><article class="area-card"><div class="card-icon"><?= e($area['icon']) ?></div><h3><?= e($area['title']) ?></h3><p><?= e($area['text']) ?></p><a href="#contato" aria-label="Saiba mais sobre <?= e($area['title']) ?>">↗</a></article><?php endforeach; ?></div></section>
    <section class="services section"><div class="services-title"><p class="eyebrow">ATENDIMENTO ESTRUTURADO</p><h2>Orientação jurídica<br>para <em>cada situação.</em></h2></div><div class="service-list"><p>Um atendimento jurídico estruturado, com escuta ativa, análise técnica e acompanhamento próximo em todas as etapas do seu caso.</p><div class="service-row"><b>▱ &nbsp; Assessoria jurídica</b><span>Orientação jurídica personalizada e preventiva.</span></div><div class="service-row"><b>⌁ &nbsp; Audiências</b><span>Atuação em audiências com preparo técnico e estratégico.</span></div><div class="service-row"><b>▤ &nbsp; Diligências</b><span>Acompanhamento de atos e providências necessárias.</span></div></div></section>
    <section class="contact-banner section" id="contato"><div><p class="eyebrow">FALE COM A PADILHA</p><h2>Precisa de orientação<br>jurídica?</h2></div><p>Fale conosco e saiba como podemos ajudar no seu caso.</p><a class="button button-gold" href="https://wa.me/<?= $phone ?>?text=Olá%2C%20gostaria%20de%20saber%20como%20a%20Padilha%20Advocacia%20pode%20me%20ajudar.">WhatsApp · <?= e($phoneLabel) ?> <span>↗</span></a></section>
    <section class="location section" id="localizacao"><div class="location-copy"><p class="eyebrow">ONDE ESTAMOS</p><h2>Atendimento próximo,<br><em>onde você precisar.</em></h2><p>Consulte nossa localização no Google Maps e encontre o escritório Padilha Advogados Associados.</p><a class="button button-outline" href="https://www.google.com/maps/place/Padilha+Advogados+Associados/data=!4m2!3m1!1s0x0:0x2ab6120adb4eee0f?sa=X&ved=1t:2428&ictx=111" target="_blank" rel="noopener">Abrir no Google Maps <span>↗</span></a></div><div class="map-frame"><iframe title="Localização da Padilha Advogados Associados no Google Maps" src="https://www.google.com/maps?q=Padilha%20Advogados%20Associados&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div></section>
  </main>
  <footer><a class="brand" href="#inicio"><img src="/Assets/img/logo.png" alt="Padilha Advogados Associados" class="brand-logo"></a><div class="footer-links"><a href="#inicio">Início</a><a href="#escritorio">O escritório</a><a href="#atuacao">Áreas de atuação</a><a href="#contato">Contato</a></div><div class="footer-contact"><a href="https://www.instagram.com/escritoriopadilhaadvogados/" target="_blank" rel="noopener">Instagram @escritoriopadilhaadvogados</a> &nbsp;·&nbsp; WhatsApp <?= e($phoneLabel) ?></div><p class="copyright">© <?= date('Y') ?> Padilha Advocacia. Todos os direitos reservados.</p></footer>
  <script>const toggle=document.querySelector('.menu-toggle'),nav=document.querySelector('nav');toggle?.addEventListener('click',()=>nav.classList.toggle('open'));nav?.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>nav.classList.remove('open')));</script>
<script src="/icons.js"></script><script src="/human-copy.js"></script><script src="/effects.js"></script><script src="/areas-extra.js"></script></body></html>
