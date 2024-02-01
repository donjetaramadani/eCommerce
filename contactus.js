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
           '<span class="blue-text">Artistry in Every Conversation.</span>',
           '<span class="green-text">Art & Enthusiasts</span>',
           '<span class="red-text">Where Creativity Finds Voice</span>',
           '<span class="orange-text">Inspiration Meets Inquiry</span>'
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
       rangeContent: function (i) {
           var texts = [
               ' Reach out.',
               ' Lets engage.',
               'Explore a world of artistic possibilities.',
               'Lets shape your artistic journey.'
           ];
           return '<a class="ms-slide__link">' + texts[i] + '</a>';
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



document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.ul_tabs > li');
    const signUpForm = document.querySelector('#contactForm');
    const signInForm = document.querySelector('#loginForm');

    function showForm(formToShow) {
        const forms = [signInForm, signUpForm];

        tabs.forEach(tab => tab.classList.remove('active'));
        formToShow.style.display = 'block';

        forms.forEach(form => {
            if (form !== formToShow) {
                form.style.display = 'none';
            }
        });
    }

    tabs[0].addEventListener('click', function () {
        showForm(signInForm);
    });

    tabs[1].addEventListener('click', function () {
        showForm(signUpForm);
    });

    function validateForm(form, event) {
        event.preventDefault();

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+}{":;'?/>.<,])(?=.*[a-zA-Z]).{8,}$/;

        const name = form.querySelector('input[name="name_us"]');
        const surname = form.querySelector('input[name="surname_us"]');
        const email = form.querySelector('input[name="email_us"]');
        const password = form.querySelector('input[name="pass_us"]');
        const confirmPassword = form.querySelector('input[name="conf_pass_us"]');

        if (name && name.value.trim() === '') {
            alert('Please enter your name.');
            return;
        }

        if (surname && surname.value.trim() === '') {
            alert('Please enter your surname.');
            return;
        }

        if (email && !emailPattern.test(email.value)) {
            alert('Please enter a valid email address.');
            return;
        }

        if (password && !passwordPattern.test(password.value)) {
            alert('Please enter a valid password (at least 8 characters, including uppercase, lowercase, numbers, and special characters).');
            return;
        }

        if (confirmPassword && password.value !== confirmPassword.value) {
            alert('Passwords do not match.');
            return;
        }

        // Your actual form submission logic
        alert(`${form.id} submitted successfully!`);
    }

    signUpForm.addEventListener('submit', function (event) {
        validateForm(signUpForm, event);
    });

    signInForm.addEventListener('submit', function (event) {
        validateForm(signInForm, event);
    });

    // Other initialization logic
    document.querySelector('.cont_centrar').classList.add('cent_active');
});




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


   document.querySelector('.link_forgot_pass d_block').addEventListener('click', function(event) {
        event.preventDefault();
        sign_up(); 
   }
);



//Nje lloj i passwordit se ne kete forme funksionon kur permbane edhe simbole, pa simbole nuk funksionon:R$P2w#8sLx!5