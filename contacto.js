document.getElementById('button').addEventListener('click', 
function(){
    document.querySelector('.bg-modal').style.display = 'flex';
    document.querySelector('body').style.overflow = 'hidden';
});

document.querySelector('.close').addEventListener('click', 
function(){
    document.querySelector('.bg-modal').style.display = 'none';
    document.querySelector('body').style.overflow = 'visible';
});