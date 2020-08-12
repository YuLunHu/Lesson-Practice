function longTimeWork(workFine = false, errorMessage = "test") {
    return new Promise( (resolve, reject) => {
        setTimeout( () => {
            (workFine) ? resolve(400) : reject(errorMessage);
        }, 500);
    })
}

function usingLongTimeWork() {
    longTimeWork(false, "test")  // try true/false
    .then(function (e) {
        console.log(e);
    })
    .catch(function (e) {
        console.log(e);
    })
}

usingLongTimeWork();
