jQuery(document).ready(function($) {
"use strict";
$('.owl-carousel').owlCarousel( {
    loop: true,
    center: true,
    items: 3,
    margin: 30,
    autoplay: true,
    dots:true,
      nav:true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    smartSpeed: 450,
      navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      992: {
        items: 3
      },
      1200: {
        items: 4
      }
    }
  });
});

//navbar
$('#nav a').click(function () {
    $('#nav a.active').removeClass('active');
    $(this).addClass('active');
});
$(window).scroll(function () {
    var href = $(this).scrollTop();
    $('.active-link').each(function (event) {
        if (href >= $($(this).attr('href')).offset().top - 1) {
            $('#nav a.active').removeClass('active');
            $(this).addClass('active');
        }
    });
});


/**
 * Copyright 2019 Google LLC.
 * SPDX-License-Identifier: Apache-2.0
 */

(() => {
  if (window.matchMedia('(prefers-color-scheme)').media === 'not all') {
    // alert('Your browser does not support the `prefers-color-scheme` media query.');
  }
  
  const darkModeToggle = document.querySelector('dark-mode-toggle');
  const manifests = document.querySelectorAll('link[rel="manifest"]');
  const favicons = document.querySelectorAll('link[rel="icon"]');
  const themeColor = document.querySelector('meta[name="theme-color"]');
      
  const toggleTheme = (e) => {    
    const darkModeOn = e.detail.colorScheme === 'dark' ? true : false;        
    manifests.forEach((link) => {               
      link.href = darkModeOn ? link.dataset.hrefDark : link.dataset.hrefLight; 
    });
    favicons.forEach((link) => {      
      link.href = darkModeOn ? link.dataset.hrefDark : link.dataset.hrefLight;   
    });    
    themeColor.content = darkModeOn ? 'black' : 'white';    
  };
  document.addEventListener('colorschemechange', toggleTheme);
  toggleTheme({detail: {colorScheme: darkModeToggle.mode}});
})();

// vue
var example1 = new Vue({
  el: '#slider',
  data: {
    items: [
      { text: 'http://www.smkn1mandiraja.unaux.com',
        src: 'assets/img/1.webp'},
      { text: 'http://www.sikos.unaux.com', 
        src: 'assets/img/2.webp'},
      { text: 'http://www.rania.unaux.com',
        src: 'assets/img/3.webp'},
      { text: 'http://www.tabungan.unaux.com', 
        src: 'assets/img/4.webp'},
      { text: 'http://www.mmkproject.unaux.com',
        src: 'assets/img/5.webp'},
      { text: '#', 
        src: 'assets/img/6.webp'},
      { text: 'https://bisa.co.id',
        src: 'assets/img/7.webp'},
      { text: 'https://campusnet.id', 
        src: 'assets/img/8.webp'},
      { text: 'https://demo.campusnet.id', 
        src: 'assets/img/9.webp'}
    ]
  }
})

var example2 = new Vue({
  el: '#projects',
  data: {
    items: [
      { text: 'http://www.smkn1mandiraja.unaux.com',
        src: 'assets/img/1.webp'},
      { text: 'http://www.sikos.unaux.com', 
        src: 'assets/img/2.webp'},
      { text: 'http://www.rania.unaux.com',
        src: 'assets/img/3.webp'},
      { text: 'http://www.tabungan.unaux.com', 
        src: 'assets/img/4.webp'},
      { text: 'http://www.mmkproject.unaux.com',
        src: 'assets/img/5.webp'},
      { text: '#', 
        src: 'assets/img/6.webp'},
      { text: 'https://bisa.co.id',
        src: 'assets/img/7.webp'},
      { text: 'https://campusnet.id', 
        src: 'assets/img/8.webp'},
      { text: 'https://demo.campusnet.id', 
        src: 'assets/img/9.webp'}
    ]
  }
})

