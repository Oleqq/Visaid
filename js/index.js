$(document).ready(function () {

    const swiper = new Swiper('.slider-section__slider', {
        slidesPerView: 4, 
        centeredSlides: true, 
        loop: true,
        speed: 600,
        navigation: {
            nextEl: '.slider-section-button-next',
            prevEl: '.slider-section-button-prev',
        },
        
        breakpoints: {
          2560: {
            slidesPerView: 4,
          },
          1920: {
            slidesPerView: 4,
          },
          1440: {
            slidesPerView: 4,
          },
          1280: {
            slidesPerView: 4,
          },
          1099: {
            slidesPerView: 4,
          },
          767: {
            slidesPerView: 3,
          },
          567: {
            slidesPerView: 2,
          },
          0: {
            slidesPerView: 2,
          },
        }

    });


    function updateClasses() {
       
        $('.swiper-slide').removeClass(function (index, className) {
            return (className.match(/swiper-slide-(next|prev)(-next|-prev){0,2}/g) || []).join(' ');
        });

        
        for (let i = 1; i <= 3; i++) {
            const nextIndex = (swiper.activeIndex + i) % swiper.slides.length;
            const prevIndex = (swiper.activeIndex - i + swiper.slides.length) % swiper.slides.length;

            $(swiper.slides[nextIndex]).addClass(`swiper-slide-next${'-next'.repeat(i - 1)}`);
            $(swiper.slides[prevIndex]).addClass(`swiper-slide-prev${'-prev'.repeat(i - 1)}`);
        }
    }

   
    swiper.on('slideChange', updateClasses);

  
    updateClasses();
});




document.addEventListener("DOMContentLoaded", () => {

  if (window.innerWidth < 990) {
    const pricingSwiper = new Swiper('.pricing__cards', {
      slidesPerView: 'auto', 
      centeredSlides: true,
      spaceBetween: 10,
      
      
      navigation: {
        nextEl: '.pricing__cards-button-next', 
        prevEl: '.pricing__cards-button-prev'
      },
      pagination: {
        type: 'bullets',
        el: '.pricing__cards-pagination',
        clickable: true,
      },
    });
  }
});




function changeVideo(platform, videoID) {
    const iframe = document.getElementById('video-frame');
    if (platform === "youtube") {
      iframe.src = `https://www.youtube.com/embed/${videoID}`;
    } else if (platform === "vimeo") {
      iframe.src = `https://player.vimeo.com/video/${videoID}`;
    }
  }
  



  document.addEventListener("DOMContentLoaded", () => {
    const toggleButtons = document.querySelectorAll(".pricing__toggle-btn");
  
   
    const prices = {
      monthly: ["AU$0", "AU$15", "AU$25"],
      annually: ["AU$0", "AU$135", "AU$225"],
    };
  
   
    toggleButtons.forEach((btn) => {
      btn.addEventListener("click", () => {
        
        toggleButtons.forEach((b) => b.classList.remove("pricing__toggle-btn--active"));
        btn.classList.add("pricing__toggle-btn--active");
  
        
        const period = btn.getAttribute("data-period");
  
       
        const cards = document.querySelectorAll(".pricing__card");
        cards.forEach((card, index) => {
          const priceElement = card.querySelector(".pricing__price");
          const periodElement = priceElement.querySelector(".pricing__period");
  
         
          priceElement.firstChild.textContent = prices[period][index];
  
         
          if (periodElement) {
            periodElement.textContent = period === "monthly" ? "per month" : "per year";
          }
        });
      });
    });
  
    
    const cards = document.querySelectorAll(".pricing__card");
  
    cards.forEach((card) => {
      card.addEventListener("click", () => {
        
        cards.forEach((c) => c.classList.remove("active"));
  
        
        card.classList.add("active");
      });
    });
  });
  
  



  document.addEventListener('DOMContentLoaded', () => {

    const title = document.querySelector('.quote__title h3');
    const subtitleText = document.querySelector('.quote__subtitle p');
    const authorTitle = document.querySelector('.quote-author__info h4');
    const authorSubtitle = document.querySelector('.quote-author__info p');
    const avatarImages = document.querySelectorAll('.quote-author__img img'); 
  
   
    function updateContent(activeAvatar) {
      title.textContent = activeAvatar.dataset.title;
      subtitleText.textContent = activeAvatar.dataset.subtitle;
      authorTitle.textContent = activeAvatar.dataset.author;
      authorSubtitle.textContent = activeAvatar.dataset.position;
  
     
      animateText(title);
      animateText(subtitleText);
      animateText(authorTitle);
      animateText(authorSubtitle);
    }
  

    function animateText(element) {
      element.classList.remove('fade-in');
      void element.offsetWidth; 
      element.classList.add('fade-in');
    }
  
  
    if (avatarImages.length > 1) {
      avatarImages[1].classList.add('quote-author__image--active'); 
      updateContent(avatarImages[1]); 
    }
  
  
    avatarImages.forEach(img => {
      img.addEventListener('click', () => {
        
        avatarImages.forEach(image => image.classList.remove('quote-author__image--active'));
        
      
        img.classList.add('quote-author__image--active');
   
        updateContent(img);
      });
    });
  });