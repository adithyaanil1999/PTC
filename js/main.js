window.onload =()=>{

// Plugin to automate the animate
HTMLElement.prototype.animate = function (animation, callback, context) {
    if (typeof animation != "string") return; // must pass animation type
    var _self = this;
    animation = " animated " + animation;
    _self.className += animation;
    setTimeout(function(){
        _self.className = _self.className.replace(animation, "");
        if (typeof callback == "function") {
            callback.call((context) ? context : window);
        }
    }, (animation == "hinge") ? 2e3 : 1e3)
}


console.log('Window loaded');

//gobal DOM variables
var register_btn = document.querySelector('#innerBox__box-reg-btn');
var innerBox_box_cont = document.querySelector('#main-innerbox');
var innerBox_box = document.querySelector('#innerbox-wrap');
var reg_cont = document.querySelector('#reg-container');
var reg_box = document.querySelector('#reg-option');
var reg_back_btn = document.querySelector('#reg-back-btn');
var student_back_btn = document.querySelector('#student-back-btn');
var student_details_cont = document.querySelector('#reg-container-student');1
var student_detail_box = document.querySelector('#student-detail-box');
var student_details = document.querySelector('#student-details');
var student_details_2 = document.querySelector('#student-details-2');
var student_details_btn = document.querySelector('#student-details-cont-btn');
var student_details_btn2 = document.querySelector('#student-details-cont-btn2');
var reg_btn = document.querySelector('#reg-user-btn');






//UI controller
var UIcontroller = (()=>{

        console.log('UIcontroller Started');

        //disabling elements
        //Event Listeners
        register_btn.addEventListener('click',()=>{        
            innerBox_box.animate('slideOutRight',()=>{
                innerBox_box.classList.replace('slideInUp','fadeIn');
                innerBox_box_cont.style.display='none';
                reg_cont.style.display='flex';

            });
        });

        reg_back_btn.addEventListener('click',()=>{        
            reg_box.animate('slideOutRight',()=>{
                reg_cont.style.display='none';
                innerBox_box_cont.style.display='flex';
            });
        });

        reg_btn.addEventListener('click',()=>{
            reg_box.animate('slideOutRight',()=>{
                reg_cont.style.display='none';
                student_details_cont.style.display='flex';

            });
        });
        
        function back_handler_1(){
            student_detail_box.animate('slideOutRight',()=>{
                student_details_cont.style.display='none';
                reg_cont.style.display='flex';
            });
        }
        student_back_btn.addEventListener('click',back_handler_1);
        
        student_details_btn.addEventListener('click',() =>{
            student_details.animate('fadeOut',()=>{
                student_details.style.display='none';
                student_details_2.classList.add('animated','fadeIn');
                student_details.classList.remove('animated','fadeIn');
                student_details_2.style.display='block';
                student_details_btn.style.display='none';
                student_details_btn2.style.display='flex';            
            });
            student_back_btn.removeEventListener('click',back_handler_1);
            student_back_btn.addEventListener('click',function back_handler_2(){
                student_details.classList.add('animated','fadeIn');
                student_details_2.classList.remove('animated','fadeIn');
                student_details.style.display='block';
                student_details_2.style.display='none';
                student_details_btn2.style.display='none';
                student_details_btn.style.display='flex';                
                student_back_btn.addEventListener('click',back_handler_1);

            }) 
        });
        

        var change = ()=>{
            register_btn.style.color='red';
        }

        return{
            pt: (b)=>{
                chg: change();

            }
        }
    })();
} 