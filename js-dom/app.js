
// //Excutor
// function sleep(ms) {
//     return new Promise((resolve) => {
//         setTimeout(resolve, ms);
//     });
// }

// sleep(1000)
//     .then(function () {
//         console.log(1);
//         return sleep(1000);
//     })

//     .then(function () {
//         console.log(2);
//         return sleep(1000);
//     })

//     .then(function () {
//         console.log(3);
//         return sleep(1000);
//     })

//     .then(function () {
//         console.log(4);
//         return sleep(1000);
//     })

//     .catch(function () {
//         console.log('Failure');
//     })
//     .finally(function () {
//         console.log('Done');
//     })


// var promise1 = new Promise(
//     function (resolve) {
//         setTimeout(function () {
//             resolve([1]);
//         }, 2000)
//     }
// )

// var promise2 = new Promise(
//     function (resolve) {
//         setTimeout(function () {
//             resolve([2, 3]);
//         }, 5000)
//     }
// )

// Promise.all([promise1, promise2])
//     .then(function (result) {
//         console.log(result);
//     })

// var promise = new Promise(
//     function (resolve, reject) {
//         reject('Success!');
//     }
// );

// promise
//     .then(function (result) {
//         console.log('result : ', result);
//     })

//     .catch(function (err) {
//         console.log('error : ', err);
//     })

//fetching api
// var postApi = 'https://jsonplaceholder.typicode.com/posts';

// fetch(postApi)

//     .then(function (response) {
//         return response.json();
//     })

//     .then(function (posts) {
//         var htmls = posts.map(function (post) {
//             return `<li>
//                 <h2>${post.title}</h2>
//                 <p>${post.body}</p>
//             </li>`
//         })
//         var html = htmls.join('');
//         document.getElementById('post-block').innerHTML = html
//     })


var postApi = 'https://jsonplaceholder.typicode.com/posts';

function start() {
    getPosts(rederPost);

    handeCreateForm();
}

start();

//function
function getPosts(callback) {
    fetch(postApi)
        .then(function (res) {
            return res.json();
        })
        .then(callback)
}

function rederPost(posts) {
    var listCousersBlock = document.querySelector('#list-courses')
    var htmls = posts.map(function (item) {
        return `
            <li>
                <h4>${item.title}</h4>
                <p>${item.body}</p>
            </li>
        `
    });
    listCousersBlock.innerHTML = htmls.join('')
}

function handeCreateForm() {
    var btnButton = document.querySelector('#create')
    var inputTitle = document.querySelector('#title')


    btnButton.onclick = function () {
        alert(inputTitle.value);
        // console.log(inputTitle.value);
    }
}