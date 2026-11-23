const waNumber='556230855220';
const waLink=(message)=>`https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;
document.querySelectorAll('.area-card').forEach(card=>{const title=card.querySelector('h3')?.textContent.trim();const link=card.querySelector('a');if(title&&link)link.href=waLink(`Olá, gostaria de falar sobre ${title}.`)});
document.querySelectorAll('.team-card').forEach(card=>{const name=card.querySelector('h3')?.textContent.trim();const specialty=card.querySelector('span')?.textContent.trim();const link=card.querySelector('.team-more');if(name&&link)link.href=waLink(`Olá, gostaria de conhecer o trabalho de ${name}${specialty?` em ${specialty}`:''}.`)});
