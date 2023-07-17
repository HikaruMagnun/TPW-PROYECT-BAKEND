const openModal= document.querySelector('.hero_cta');
const modal=document.querySelector('.modal');
const closeModal= document.querySelector('.modal_close');
const modal1 = document.querySelector('.modal_conteiner');
const body = document.querySelector('body');

openModal.addEventListener('click',(e)=>{
    e.preventDefault();
    modal.classList.add('modal--show');
    body.classList.add('modal-open');
    modal1.scrollTop = 0;
});
closeModal.addEventListener('click',(e)=>{
    e.preventDefault();
    modal.classList.remove('modal--show');
    body.classList.remove('modal-open');
});