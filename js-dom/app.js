
//Excutor 
function sleep(ms) {
    return new Promise((resolve) => {
        setTimeout(resolve, ms);
    });
}

sleep(1000)
    .then(function () {
        console.log(1);
        return sleep(1000);
    })

    .then(function () {
        console.log(2);
        return sleep(1000);
    })

    .then(function () {
        console.log(3);
        return sleep(1000);
    })

    .then(function () {
        console.log(4);
        return sleep(1000);
    })

    .catch(function () {
        console.log('Failure');
    })
    .finally(function () {
        console.log('Done');
    })


var promise1 = new Promise(
    function (resolve) {
        setTimeout(function () {
            resolve([1]);
        }, 2000)
    }
)

var promise2 = new Promise(
    function (resolve) {
        setTimeout(function () {
            resolve([2, 3]);
        }, 5000)
    }
)

Promise.all([promise1, promise2])
    .then(function (result) {
        console.log(result);
    })