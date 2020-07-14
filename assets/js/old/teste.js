function funTeste(al1, at2) {
    console.log(this, al1, al2);
}
funTeste.apply(1, [2, 3]);
const vetor1 = [89, 70, 50, 48];
console.log(Math.min.apply(Math, vetor1));
console.log(Math.max.apply(Math, vetor1));

// console.log(Math.min(98, 78, 50));