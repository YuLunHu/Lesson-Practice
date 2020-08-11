import Cat, {showTime, Animal} from "./library2.js";

showTime();

let orange = new Cat("Japan", 57);
orange.makeSound();
alert(orange.weight.toString() + " " + orange.location);