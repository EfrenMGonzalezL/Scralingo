var cards = document.querySelectorAll('.cards-container .card');

for(var i = 0; i < cards.length; i++) {
    cards[i].style.background = cards[i].dataset.color;
    console.log(cards[i].dataset);
    
    cards[i].addEventListener('click', function(e) {
        console.log(this);
        if(this.dataset.href != null) {
            window.location.href = this.dataset.href;
        }
    });
}