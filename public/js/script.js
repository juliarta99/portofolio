// humburger
const humberger = document.querySelector(".humberger");
const nav = document.querySelector("nav");

humberger.addEventListener('click', function(){
      humberger.classList.toggle('active');
      nav.classList.toggle('hidden');
});

document.querySelector("nav ul li a").addEventListener('click', function(){
      nav.classList.remove('active');
      humberger.classList.remove('hidden');
});

// to top
const toTop = document.querySelector("#to-top");
window.addEventListener('scroll', function(){
      if(window.pageYOffset >= 100 ) {
            toTop.classList.remove('hidden');
      }else{
            toTop.classList.add('hidden');
      }
});

// klik selain humberger
window.addEventListener('click', function(event){
      if(event.target != humberger && nav) {
            humberger.classList.remove('active');
            nav.classList.add('hidden');
      }
});
 

// dark mode


const mode = document.querySelector('#darkMode');
const mode2 = document.querySelector('#darkModeLg');
const darkChecked = document.querySelector('#darkChecked');
const html = document.querySelector('html');

if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark')
      mode.src = "../img/sun.png";
      mode2.src = "../img/sun.png";
    } else {
      document.documentElement.classList.remove('dark')
    }


mode.addEventListener('click', function(){
      html.classList.toggle('dark');
      if(html.classList.contains('dark')){
            darkChecked.setAttribute('checked', 'checked');
      }else{
            darkChecked.removeAttribute('checked');
      };

      if(darkChecked.checked == true){
            localStorage.theme = 'dark';
            mode.src = "../img/sun.png";
      }else{
            localStorage.theme = 'light';
            mode.src = "../img/moon.png";
      };
});

mode2.addEventListener('click', function(){
      html.classList.toggle('dark');
      if(html.classList.contains('dark')){
            darkChecked.setAttribute('checked', 'checked');
      }else{
            darkChecked.removeAttribute('checked');
      };

      if(darkChecked.checked == true){
            localStorage.theme = 'dark';
            mode2.src = "../img/sun.png";
      }else{
            localStorage.theme = 'light';
            mode2.src = "../img/moon.png";
      };
});