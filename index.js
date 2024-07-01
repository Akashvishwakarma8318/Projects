const text = document.querySelector('.running');

const textLoad = ()=>{
    setTimeout(() => {
        text.textContent = 'Designer';
        text.style.color = 'rgb(235, 14, 255)'
    }, 0);
    setTimeout(() => {
        text.textContent = 'Full Stack Developer'
        text.style.color = 'aqua'
    }, 4000);
    setTimeout(() => {
        text.textContent = 'Coder'
        text.style.color = 'yellow'
    }, 8000);
    setTimeout(() => {
        text.textContent = 'Front-End Designer'
        text.style.color = 'blue'
    }, 12000);
}
textLoad();
setInterval(textLoad ,16000);


function bgChanger(){
    let changerBG = document.querySelector('.fa-solid');
    let h1 = document.querySelectorAll('h1');
    let span = document.querySelectorAll('span');
    let i = document.querySelectorAll('i');
    let h2 = document.querySelectorAll('h2');
    let cards = document.querySelectorAll('card')
    let skills = document.querySelector('.skills h1');
    let main2 = document.querySelector('.left');
    let main = document.querySelectorAll('.textArea h1,p,button')
    let logo = document.querySelector('.symbol h1');
    let contents = document.querySelectorAll('.contents ul li a');
    // let bgBtn = document.querySelector('.bgChanger button');
    let body = document.querySelector('body');


    var none = 0;
    if(none === 0){
        changerBG.addEventListener('click',function(){
            body.style.backgroundColor = 'White';
            logo.style.color = 'black';
            contents.forEach((i)=>{
                i.style.color = 'black';
            });
            main.forEach((i)=>{
                i.style.color = 'black';
            });
            cards.forEach((i)=>{
                i.style.backgroundColor = 'white';
            });
            main2.style.color = 'black';
            h1.forEach((i)=>{
                i.style.color = 'black';
            })
            h2.forEach((i)=>{
                i.style.color = 'black';
            })
            span.forEach((i)=>{
                i.style.color = 'black';
            })
            i.forEach((i)=>{
                i.style.color = 'black';
            })
            skills.style.color = 'black';
            console.log('hello');
            none = 1;
        });
    }
    else{
           console.log('hyy');
           window.location.href = 'index.php';
           none = 0;
    }
};
bgChanger();

