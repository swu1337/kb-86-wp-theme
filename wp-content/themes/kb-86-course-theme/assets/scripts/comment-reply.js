window.onload = () => {
  
  let commentBox = document.querySelector('.comment__box');
  
  if(!commentBox) return;
  
  let replyButtons = document.querySelectorAll('.button--reply');
  let cancelButtons = document.querySelectorAll('.button--cancel');
  let formIdName = 'form-id-';

  replyButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      let id = btn.dataset.formId;
      let form = document.querySelector(`#${ formIdName }${ id }`);
      form.classList.remove('comment__form--hide');
      btn.classList.add('button--hide');
    });
  });

  cancelButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      let id = btn.dataset.formId;
      let form = document.querySelector(`#${ formIdName }${ id }`);
      form.classList.add('comment__form--hide');
      
      let replyBtn = document.querySelector(`#button-reply-${ id }`);
      replyBtn.classList.remove('button--hide');
    });
  });
}

//Can be refactored by using parent to find the othter buttons; Hereby removing the double coding.

