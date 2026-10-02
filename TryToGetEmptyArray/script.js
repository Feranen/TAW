ToGenerate = [];
Check = []
counter = 0;
function isPrime(n) {
    if (n % 2 === 0) {
        return true;
    }
}

const startTime = performance.now()

do {
    counter++;

    let hasPrime = false;

    for (let i = 0; i < 30; i++) {
        const n = Math.floor(Math.random() * 10000);

        if (isPrime(n)) {
            hasPrime = true;
            break;
        }
    }

    if (!hasPrime) break;

} while (true);

console.log(`It took ${counter} tries to get all empty table`)


const endTime = performance.now()

console.log(`took ${endTime - startTime} milliseconds`)
console.log(`took ${(endTime - startTime) / 1000} seconds`)




