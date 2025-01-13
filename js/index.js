$(document).ready(function () {
    // Инициализация слайдера
    const swiper = new Swiper('.slider-section__slider', {
        slidesPerView: 4, // Количество видимых слайдов
        centeredSlides: true, // Центровка активного слайда
        loop: true, // Зацикливание слайдов
        speed: 600,
        navigation: {
            nextEl: '.slider-section-button-next',
            prevEl: '.slider-section-button-prev',
        },
       

    });

    // Обновление классов при изменении слайда
    function updateClasses() {
        // Убираем старые классы
        $('.swiper-slide').removeClass(function (index, className) {
            return (className.match(/swiper-slide-(next|prev)(-next|-prev){0,2}/g) || []).join(' ');
        });

        // Добавляем новые классы
        for (let i = 1; i <= 3; i++) {
            const nextIndex = (swiper.activeIndex + i) % swiper.slides.length;
            const prevIndex = (swiper.activeIndex - i + swiper.slides.length) % swiper.slides.length;

            $(swiper.slides[nextIndex]).addClass(`swiper-slide-next${'-next'.repeat(i - 1)}`);
            $(swiper.slides[prevIndex]).addClass(`swiper-slide-prev${'-prev'.repeat(i - 1)}`);
        }
    }

    // Привязываем обработчик событий
    swiper.on('slideChange', updateClasses);

    // Триггерим начальное обновление
    updateClasses();
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
  
    // Добавление логики переключения периодов
    toggleButtons.forEach((btn) => {
      btn.addEventListener("click", () => {
        // Сбрасываем активное состояние у кнопок
        toggleButtons.forEach((b) => b.classList.remove("pricing__toggle-btn--active"));
        btn.classList.add("pricing__toggle-btn--active");
  
        // Получаем выбранный период
        const period = btn.getAttribute("data-period");
  
        // Обновляем цены для карточек
        const cards = document.querySelectorAll(".pricing__card");
        cards.forEach((card, index) => {
          card.querySelector(".pricing__price").textContent = prices[period][index];
        });
      });
    });
  
    // Логика выбора только одной активной карточки
    const cards = document.querySelectorAll(".pricing__card");
  
    cards.forEach((card) => {
      card.addEventListener("click", () => {
        // Удаляем класс active у всех карточек
        cards.forEach((c) => c.classList.remove("active"));
  
        // Добавляем класс active только выбранной карточке
        card.classList.add("active");
      });
    });
  });
  