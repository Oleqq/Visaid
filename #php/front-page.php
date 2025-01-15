<?php
/**
 * Template Name: Home page
 *
 * Template for displaying the front page of the site.
 *
 * @package Visaid
 */


get_header();
?>


<main>
    <section class="hero" id="hero">
		<div class="hero__bg">
                    <svg width="700" height="1254" viewBox="0 0 700 1254" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g style="mix-blend-mode: multiply;" opacity="0.2">
                            <path
                                d="M967.274 461.662C1182.72 642.45 961.776 1405.92 631.541 1226.24C356.536 1076.61 650.102 763.325 299.937 788.533C-116.272 879.703 -114.828 669.66 404.205 188.192C923.238 -293.276 751.825 280.873 967.274 461.662Z"
                                fill="url(#paint0_linear_5964_6305)"
                            />
                        </g>
                        <defs>
                            <linearGradient id="paint0_linear_5964_6305" x1="658.253" y1="344.059" x2="457.412" y2="1278.6" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#1629D4" stop-opacity="0" />
                                <stop offset="1" stop-color="#1629D4" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="hero__bg-2">
                    <svg width="720" height="815" viewBox="0 0 720 815" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g style="mix-blend-mode: darken;" opacity="0.05">
                            <path
                                d="M192.717 188.133C630.281 208.264 1004.35 782.442 418.14 812.66C-70.0261 837.824 40.9241 514.442 -393.592 681.721C-856.986 918.92 -1037.24 786.625 -778.271 260.28C-519.304 -266.066 -244.847 168.003 192.717 188.133Z"
                                fill="url(#paint0_linear_7880_2807)"
                            />
                        </g>
                        <defs>
                            <linearGradient id="paint0_linear_7880_2807" x1="975.371" y1="-15.1801" x2="935.237" y2="907.051" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#92C6F6" />
                                <stop offset="1" stop-color="#1429D4" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="hero__bg-mobile-2">
                    <svg width="216" height="302" viewBox="0 0 216 302" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g style="mix-blend-mode: darken;" opacity="0.05">
                            <path
                                d="M20.6274 69.5112C182.463 76.9566 320.814 289.32 104.001 300.496C-76.5497 309.803 -35.5141 190.198 -196.223 252.068C-367.611 339.797 -434.279 290.867 -338.498 96.195C-242.718 -98.4769 -141.208 62.0657 20.6274 69.5112Z"
                                fill="url(#paint0_linear_7880_3048)"
                            />
                        </g>
                        <defs>
                            <linearGradient id="paint0_linear_7880_3048" x1="310.096" y1="-5.68538" x2="295.252" y2="335.407" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#92C6F6" />
                                <stop offset="1" stop-color="#1429D4" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="hero__bg-mobile">
                    <svg width="167" height="464" viewBox="0 0 167 464" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g style="mix-blend-mode: multiply;" opacity="0.2">
                            <path
                                d="M357.795 171.049C437.48 237.914 355.761 520.289 233.622 453.833C131.91 398.491 240.487 282.621 110.976 291.944C-42.9613 325.664 -42.4271 247.978 149.54 69.9046C341.508 -108.169 278.11 104.183 357.795 171.049Z"
                                fill="url(#paint0_linear_7880_3046)"
                            />
                        </g>
                        <defs>
                            <linearGradient id="paint0_linear_7880_3046" x1="243.501" y1="127.553" x2="169.219" y2="473.196" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#1629D4" stop-opacity="0" />
                                <stop offset="1" stop-color="#1629D4" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
        <div class="container hero__container">
            <div class="hero__wrapper">
                <div class="hero__text hero__text-secondary"><img src="<?php echo get_template_directory_uri(); ?>/img/Group 462.svg" alt="" /></div>
                <div class="hero__button">
                    <a class="button-primary" href="#hero">
                        Start creating
                        <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M9.13667 12.0016C8.87632 11.747 8.87632 11.3342 9.13667 11.0795L13.9986 6.32425L9.13667 1.56899C8.87632 1.31435 8.87632 0.901499 9.13667 0.64686C9.39702 0.392222 9.81913 0.392222 10.0795 0.64686L15.8843 6.32425L10.0795 12.0016C9.81913 12.2563 9.39702 12.2563 9.13667 12.0016Z"
                                fill="white"
                            />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M0.275391 6.32392C0.275391 5.9638 0.573869 5.67187 0.942061 5.67187L14.2755 5.67187C14.6437 5.67187 14.9421 5.9638 14.9421 6.32392C14.9421 6.68403 14.6437 6.97596 14.2755 6.97596L0.942061 6.97596C0.573869 6.97596 0.275391 6.68403 0.275391 6.32392Z"
                                fill="white"
                            />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="video-section" id="video-section">
        <div class="container video-section__container">
            <a class="scroll-bottom" href="#video-section">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        class="hover-circle"
                        d="M29.5 14.7826C29.5 22.6638 23.015 29.0652 15 29.0652C6.98496 29.0652 0.5 22.6638 0.5 14.7826C0.5 6.9014 6.98496 0.5 15 0.5C23.015 0.5 29.5 6.9014 29.5 14.7826Z"
                        fill="#EC1C24"
                        stroke="#EC1C24"
                    />
                    <path
                        d="M14.1153 7.60048L14.1153 20.047L9.82166 16.1078C9.55526 15.8682 9.13217 15.8682 8.88144 16.1228C8.63072 16.3774 8.63072 16.7818 8.89711 17.0215L14.319 21.9941C14.3347 22.0091 14.3504 22.0091 14.366 22.0241C14.3817 22.039 14.3974 22.054 14.4131 22.069C14.4287 22.084 14.4601 22.084 14.4757 22.0989C14.4914 22.1139 14.5071 22.1139 14.5228 22.1289C14.5541 22.1439 14.5698 22.1439 14.6011 22.1439C14.6168 22.1439 14.6324 22.1589 14.6481 22.1589C14.6951 22.1738 14.7265 22.1738 14.7735 22.1738C14.7891 22.1738 14.7891 22.1738 14.8048 22.1738C14.8362 22.1738 14.8675 22.1738 14.9145 22.1589C14.9302 22.1589 14.9459 22.1439 14.9615 22.1439C14.9929 22.1439 15.0085 22.1289 15.0242 22.1289C15.0399 22.1289 15.0555 22.1139 15.0712 22.0989C15.0869 22.084 15.1182 22.084 15.1339 22.069C15.1496 22.054 15.1652 22.039 15.1809 22.0241C15.1966 22.0091 15.2122 22.0091 15.2279 21.9941L20.6655 17.1263C20.8065 17.0065 20.8692 16.8268 20.8692 16.662C20.8692 16.5122 20.8065 16.3475 20.6812 16.2277C20.4305 15.973 20.0074 15.9581 19.741 16.1977L15.4473 20.062L15.4473 7.60048C15.4473 7.25599 15.1496 6.95644 14.7735 6.95644C14.3974 6.95644 14.1153 7.24102 14.1153 7.60048Z"
                        fill="white"
                    />
                </svg>
            </a>
		<div class="video-section__wrapper">
			<div class="video-section-text">
				<div class="video-section-text__title">
					<?php the_field('video_title');  ?>
				</div>
				<div class="video-section-text__subtitle">
					<?php the_field('video_subtitle'); ?>
				</div>
			</div>
			<div class="video-section__video">
				<?php 
				$video_id = get_field('youtube_video_url'); 
				if ($video_id): ?>
					<iframe id="video-frame" src="<?php echo esc_attr($video_id); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<?php endif; ?>
			</div>
		</div>

        </div>
    </section>
    <section class="cta-banner">
        <div class="container cta-banner__container">
            <div class="cta-banner__wrapper">
                <div class="cta-banner__title">Sign up to access the free trial</div>
                <div class="cta-banner__input">
                    <div class="cta-input">
                        <input type="email" placeholder="Enter email address" name="" />
                    </div>
                    <button class="button-primary" type="submit">Sign up</button>
                </div>
            </div>
        </div>
    </section>
    <section class="text-section">
    <div class="container text-section__container">
        <div class="text-section__wrapper">
            <div class="text-section__title">
                <?php the_field('text_section_title');  ?>
            </div>
            <div class="text-section__subtitle">
                <?php the_field('text_section_subtitle');  ?>
            </div>
            <div class="text-section__button">
                <a href="<?php the_field('text_section_button_link'); ?>" class="button-primary">
                    <?php the_field('text_section_button_text');  ?>
                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M9.13667 12.0016C8.87632 11.747 8.87632 11.3342 9.13667 11.0795L13.9986 6.32425L9.13667 1.56899C8.87632 1.31435 8.87632 0.901499 9.13667 0.64686C9.39702 0.392222 9.81913 0.392222 10.0795 0.64686L15.8843 6.32425L10.0795 12.0016C9.81913 12.2563 9.39702 12.2563 9.13667 12.0016Z"
                            fill="white"
                        />
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M0.275391 6.32392C0.275391 5.9638 0.573869 5.67187 0.942061 5.67187L14.2755 5.67187C14.6437 5.67187 14.9421 5.9638 14.9421 6.32392C14.9421 6.68403 14.6437 6.97596 14.2755 6.97596L0.942061 6.97596C0.573869 6.97596 0.275391 6.68403 0.275391 6.32392Z"
                            fill="white"
                        />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="slider-section">
    <div class="container slider-section__container">
        <div class="slider-section__wrapper">
            <div class="slider-section__slider">
                <div class="swiper-wrapper">
                    <?php if( have_rows('slider_cards') ): ?>
                        <?php while( have_rows('slider_cards') ): the_row(); ?>
                            <div class="swiper-slide">
                                <div class="slider-section-card">
                                    <div class="slider-section-card__fav">
                                        <svg width="36" height="33" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
										  <path
											  d="M18.7053 25.4736L18.2864 25.1859L17.8675 25.4736L8.60193 31.8366C8.44681 31.9318 8.34612 31.9681 8.26982 31.9791C8.20577 31.9883 8.11178 31.987 7.95461 31.9136L7.92799 31.9012L7.90047 31.8909C7.73827 31.8303 7.60585 31.7063 7.53379 31.5643C7.46305 31.4248 7.46594 31.3048 7.50289 31.2185L7.51417 31.1922L7.52337 31.1651L11.0717 20.7131L11.2518 20.1825L10.7899 19.8652L1.50972 13.4922L1.49604 13.4828L1.48194 13.474C1.39307 13.4186 1.35282 13.3638 1.3297 13.3163C1.3037 13.2629 1.28492 13.1874 1.28492 13.0826C1.28492 12.9362 1.34546 12.8141 1.45765 12.7163C1.57803 12.6114 1.74624 12.5479 1.90965 12.5479H13.3734H13.8972L14.0713 12.0539L17.6196 1.98439L17.6291 1.95742L17.6365 1.9298C17.6764 1.78069 17.899 1.58613 18.1499 1.58613C18.287 1.58613 18.3577 1.61272 18.391 1.62962C18.4247 1.64668 18.4533 1.6707 18.4833 1.70993C18.5166 1.75345 18.5484 1.81152 18.5848 1.89486C18.5987 1.92689 18.6102 1.95485 18.6239 1.98848C18.6292 2.0015 18.6349 2.01537 18.6412 2.03065C18.6539 2.06149 18.6725 2.10651 18.6953 2.15459L22.2286 12.1813L22.4027 12.6754H22.9265H34.3902C34.5232 12.6754 34.7581 12.7817 34.9769 12.9861L34.977 12.9861C34.977 12.9862 34.9781 12.9876 34.9799 12.9911C34.9836 12.9985 34.9906 13.0153 34.9973 13.0463C35.0126 13.1181 35.015 13.202 35.015 13.3374C35.015 13.3421 35.0146 13.3439 35.0131 13.3482C35.0107 13.3545 35.0034 13.3715 34.9821 13.4013C34.9355 13.4667 34.8667 13.536 34.744 13.6513L25.51 19.9927L25.048 20.3099L25.2282 20.8406L28.7765 31.2925L28.7764 31.2925L28.7803 31.3034C28.8227 31.4221 28.8306 31.5041 28.8254 31.5624C28.8208 31.6144 28.8032 31.6812 28.7384 31.7719L28.7108 31.8106L28.6955 31.8391C28.6935 31.8413 28.6905 31.8443 28.6864 31.8481C28.6692 31.8642 28.6414 31.8856 28.6038 31.9067C28.5237 31.9515 28.4425 31.9715 28.3854 31.9715C28.3129 31.9715 28.2056 31.9365 27.9344 31.8115L18.7053 25.4736Z"
											  stroke="#1429D4"
											  stroke-width="1.48"
											  style="mix-blend-mode: multiply;"
										  />
									  </svg>
                                    </div>
                                    <div class="slider-section-card__img">
                                        <?php
                                       
                                        $image = get_sub_field('card_image');
                                        if ($image) {
                                            echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
                                        }
                                        ?>
                                    </div>
                                    <div class="slider-section-card__title">
                                        <?php the_sub_field('card_title');  ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="slider-section__slider-controls">
                    <div class="slider-section-button-prev">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.3" cx="25" cy="25" r="25" transform="rotate(-180 25 25)" fill="#D9D9D9" />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M28.7005 16.2929C29.0998 16.6834 29.0998 17.3166 28.7005 17.7071L21.244 25L28.7005 32.2929C29.0998 32.6834 29.0998 33.3166 28.7005 33.7071C28.3012 34.0976 27.6539 34.0976 27.2546 33.7071L18.3521 25L27.2546 16.2929C27.6539 15.9023 28.3012 15.9023 28.7005 16.2929Z"
                                fill="#1429D4"
                            />
                        </svg>
                    </div>
                    <div class="slider-section-button-next">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.3" cx="25" cy="25" r="25" fill="#D9D9D9" />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M21.2995 33.7071C20.9002 33.3166 20.9002 32.6834 21.2995 32.2929L28.756 25L21.2995 17.7071C20.9002 17.3166 20.9002 16.6834 21.2995 16.2929C21.6988 15.9024 22.3461 15.9024 22.7454 16.2929L31.6479 25L22.7454 33.7071C22.3461 34.0976 21.6988 34.0976 21.2995 33.7071Z"
                                fill="#1429D4"
                            />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php if( have_rows('pricing_plans') ): ?>
    <section class="pricing">
        <div class="container pricing__container">
            <div class="pricing__wrapper">
                <div class="pricing__bg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1392" height="739" viewBox="0 0 1392 739" fill="none">
                        <rect x="1392" y="5.91278e-05" width="738.992" height="1392" rx="15" transform="rotate(90 1392 5.91278e-05)" fill="url(#paint0_radial_5964_11424)" fill-opacity="0.1" />
                        <defs>
                            <radialGradient id="paint0_radial_5964_11424" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1392 696) scale(533.562 553.33)">
                                <stop stop-color="#1429D4" />
                                <stop offset="0.61" stop-color="#1429D4" stop-opacity="0.604101" />
                                <stop offset="1" stop-color="#1429D4" stop-opacity="0" />
                            </radialGradient>
                        </defs>
                    </svg>
                </div>
                <h2 class="pricing__title">Pricing</h2>
                <p class="pricing__subtitle">Try it for free, access more features as you need. Cancel anytime.</p>
                <div class="pricing__toggle">
                    <button class="pricing__toggle-btn pricing__toggle-btn--active" data-period="monthly">Monthly</button>
                    <button class="pricing__toggle-btn" data-period="annually">Annually (save 10%)</button>
                </div>
                <div class="pricing__cards">
                    <div class="swiper-wrapper">
                        <?php
                        while( have_rows('pricing_plans') ) : the_row();
                            $plan_name = get_sub_field('plan_name');
                            $monthly_price = get_sub_field('monthly_price');
                            $annual_price = get_sub_field('annual_price');
                            $description = get_sub_field('description');
                            $features = get_sub_field('features'); // assuming this is a repeater field for features
                        ?>
                        <div class="swiper-slide pricing__card pricing__card--<?php echo strtolower($plan_name); ?>">
                            <span class="pricing__badge"><?php echo $plan_name; ?></span>
                            <h5 class="pricing__title-secondary"><?php echo $description; ?></h5>
                            <h3 class="pricing__price"><?php echo $monthly_price; ?><span class="pricing__period">per month</span></h3>
                            <div class="pricing__divider-primary"></div>
                            <div class="pricing__includes">Includes:</div>
                            <ul class="pricing__features">
                                <?php if( have_rows('features') ): ?>
                                    <?php while( have_rows('features') ) : the_row(); ?>
                                        <li class="pricing__feature"><?php the_sub_field('feature'); ?></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                            <div class="pricing__divider-secondary"></div>
                            <button class="pricing__select">Select plan</button>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
				<div class="pricing__cards-pagination"></div>
            </div>
        </div>
    </section>
	
	<script>
		
	
  document.addEventListener("DOMContentLoaded", () => {
    const toggleButtons = document.querySelectorAll(".pricing__toggle-btn");
  
   
    const prices = {
      monthly: ["<?php the_sub_field('monthly_price'); ?>", "<?php the_sub_field('monthly_price'); ?>", "<?php the_sub_field('monthly_price'); ?>"],
      annually: ["<?php the_sub_field('annual_price'); ?>", "<?php the_sub_field('annual_price'); ?>", "<?php the_sub_field('annual_price'); ?>"],
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
		
document.addEventListener("DOMContentLoaded", () => {
  if (window.innerWidth < 990) {
    window.addEventListener("load", () => {
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
        on: {
          
          imagesReady: function() {
            this.update();
          },

        
          slideChange: function() {
            const activeIndex = this.activeIndex;
            const paginationBullets = document.querySelectorAll('.pricing__cards-pagination .swiper-pagination-bullet');
            
         
            paginationBullets.forEach(bullet => {
              bullet.classList.remove('swiper-pagination-bullet-active');
            });

            
            if (paginationBullets[activeIndex]) {
              paginationBullets[activeIndex].classList.add('swiper-pagination-bullet-active');
            }
          },

         
          init: function() {
            console.log('Swiper initialized!');
           
            const activeIndex = this.activeIndex;
            const paginationBullets = document.querySelectorAll('.pricing__cards-pagination .swiper-pagination-bullet');
            
            
            if (paginationBullets[activeIndex]) {
              paginationBullets[activeIndex].classList.add('swiper-pagination-bullet-active');
            }
          },
        },
      });

      
      window.addEventListener('resize', () => {
        pricingSwiper.update();
      });
    });
  }
});

	</script>
	
<?php endif; ?>




	
<section class="quote">
    <div class="container quote__container">
        <div class="quote__wrapper">
            <div class="quote__bg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1392" height="581" viewBox="0 0 1392 581" fill="none">
                                <rect y="580.298" width="580.303" height="1392" rx="15" transform="rotate(-90 0 580.298)" fill="url(#paint0_radial_11806_2549)" fill-opacity="0.1" />
                                <defs>
                                    <radialGradient id="paint0_radial_11806_2549" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(4.80102e-05 1276.3) scale(418.986 553.33)">
                                        <stop stop-color="#1429D4" />
                                        <stop offset="0.61" stop-color="#1429D4" stop-opacity="0.604101" />
                                        <stop offset="1" stop-color="#1429D4" stop-opacity="0" />
                                    </radialGradient>
                                </defs>
                            </svg>
            </div>
            <div class="quote__title">
                <h3><?php the_field('quote_title'); ?></h3> 
            </div>
            <div class="quote__divider">
                <div class="divider"></div>
                <svg width="38" height="29" viewBox="0 0 38 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M35.0351 0V6.12H31.5251C28.7651 6.12 27.3851 7.5 27.3851 10.26V13.14H28.9151C31.3151 13.14 33.2951 13.86 34.8551 15.3C36.4751 16.74 37.2851 18.57 37.2851 20.79C37.2851 23.19 36.4751 25.14 34.8551 26.64C33.2951 28.14 31.3151 28.89 28.9151 28.89C26.4551 28.89 24.4451 28.14 22.8851 26.64C21.3251 25.08 20.5451 23.01 20.5451 20.43V10.08C20.5451 3.36 23.9051 0 30.6251 0H35.0351ZM15.2351 0V6.12H11.7251C8.96512 6.12 7.58512 7.5 7.58512 10.26V13.14H9.11512C11.5151 13.14 13.4951 13.86 15.0551 15.3C16.6751 16.74 17.4851 18.57 17.4851 20.79C17.4851 23.19 16.6751 25.14 15.0551 26.64C13.4951 28.14 11.5151 28.89 9.11512 28.89C6.65512 28.89 4.64512 28.14 3.08512 26.64C1.52512 25.08 0.745117 23.01 0.745117 20.43V10.08C0.745117 3.36 4.10512 0 10.8251 0H15.2351Z"
                                    fill="#1429D4"
                                    style="mix-blend-mode: multiply;"
                                />
                 </svg>
                <div class="divider"></div>
            </div>
            <div class="quote__subtitle">
                <p><?php the_field('quote_subtitle'); ?></p> 
            </div>
            <div class="quote__authors">
                <?php if( have_rows('quote_authors') ): ?>
                    <div class="quote-author">
                        <div class="quote-author__img">
                            <?php while( have_rows('quote_authors') ): the_row(); ?>
                                <img
                                    class="quote-author__image"
                                    src="<?php the_sub_field('author_image'); ?>"
                                    alt="<?php the_sub_field('author_name'); ?>"
                                    data-title="<?php the_sub_field('quote__title'); ?>"
                                    data-subtitle="<?php the_sub_field('quote_subtitle'); ?>"
                                    data-author="<?php the_sub_field('author_name'); ?>"
                                    data-position="<?php the_sub_field('author_position'); ?>"
                                />
                            <?php endwhile; ?>
                        </div>
                        <div class="quote-author__info">
                            <h4 class="quote-author__title"><?php the_sub_field('author_name'); ?></h4>
                            <p class="quote-author__subtitle"><?php the_sub_field('author_position'); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

</main>




<?php
get_footer();
?>