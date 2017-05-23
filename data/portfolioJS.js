var items = document.getElementsByClassName('main-menu_items'),
    mainMenu = document.getElementById('main-menu'),
    line = document.getElementById('line'),
    wrapper = document.getElementById('wrapper'),
    hamburger = document.getElementById('hamburger'),
    content = document.getElementsByClassName('content'),
    readMoreBttn = document.getElementById('content_read-more-button'),
    readMoreContent = document.getElementsByClassName('content_read-more'),
    cursorBlow = document.getElementById('cursorBlow');

//return to default settings (default view)
function defaultSet() {
    line.className = '';
    line.classList.add('line-default', 'line-text-default');
    wrapper.style = '';
    for (var cntnt = 0; cntnt < content.length; cntnt++) {
        content[cntnt].style = '';
    }
}
//default settings END <<<

//view content
function lineFullScreen() {
    line.classList.remove('line-afterClick');
    line.classList.add('line-fullScreen');
    wrapper.style.opacity = '0.1';
    //wrapper.style.backgroundSize = '130%';
    wrapper.style.transitionDelay = '0.3s';
    for (var cntnt = 0; cntnt < content.length; cntnt++) {
        content[cntnt].style.opacity = '1';
        content[cntnt].style.transition = '1s';
        content[cntnt].style.transitionDelay = '0.3s';
    }
}
//view content END <<<

//that what elements do when user select an item from main menu (where ALL MAGIC begins!)
function afterClick() {
    defaultSet();
    //changes style of line element
    setTimeout(function () {
        line.classList.remove('line-default');
        line.classList.add('line-afterClick');
    }, 500);
    //set style block for selected content
    if (this === document.getElementById('omnie')) {
        content[0].style.display = 'block';
        line.classList.add('line-text-omnie');
    } else if (this === document.getElementById('portfolio') || this === document.getElementById('portfolio-link')) {
        content[1].style.display = 'block';
        line.classList.add('line-text-default');
    } else if (this === document.getElementById('kontakt')) {
        content[2].style.display = 'block';
        line.classList.add('line-text-kontakt');
    } else {
        null;
    }
    setTimeout(lineFullScreen, 700);
    return false;
}
for (var i = 0; i < items.length; i++) {
    items[i].addEventListener('click', afterClick, false);
}
document.getElementById('portfolio-link').addEventListener('click', afterClick, false);


// hamburger
function hamburgerMenu() {
    if (hamburger.value === 'off') {
        mainMenu.style.display = 'block';
        mainMenu.addEventListener('click', function () {
            hamburger.value = 'on';
            mainMenu.style.display = 'none';
        }, false);
        hamburger.value = 'on';
    } else {
        mainMenu.style = 'none';
        hamburger.value = 'off';
    }
}
hamburger.addEventListener('click', hamburgerMenu, false);
//hamburger END <<<


//fixed blinking circle after click
function blinkCircle(ev) {
    var posX = ev.clientX - 5;
    var posY = ev.clientY - 5;
    cursorBlow.style.top = posY + 'px';
    cursorBlow.style.left = posX + 'px';
    cursorBlow.classList.remove('cursorBlow');
    cursorBlow.classList.add('cursorBlow-action');
    setTimeout(function () {
        //cursorBlow.style = '';
        cursorBlow.classList.add('cursorBlow');
        cursorBlow.classList.remove('cursorBlow-action');
    }, 200);
    return false;
}
wrapper.addEventListener('click', blinkCircle, false);
//blink circle END <<<


//read more toggle
function readMoreToggle() {
    if (readMoreBttn.value === 'on') {
        readMoreBttn.innerHTML = 'Nie, jednak nie...';
        readMoreBttn.value = 'off';
        for (var rm = 0; rm < readMoreContent.length; rm++) {
            readMoreContent[rm].style.display = 'block';
        }
        setTimeout(function () {
            for (var rm = 0; rm < readMoreContent.length; rm++) {
                readMoreContent[rm].style.display = 'block';
                readMoreContent[rm].style.opacity = '1';
            }
        }, 200);
    } else {
        readMoreBttn.innerHTML = 'Urzekła mnie Twoja historia';
        readMoreBttn.value = 'on';
        for (var rm = 0; rm < readMoreContent.length; rm++) {
            readMoreContent[rm].style = '';
        }
    }
    return false;
}
readMoreBttn.addEventListener('click', readMoreToggle, false);
//read more END <<<