let plants = ["Oak", "Elm", "Beech"];
plants["Tree"] = "Ash";
plants["Tree"] = "Cherry";
plants["Flower"] = "Rose";

var garden = [];

for (let plant in plants) {
    garden.push(plant);
}

for (let plant of plants) {
    garden.push(plant);
}

//console.log(plants);
console.log(garden);