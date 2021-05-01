/* 
 * Affichage de la barre de consentement et démarage de google analytics
 * Author : Fernandez Tony
 * Date : 23/08/2020
 */

const cookieContainer = document.querySelector(".cookieContainer");
const cookieButton = document.querySelector(".cookieBtn");

/* Pour google analytics */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-173157276-3']);
_gaq.push(['_gat._anonymizeIp']);
_gaq.push(['_trackPageview']);

let date = new Date(Date.now() + 7776000000); //Cookie valable 3 mois
date = date.toUTCString();

/**
 * Récupére le cookie
 * @param {String} name
 * @returns {String}
 */
function  getCookie(name){
     if(document.cookie.length == 0)
       return null;

     var regSepCookie = new RegExp('(; )', 'g');
     var cookies = document.cookie.split(regSepCookie);

     for(var i = 0; i < cookies.length; i++){
       var regInfo = new RegExp('=', 'g');
       var infos = cookies[i].split(regInfo);
       if(infos[0] == name){
         return unescape(infos[1]);
       }
     }
     return null;
   }
/**
 * Créer un cookie
 * @param {String} nom
 * @param {String} valeur
 * @param {Date} expire
 * @param {String} chemin
 * @param {String} domaine
 */   
function setCookie(nom, valeur, expire, chemin, domaine){
     document.cookie = nom + ' = ' + escape(valeur) + '  ' +
               ((expire == undefined) ? '' : ('; expires = ' + expire)) +
               ((chemin == undefined) ? '' : ('; path = ' + chemin)); +
               ((domaine == undefined) ? '' : ('; domain = ' + domaine)); 
   }

/**
 * Evénement click sur le boutton
 */
cookieButton.addEventListener("click",() => {
    cookieContainer.classList.remove("active"); // Cache la bannière
    setCookie('cookieBannerDisplayed','true',date,'/','nolark.it-fernandeztony.com'); // Créer le cookie
      
});

/**
 * Affichage après 2 seconde si le cookie n'éxiste pas sinon active google analytics
 */
setTimeout( () =>{
    if (!getCookie("cookieBannerDisplayed")){
    cookieContainer.classList.add("active");
} else {
    googleAnalytics();
}
}, 2000);

 /**
  * Envois des informations à google Analytics
  */
function googleAnalytics() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  };