var items = document.getElementsByClassName('main-menu_items'),
    mainMenu = document.getElementById('main-menu'),
    line = document.getElementById('line'),
    bckgrnd = document.getElementById('bg'),
    hamburger = document.getElementById('hamburger'),
    content = document.getElementsByClassName('content'),
    readMoreBttn = document.getElementById('content_read-more-button'),
    readMoreContent = document.getElementsByClassName('content_read-more');

//return to default settings (default view)
function defaultSet() {
    bckgrnd.style = '';
    for (var cntnt = 0; cntnt < content.length; cntnt++) {
        content[cntnt].style = '';
        content[cntnt].style.opacity = '0';
    }
}
//default settings END <<<

//view content
function viewContent() {
    bckgrnd.style.opacity = '0.2';
    bckgrnd.style.backgroundSize = '130%';
    for (var cntnt = 0; cntnt < content.length; cntnt++) {
        content[cntnt].style.transform = 'scale(1)';
        content[cntnt].style.opacity = '1';
    }
}
//view content END <<<

//that what elements do when user select an item from main menu
function afterClick() {
    defaultSet();
    line.classList.remove('line-default');
    line.classList.add('line-blur');
    if (this === document.getElementById('omnie')) {
        content[0].style.display = 'block';
    } else if (this === document.getElementById('portfolio') || this === document.getElementById('portfolio-link')) {
        content[1].style.display = 'block';
    } else if (this === document.getElementById('kontakt')) {
        content[2].style.display = 'block';
    } else {
        null;
    }
    setTimeout(viewContent,400);
}

for (var i = 0; i < items.length; i++) {
    items[i].addEventListener('click', afterClick, false);
}
document.getElementById('portfolio-link').addEventListener('click', afterClick, false);


// hamburger
function hamburgerMenu() {
    if (hamburger.value === 'off') {
        mainMenu.classList.remove('displayNone');
        mainMenu.classList.add('displayBlock');
        //listener - sets when user select an item from hamburger menu
        mainMenu.addEventListener('click', function () {
            hamburger.value = 'off';
            mainMenu.classList.remove('displayBlock');
        }, false);
        hamburger.value = 'on';
    } else if (hamburger.value === 'on'){
        mainMenu.classList.remove('displayBlock');
        mainMenu.classList.add('displayNone');
        hamburger.value = 'off';
    }
}
hamburger.addEventListener('click', hamburgerMenu, false);
//hamburger END <<<

//read more toggle
// function readMoreToggle() {
//     if (readMoreBttn.value === 'on') {
//         readMoreBttn.innerHTML = 'Nie, jednak nie...';
//         readMoreBttn.value = 'off';
//         for (var rm = 0; rm < readMoreContent.length; rm++) {
//             readMoreContent[rm].style.display = 'block';
//         }
//         setTimeout(function () {
//             for (var rm = 0; rm < readMoreContent.length; rm++) {
//                 readMoreContent[rm].style.display = 'block';
//                 readMoreContent[rm].style.opacity = '1';
//             }
//         }, 200);
//     } else {
//         readMoreBttn.innerHTML = 'Urzekła mnie Twoja historia';
//         readMoreBttn.value = 'on';
//         for (var rm = 0; rm < readMoreContent.length; rm++) {
//             readMoreContent[rm].style = '';
//         }
//     }
// }
// readMoreBttn.addEventListener('click', readMoreToggle, false);
//read more END <<<
