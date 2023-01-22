// create an array to store the to-do list items
let toDoList = [];

// function to add a new item to the list
function addToDo(item) {
  toDoList.push(item);
  console.log(item + " added to the list.");
}

// function to remove an item from the list
function removeToDo(item) {
  let index = toDoList.indexOf(item);
  if (index > -1) {
    toDoList.splice(index, 1);
    console.log(item + " removed from the list.");
  } else {
    console.log(item + " not found in the list.");
  }
}

// function to display the current list
function displayToDo() {
  console.log("Current To-Do List:");
  toDoList.forEach(function(item) {
    console.log(item);
  });
}

 // test the functions
 addToDo("Take out the trash");
 addToDo("Buy groceries");
 addToDo("Finish homework");
 displayToDo();
 removeToDo("Buy groceries");
 displayToDo();


// Add remove display 

 let toDoList = [];

 function addToDo(item){
     toDoList.push(item);
    console.log(item + " added to the list.");
 }

function removeToDo(item){
    let index = toDoList.indexOf(item);
    if(index > -1){
        toDoList.splice(index , 1);
        console.log(item + " removed from the list.");
    }else{
        console.log(item + " not found in the list.");

    }
}

function displayToDo() {
    console.log("Current To-Do List:");
    toDoList.forEach(function(item){
        console.log(item);
    })
}


for(var i=5 ; i=>1 ; i--){
    for(var j=1 ; j<i ; j++){
        document.write("*" + "");
    }
    document.write("</br>");
}7