export function showTime() {
    alert(Date());
}

export class Animal {
    constructor(WeightValue = 10) {
        this.weight = WeightValue;
    }
    makeSound() {
        alert("Animal: RRR!");
    }
}

export default class Cat extends Animal {
    constructor(location = "Tainan", WeightValue) {
        super(WeightValue);
        this.location = location;
    }
    makeSound() {
        alert("Meow~");
    }
}

