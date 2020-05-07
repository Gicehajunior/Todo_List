// the html selectors
const todoInput = document.querySelector(".todo-input");
const todoBtn = document.querySelector(".todo-btn");
const todoList = document.querySelector(".todo-list");
const filterOption = document.querySelector(".filter-todo");

// create/add event listeners
todoBtn.addEventListener('click', addToDo);
todoList.addEventListener('click', action);
filterOption.addEventListener('click', filterTodo);

// functions

function addToDo(event){
    // prevent default : prevents the browser from reloading
    event.preventDefault();

    // create todoDivElement
    const toDoDivElement = document.createElement("div");
    toDoDivElement.classList.add("todo");

    // creating list on the new created div element
    const newToDo = document.createElement('li')
    newToDo.innerText = todoInput.value;
    newToDo.classList.add('todo-item');
    toDoDivElement.appendChild(newToDo);


    //for check mark button
    const completedBtn = document.createElement('button');
    completedBtn.innerHTML = '<i class="fa fa-check" aria-hidden="true"></i>';
    completedBtn.classList.add('complete-btn');
    toDoDivElement.appendChild(completedBtn);


    //for trash button
    const trashBtn = document.createElement('button');
    trashBtn.innerHTML = '<i class="fa fa-trash" aria-hidden="true"></i>';
    trashBtn.classList.add('trash-btn');
    toDoDivElement.appendChild(trashBtn);


    // append to the list
    todoList.appendChild(toDoDivElement);
}


function action(e){
    const item = e.target;

    // Delete the todo item
    if(item.classList[0] === "trash-btn"){
        const todoUndeletedItem = item.parentNode;

        // animation when trying to remove the todo list item
        todoUndeletedItem.classList.add("fall"); 
        todoUndeletedItem.addEventListener('transitioned', function(){
            todoUndeletedItem.remove();
        });
        
    }

    // checking up the item todo item
    if(item.classList[0] === "complete-btn"){
        const todoUncheckedItem = item.parentNode;
        todoUncheckedItem.classList.toggle('completed');
    }
}


function filterTodo(e){
    const todos = todoList.childNodes;
    todos.forEach(function(todo){
        switch (e.target.value) {
            case "all":
                todo.style.display = "flex";
                break;
            case "completed":
                if(todo.classList.contains('completed')){
                    todo.style.display = "flex";
                }
                else{
                    todo.style.display = "none";
                }
                break;
            case "uncompleted":
                if(todo.classList.contains('uncompleted')){
                    todo.style.display = "flex";
                }
                else{
                    todo.style.display = "none";
                } 
                break;
        }
    });
}

