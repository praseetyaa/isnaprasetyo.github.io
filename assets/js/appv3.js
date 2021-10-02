// $(document).ready(function() {
//     $(window).scroll(function() {    
//         var scroll = $(window).scrollTop();

//          //>=, not <=
//         if (scroll >= 100) {
//             $(".navbar").addClass("fixed-top");
//             $(".navbar-secondary").addClass("d-none");
//         } else {
//             $(".navbar").removeClass("fixed-top");
//             $(".navbar-secondary").removeClass("d-none");
//         }
//     });
// });


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
        src: 'assets/img/9.webp'},
      { text: 'https://campusdigital.id', 
        src: 'assets/img/10.png'},
      { text: '#', 
        src: 'assets/img/11.png'}
    ],
    count: 3,
  }
})