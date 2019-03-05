const ajaxRecive = document.querySelector('#ajaxRecive');
const content = document.querySelector('.content');

ajaxRecive.addEventListener('click',function(){
    let xhr = new XMLHttpRequest;
    xhr.open('GET','dane.php',true);
    xhr.send();
    xhr.addEventListener('load',function(){
        const wynik = xhr.response;
        let jsonWynik = JSON.parse(wynik);
        jsonWynik.map(function(el){
            const p = document.createElement('p');
            p.innerText = el;
            content.appendChild(p);
        })
    })
})