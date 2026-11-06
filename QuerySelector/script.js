let h2Wtrak = document.querySelector("#in-progress>h2");

h2Wtrak.innerText = "W trakcie (1)";

let borderPriority = document.querySelector(".card.priority-high");
borderPriority.style.border = "2px solid red";
// -----------------------------------

let forTable = document.querySelectorAll(".card.priority-high");

// for (let card of forTable){
    
//     console.log(card.dataset.id);
// }

forTable.forEach(element => {
     console.log(element.dataset.id);
});


// -------------------------------____________________________________---------------------------------------

let urgentCounter = document.querySelectorAll(".priority-high"); // .length
let counter = 0;

for (let card of urgentCounter){
    counter = counter + 1;
}

console.log("Ilosc card z priority-high: " + counter)
let urgentElement = document.querySelectorAll("#urgent-count");
urgentElement[0].innerHTML = counter;

// -----------
let todolist = document.querySelector("#todo");

console.log(todo.querySelectorAll(".card").length);