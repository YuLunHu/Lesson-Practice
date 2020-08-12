function happy(data, timeCount) {
    return new Promise( function (resolve, reject) {
        setTimeout(function () {
            resolve(data);
        }, timeCount)
    })
}

function sad(data, timeCount) {
    return new Promise( function (resolve, reject) {
        setTimeout(resolve(data), timeCount)
    })
}

function angry(data, timeCount) {
    return new Promise( (resolve, reject) => {
        setTimeout( () => {
            resolve(data);
        }, timeCount)
    })
}


async function living() {
    let [result1, result2, result3] = 
      await Promise.all([happy(200, 2000), sad(-100, 3000), angry(10000, 1000)]);

    var total = result1 + result2 + result3;
    console.log("total:", total);
}

living();

