window.addEventListener('scroll', function() {
    var coffeeElements = document.querySelectorAll('.coffee');
    
    coffeeElements.forEach(function(coffee) {
        var position = coffee.getBoundingClientRect().top;
        var screenHeight = window.innerHeight;
        
        if (position < screenHeight) {
            coffee.classList.add('visible');
        } else {
            coffee.classList.remove('visible');
        }
    });
});

document.getElementById("elem2rightside").addEventListener("click", function(){
    document.getElementById("modal").classList.add("open")
})
function closeModal() {
    
    document.getElementById("modal").classList.remove("open");
}

document.getElementById("coffee-click").addEventListener("click", function(){
    document.getElementById("coffee-modal").classList.add("open")
})

document.getElementById("close-det").addEventListener("click", function(){
    document.getElementById("coffee-modal").classList.remove("open")
})

const sizeButtons = document.querySelectorAll('.size-button');

sizeButtons.forEach(button => {
    button.addEventListener('click', () => {
        sizeButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
    });
});

let container = document.querySelector('.menu-container');

container.addEventListener('wheel', (e) => {
    e.preventDefault();
    container.scrollLeft += e.deltaY;
});

/*                             */
const sizeS = document.getElementById('size-s');
const sizeM = document.getElementById('size-m');
const sizeL = document.getElementById('size-l');

const priceCoffee = document.querySelector('.price-det-coffee');

sizeS.addEventListener('click', function() {
    priceCoffee.textContent = '150 RUB';
});

sizeM.addEventListener('click', function() {
    priceCoffee.textContent = '180 RUB';
});

sizeL.addEventListener('click', function() {
    priceCoffee.textContent = '200 RUB';
});