document.addEventListener('DOMContentLoaded', function(){
var typed = new Typed('#typed', {
      strings:[
            'My name is Rahadina Budiman Sundara.',
            '21 Years Old.',
            'I live in Indonesia.',
            'Reading, listen Music, and wrote some code was my hobby.',
            'Check the buttons on the side if you want to visit my social media.',
            'Cheers!',
            ],
      typeSpeed: 45,
      backSpeed: 80,
      fadeOut: true,
      loop: true
});
});

// active header bar
const lokasi_sekarang = location.href;
const menu = document.querySelectorAll('a');
const menu_length = menu.length;
for(let i=0;i<menu_length;i++){
      if(menu[i].href == lokasi_sekarang){
            menu[i].className ="active"
      }
}