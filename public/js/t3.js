var next_click=document.querySelectorAll(".next_button");
var main_form=document.querySelectorAll(".main");
var step_list = document.querySelectorAll(".progress_bar li");
var num = document.querySelector(".step_number");
let formnumber=0;
console.log(next_click);
next_click.forEach(function(next_click_form){
    next_click_form.addEventListener('click', function () {
        console.log("dasdasd");
        if(!validateform()){
            return false
        }
       formnumber++;
       updateform();
       progress_forward();
       contentchange();
    });
}); 

var back_click=document.querySelectorAll(".back_button");
back_click.forEach(function(back_click_form){
    back_click_form.addEventListener('click',function(){
       formnumber--;
       updateform();
       progress_backward();
       contentchange();
    });
});

var username=document.querySelector("#user_name");
var shownname=document.querySelector(".shown_name");
 

var submit_click=document.querySelectorAll(".submit_button");
submit_click.forEach(function(submit_click_form){
    submit_click_form.addEventListener('click',function(){
       shownname.innerHTML= username.value;
       formnumber++;
       updateform(); 
    });
});

var heart=document.querySelector(".fa-heart");
heart.addEventListener('click',function(){
   heart.classList.toggle('heart');
});


var share=document.querySelector(".fa-share-alt");
share.addEventListener('click',function(){
   share.classList.toggle('share');
});

 

function updateform(){
    main_form.forEach(function(mainform_number){
        mainform_number.classList.remove('activ');
    })
    main_form[formnumber].classList.add('activ');
} 
 
function progress_forward(){
    // step_list.forEach(list => {
        
    //     list.classList.remove('activ');
         
    // }); 
    
     
    num.innerHTML = formnumber+1;
    step_list[formnumber].classList.add('activ');
}  

function progress_backward(){
    var form_num = formnumber+1;
    step_list[form_num].classList.remove('activ');
    num.innerHTML = form_num;
} 
 
var step_num_content=document.querySelectorAll(".step-number-content");

 function contentchange(){
     step_num_content.forEach(function(content){
        content.classList.remove('activ'); 
        content.classList.add('dnone');
     }); 
     step_num_content[formnumber].classList.add('activ');
 } 
 
 
function validateform(){
    validate=true;
    var validate_inputs=document.querySelectorAll(".main.activ input");
    validate_inputs.forEach(function(vaildate_input){
        vaildate_input.classList.remove('warning');
        if(vaildate_input.hasAttribute('require')){
            if(vaildate_input.value.length==0){
                validate=false;
                vaildate_input.classList.add('warning');
            }
        }
    });
    return validate;
    
}
