<?php include "includes/header.php"?>
<style>
.hover1:hover{
    color: grey;
    border-style: solid;
    border-radius: 5px;
    padding: 1px;
}
   .style a{
       color: grey;
   }
    .active1:active{
        border-style: solid;
        color: #1c7430;
    }
</style>
<nav class="navbar navbar-expand-sm  ">

    <!-- Links -->
    <ul class="navbar-nav style">
        <li class="nav-item hover1 active1">
            <a class="nav-link active" href="#">Link 1</a>
        </li>
        <li class="nav-item hover1">
            <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item hover1">
            <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item hover1">
            <a class="nav-link" href="#">Link 2</a>
        </li>

    </ul>
</nav>