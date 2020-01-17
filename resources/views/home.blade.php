<div class="navbar">


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    *{box-sizing:border-box;}

    body{margin:Auto;
        font-family:arial;}

    .navbar{background:#4B4544;
        color:white;
        overflow:hidden;}

    .navbar a{
        font-size:1.4vw;
        color:black;
        text-decoration:none;
        float:left;
        padding:1% 2%;
        text-align:center;
        transition: all .5s ease;
    }

    .drop{float:left;
        overflow:hidden;
    }

    .drop .drop-btn{
        border:0;
        margin:0;
        font-size:1.1vw;

        background:inherit;
        color:whitesmoke;
        cursor:pointer;
        font-family:inherit;

    }

    .drop-cont{position: absolute;
        background-color: dimgray;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        display:none;
    }

    .drop-cont a{float:none;
        display:block;
        color:white;
        padding:10px;}

    .navbar a:hover, .drop:hover .drop-btn {
        background-color: lightblue;
    }

    .drop:hover .drop-cont{
        display:block;
    }

    .drop-cont a:hover{color:white;}
</style>
<body>

<div class="navbar">

    <div class="drop">
        <button class="drop-btn"> LINK 5 &darr; </button>
        <div class="drop-cont">
            <a href=""> LINK </a>
            <a href=""> LINK </a>
            <a href=""> LINK </a>
        </div>
    </div>



</div>
</body>