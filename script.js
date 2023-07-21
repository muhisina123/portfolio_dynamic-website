let exp=document.querySelector('.Experience');
let edu=document.querySelector('.Education');
let Skills=document.querySelector('.Skills');
let edu_title=document.querySelector('.edu_title');
let exp_title=document.querySelector('.exp_title');
let Skills_title=document.querySelector('.Skills_title');
const updateBtn = document.querySelector('.update-btn');
const hiddenForm = document.querySelector('.hidden-form');
const hiddenSubmitBtn = document.querySelector('.hidden-submit-btn');
const updateAllBtn = document.querySelector('.update-btn_All');
const editContainer = document.querySelector('.edit-container');


// console.log(updateBtn);
// console.log(hiddenForm);
// console.log(hiddenSubmitBtn);
let ht=document.querySelector('.headerText');
Skills_title.addEventListener('click', Skills_fn);
function Skills_fn(){
 
 exp.style.visibility='hidden';
  edu.style.visibility='hidden';
  Skills.style.visibility='visible';

  /*exp.remove();
  edu.remove();*/
}

edu_title.addEventListener('click',edu_fn);
function edu_fn(){
 console.log("test");
 Skills.style.visibility='hidden';
 exp.style.visibility='hidden';
//Skills.remove();
edu.style.visibility='visible';
//exp.remove();
   
    
}
 
exp_title.addEventListener('click', exp_fn);
function exp_fn(){

  Skills.style.visibility='hidden';
  edu.style.visibility='hidden';
 // Skills.remove();
 // edu.remove();
  exp.style.visibility='visible';

}

/**********************************************************************************
                        hidden form for updation
//  ****************************************************************************************/
//   updateBtn.addEventListener('click', function(){
//   hiddenForm.style.display='block';
// });
                        
//   hiddenSubmitBtn.addEventListener('click', function() {
//     hiddenForm.style.display='none';
//   });


updateAllBtn.addEventListener('click', function() {
  editContainer.classList.toggle('show');
});