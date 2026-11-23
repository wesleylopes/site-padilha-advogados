const cards=document.querySelector('.cards');
if(cards){[
  ['Direito Previdenciário','Orientação sobre benefícios, aposentadorias e direitos perante o INSS.','◌'],
  ['Inventários e sucessões','Organização da partilha e acompanhamento de todas as etapas da sucessão.','▤']
].forEach(([title,text,icon])=>{const card=document.createElement('article');card.className='area-card area-card-extra';card.innerHTML=`<div class="card-icon">${icon}</div><h3>${title}</h3><p>${text}</p><a href="#contato" aria-label="Saiba mais sobre ${title}">↗</a>`;cards.appendChild(card)})}
if(cards){const controls=document.createElement('div');controls.className='carousel-controls';controls.innerHTML='<button type="button" aria-label="Área anterior">‹</button><button type="button" aria-label="Próxima área">›</button>';cards.parentElement.appendChild(controls);const step=()=>cards.querySelector('.area-card')?.getBoundingClientRect().width+12||250;controls.children[0].onclick=()=>cards.scrollBy({left:-step(),behavior:'smooth'});controls.children[1].onclick=()=>cards.scrollBy({left:step(),behavior:'smooth'});}
