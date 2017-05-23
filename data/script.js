var items = document.getElementsByClassName('items'),
    line = document.getElementById('line'),
    wrapper = document.getElementById('wrapper'),
    mainMenu = document.getElementById('main-menu'),
    hamburger = document.getElementById('hamburger'),
    content = document.getElementsByClassName('content'),
    readMoreBttn = document.getElementById('content_read-more-button'),
    contentReadMore = document.getElementsByClassName('content_read-more'),
    portfolioSpin = document.getElementsByClassName('portfolio-imageNtext'),
    cursorBlow = document.getElementById('cursorBlow');

//fixed blinking circle after click
function blinkCircle(ev) {
    var posX = ev.clientX-5;
    var posY = ev.clientY-5;
    cursorBlow.style.top = posY+'px';
    cursorBlow.style.left = posX+'px';
    cursorBlow.classList.remove('cursorBlow');
    cursorBlow.classList.add('cursorBlow-action');
    setTimeout(function(){
        //cursorBlow.style = '';
        cursorBlow.classList.add('cursorBlow');
        cursorBlow.classList.remove('cursorBlow-action');
    },200);
    return false;
}
wrapper.addEventListener('click', blinkCircle, false);

//read more toggle
function readMoreToggle() {
    if (readMoreBttn.value === 'on') {
        readMoreBttn.innerHTML = 'Nie, jednak nie...';
        readMoreBttn.value = 'off';
        for (var rm = 0; rm < contentReadMore.length; rm++) {
                contentReadMore[rm].style.display = 'block';
        }
        setTimeout(function(){
            for (var rm = 0; rm < contentReadMore.length; rm++) {
                contentReadMore[rm].style.display = 'block';
                contentReadMore[rm].style.opacity = '1';
            }
        },200);
    } else {
        readMoreBttn.innerHTML = 'Urzekła mnie Twoja historia';
        readMoreBttn.value = 'on';
        for(var rm = 0; rm < contentReadMore.length; rm++) {
            contentReadMore[rm].style = '';
        }   
    }
}
readMoreBttn.addEventListener('click', readMoreToggle, false);

var p = 0;
//that what elements do when user select an item from main menu
function afterClick() {
    mainMenu.style.display = 'block';
    for (var j = 0; j < items.length; j++) {
        items[j].style.display = 'none';
    }
    //changes selected element from main menu
    this.style.display = 'block';
    this.style.position = 'absolute';
    this.style.marginLeft = '-20px';
    this.style.left = '50%';
    this.style.zIndex = '4';
    this.style.transform = 'scale(1.5)';
    //changes style of line
    line.classList.remove('line-default');
    line.classList.add('line-afterClick');
    //set style block for selected content
    if (this === document.getElementById('omnie')){
        content[0].style.display = 'block';
    } else if (this === document.getElementById('portfolio')) {
        content[1].style.display = 'block';
    } else if (this === document.getElementById('kontakt')) {
        content[2].style.display = 'block';
    } else {
        null;
    }
    setTimeout(lineFullScreen, 500);
    return false;
}

//view after tranformation
function lineFullScreen() {
    line.classList.remove('line-afterClick');
    line.classList.add('line-fullScreen');
    wrapper.style.backgroundSize = '130%';
    wrapper.style.transitionDelay = '0.3s';
    mainMenu.style.display = 'none';
    for (var cntnt = 0; cntnt < content.length; cntnt++) {
        content[cntnt].style.opacity = '1';
        content[cntnt].style.transition = '1s';
        content[cntnt].style.transitionDelay = '0.5s';
    }
    return false;
}
for (var i = 0; i < items.length; i++) {
    items[i].addEventListener('click', afterClick, false);
}

//return to default settings (default view)
function defaultSet() {
    line.classList.remove('line-fullScreen');
    line.classList.add('line-default');
    wrapper.style = '';
    mainMenu.style = '';
    for (var j = 0; j < items.length; j++) {
        items[j].style = '';
    }
    for (var cntnt = 0; cntnt < content.length; cntnt++) {
        content[cntnt].style = '';
    }
    return false;
}
hamburger.addEventListener('click', defaultSet, false);

