const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click',()=>{

        nav.classList.toggle('nav-active');

        navLinks.forEach((link, index)=> {
            if(link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index /7 + 0.3}s`;
            }
        });
        burger.classList.toggle('toggle');
    });
    
}
navSlide();

/* On va empecher l'événement de soumission de se propager (event.preventDefault()) */
// D'où part l'évenement ? Du bouton, et remonte jusqu'au formulaire 
const btn = document.getElementById('btn_login');
btn.addEventListener('click', (ev) => {
    ev.preventDefault(); // pour empêche l'évenement de se propage
    submitForm(); 
    
})

// TODO : rajouter les données du formulaire 
function submitForm(){
    let formParams = new URLSearchParams();  
    formParams.append('pseudo', 'evejourdan');
    formParams.append('email','jourdan@blonde.fr');
    formParams.append('password', 'password');
    let headers = new Headers();
    headers.append('Accept' ,'application/json');
    const requestOptions = {
        method:'POST', 
        body:formParams, 
        headers: headers
    }; 
    fetch('/backend/connexion.php', requestOptions) // Ici il faudrait envoyer les champs de formulaire au serveur
    .then(response => response.text()) //  POur cela il faudrait indiquer au serveur que je veux du JSON 
    .then(data => console.log(data))
}
