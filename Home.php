<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <title>TODO LIST</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <a class="navbar-brand" href="#">TODO_LIST</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Developer</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contacts</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>
                    </ul>
                    
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    
                </div>
            </nav>
            <div class="container">
                <p class="header"><h4 style="text-align: center;">Junior's Todo List</h4></p>
            </div>
            <div class="form">
                <!-- todo form -->
                <form class="list-form">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <div class="col-auto">
                                <div class="input-group mb-2">
                                    <input style="width: 90%;" type="text" class="form-control todo-input " id="inlineFormInputGroup" placeholder="Type List Here">
                                    <div class="input-group-prepend">
                                        <button type="submit" class="btn btn-success btn-sm input-group-text todo-btn"><i class="fa fa-plus-square" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="select">
                                <div class="form-group">
                                    <select name="todos" class="form-control filter-todo" name="todos" id="">
                                        <option value="all">All</option>
                                        <option value="completed">Completed</option>
                                        <option value="uncompleted">Uncompleted</option>
                                    </select>
                                </div>
                            </div>                    
                        </li>
                    </ul>
                </form>
                <!-- end of todo form -->

                <!-- todo list container -->
                <div class="todo-container">
                    <li class="todo-list"></li>
                </div>
                <!-- end of todo list container -->
            </div>
        </div>
    