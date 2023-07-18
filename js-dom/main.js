
let inputValue;

let inputElement = document.querySelector('select');
inputElement.onchange = function (e) {
    console.log(e.target.value);
}


var h1Element = document.querySelectorAll('h1');

for (let index = 0; index < h1Element.length; index++) {
    h1Element[index].onclick = function (e) {
        console.log(e.target.innerHTML);
    }
}

h1Element.onclick = function (e) {
    // h1Element.setAttribute('class', 'heading');
    console.log(e.target.innerHTML);
}

// document.write('Hello Guys');

// let headingNode = document.getElementById('heading');

// console.log(headingNode);
// console.log(document.getElementsByClassName('al10'));

// var listItemNodes = document.querySelector('.box-1');
// console.log(listItemNodes);

// console.log(listItemNodes.getElementsByTagName('li'));


// var box2 = document.querySelector('.box-2');
// console.log(box2);
// console.log(box2.getElementsByTagName('li'));

// var headingElement = document.getElementById('ab1');

// headingElement.setAttribute('class', 'heading');

// var a = headingElement.getAttribute('class');

// console.log(a);

// var v4Element = document.getElementById('v4');

// v4Element.setAttribute('class', 'trent');

// let ab1 = document.querySelector('h2')

// ab1.innerText = 'New heading'

// var boxElement = document.querySelector('.box-3');

// boxElement.innerHTML = '<h1>you will never walk alone </h1>';

// console.log(document.querySelector('h1'));

// boxElement.style.width = '200px';
// boxElement.style.height = '200px';
// boxElement.style.backgro undColor = 'aqua';

// boxElement.classList.add('red')

// setInterval(() => {
//     boxElement.classList.toggle('red')
// }, 500)

// setInterval(() => {
//     headingElement.classList.toggle('red')
// }, 800)