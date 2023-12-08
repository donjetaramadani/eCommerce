(function() {

    var slidersContainer = document.querySelector('.sliders-container');

   
    var msNumbers = new MomentumSlider({
        el: slidersContainer,
        cssClass: 'ms--numbers',
        range: [1, 4],
        rangeContent: function (i) {
            return '0' + i;
        },
        style: {
            transform: [{scale: [0.4, 1]}],
            opacity: [0, 1]
        },
        interactive: false
    });

    var titles = [
        'Contact',
        'Time',
        'Urban',
        'Windy'
    ];
    var msTitles = new MomentumSlider({
        el: slidersContainer,
        cssClass: 'ms--titles',
        range: [0, 3],
        rangeContent: function (i) {
            return '<h3>'+ titles[i] +'</h3>';
        },
        vertical: true,
        reverse: true,
        style: {
            opacity: [0, 1]
        },
        interactive: false
    });

    var msLinks = new MomentumSlider({
        el: slidersContainer,
        cssClass: 'ms--links',
        range: [0, 3],
        rangeContent: function () {
            return '<a class="ms-slide__link">View Case</a>';
        },
        vertical: true,
        interactive: false
    });

 
    var pagination = document.querySelector('.pagination');
    var paginationItems = [].slice.call(pagination.children);

    var msImages = new MomentumSlider({
     
        el: slidersContainer,
      
        cssClass: 'ms--images',
     
        range: [0, 3],
        rangeContent: function () {
            return '<div class="ms-slide__image-container"><div class="ms-slide__image"></div></div>';
        },
        
        sync: [msNumbers, msTitles, msLinks],
      
        style: {
            '.ms-slide__image': {
                transform: [{scale: [1.5, 1]}]
            }
        },
       
        change: function(newIndex, oldIndex) {
            if (typeof oldIndex !== 'undefined') {
                paginationItems[oldIndex].classList.remove('pagination__item--active');
            }
            paginationItems[newIndex].classList.add('pagination__item--active');
        }
    });


    pagination.addEventListener('click', function(e) {
        if (e.target.matches('.pagination__button')) {
            var index = paginationItems.indexOf(e.target.parentNode);
            msImages.select(index);
        }
    });

})();



    function validateForm(event) {
        event.preventDefault(); 

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+}{":;'?/>.<,])(?=.*[a-zA-Z]).{8,}$/;

        const name = document.querySelector('input[name="name_us"]').value;
        const email = document.querySelector('input[name="email_us"]').value;
        const password = document.querySelector('input[name="pass_us"]').value;
        const confirmPassword = document.querySelector('input[name="conf_pass_us"]').value;

        if (name.trim() === '') {
            alert('Please enter your name.');
            return;
        }

        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address.');
            return;
        }

        if (!passwordPattern.test(password)) {
            alert('Please enter a valid password (at least 8 characters, including uppercase, lowercase, numbers, and special characters).');
            return;
        }

        if (password !== confirmPassword) {
            alert('Passwords do not match.');
            return;
        }

   
        alert('Form submitted successfully!');
    }

    document.querySelector('#contactForm').addEventListener('submit', validateForm);




function sign_up(){
    var inputs = document.querySelectorAll('.input_form_sign');
  document.querySelectorAll('.ul_tabs > li')[0].className=""; 
  document.querySelectorAll('.ul_tabs > li')[1].className="active"; 
    
    for(var i = 0; i < inputs.length ; i++  ) {
  if(i == 2  ){
  
  }else{  
  document.querySelectorAll('.input_form_sign')[i].className = "input_form_sign d_block";
  }
  } 
  
  setTimeout( function(){
  for(var d = 0; d < inputs.length ; d++  ) {
   document.querySelectorAll('.input_form_sign')[d].className = "input_form_sign d_block active_inp";  
     }
  
  
   },100 );
   document.querySelector('.link_forgot_pass').style.opacity = "0";
     document.querySelector('.link_forgot_pass').style.top = "-5px";
     document.querySelector('.btn_sign').innerHTML = "SIGN UP";    
    setTimeout(function(){
  
   document.querySelector('.terms_and_cons').style.opacity = "1";
    document.querySelector('.terms_and_cons').style.top = "5px";
   
    },500);
    setTimeout(function(){
      document.querySelector('.link_forgot_pass').className = "link_forgot_pass d_none";
   document.querySelector('.terms_and_cons').className = "terms_and_cons d_block";
    },450);
  
  }
  
  
  
  function sign_in(){
    var inputs = document.querySelectorAll('.input_form_sign');
  document.querySelectorAll('.ul_tabs > li')[0].className = "active"; 
  document.querySelectorAll('.ul_tabs > li')[1].className = ""; 
    
    for(var i = 0; i < inputs.length ; i++  ) {
  switch(i) {
      case 1:
   console.log(inputs[i].name);
          break;
      case 2:
   console.log(inputs[i].name);
      default: 
  document.querySelectorAll('.input_form_sign')[i].className = "input_form_sign d_block";
  }
  } 
  
  setTimeout( function(){
  for(var d = 0; d < inputs.length ; d++  ) {
  switch(d) {
      case 1:
   console.log(inputs[d].name);
          break;
      case 2:
   console.log(inputs[d].name);
  
      default:
   document.querySelectorAll('.input_form_sign')[d].className = "input_form_sign d_block";  
   document.querySelectorAll('.input_form_sign')[2].className = "input_form_sign d_block active_inp";  
  
     }
    }
   },100 );
  
   document.querySelector('.terms_and_cons').style.opacity = "0";
    document.querySelector('.terms_and_cons').style.top = "-5px";
  
    setTimeout(function(){
   document.querySelector('.terms_and_cons').className = "terms_and_cons d_none"; 
  document.querySelector('.link_forgot_pass').className = "link_forgot_pass d_block";
  
   },500);
  
    setTimeout(function(){
  
   document.querySelector('.link_forgot_pass').style.opacity = "1";
     document.querySelector('.link_forgot_pass').style.top = "5px";
      
  
  for(var d = 0; d < inputs.length ; d++  ) {
  
  switch(d) {
      case 1:
   console.log(inputs[d].name);
          break;
      case 2:
   console.log(inputs[d].name);
  
           break;
      default:
   document.querySelectorAll('.input_form_sign')[d].className = "input_form_sign";  
  }
    }
     },1500);
     document.querySelector('.btn_sign').innerHTML = "SIGN IN";    
  }
  
  
  window.onload =function(){
    document.querySelector('.cont_centrar').className = "cont_centrar cent_active";
  
  }









function truncateText(text, letters = 135) {
	let truncatedText = text.slice(0, letters);
	let truncatedToHTML = `<p class="truncate">${truncatedText}...</p>`;

	return truncatedToHTML;
}


let cards = document.getElementsByClassName("card_text");

let plainText = [];
for (let i = 0; i < cards.length; i++) {
	plainText[i] = cards[i].innerText;
}

let htmlText = [];
for (let i = 0; i < cards.length; i++) {
	htmlText[i] = cards[i].innerHTML;
}

/* Add truncated text inside the cards */
for (let i = 0; i < cards.length; i++) {
	cards[i].innerHTML = truncateText(plainText[i]);
}


let btns = document.getElementsByClassName("card_btn");

for (let i = 0; i < cards.length; i++) {
	btns[i].addEventListener("click", function () {
	
		if (cards[i].firstChild.className == "truncate") {
	
			cards[i].innerHTML = htmlText[i];
		} else {
		
			cards[i].innerHTML = truncateText(plainText[i]);
		}
	});
}