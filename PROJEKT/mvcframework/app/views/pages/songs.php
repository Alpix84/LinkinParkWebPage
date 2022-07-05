<?php
    require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
        require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<script src='<?php echo URLROOT ?> /public/js/kedvencek.js'></script>

    <style type="text/css">
        body{
            overflow: hidden;
        }
        #center{
            text-align: center;
        }

        #d1{
            float:left;
            width: auto;
            height: auto;
            flex-basis: 100%;
            position: relative;
            padding: 20px;
            margin: 10px;
            box-sizing: border-box;
        }
        #d2{
            float: right;
            width: auto;
            height: auto;
            flex-basis: 100%;
            position: relative;
            padding: 20px;
            margin: 10px;
            align-self: center;
        }
        
        #myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}

    </style>

</head>
<body>
        <div id="d1" class="center">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Zeneszámok keresése...">
            <h5>Linkin park zenék:</h5>
            <ul id="myUL">
                <li><a href="https://www.youtube.com/watch?v=Tm8LGxTLtQk" target="blank">One More Light</a></li>
                <li><a href="https://www.youtube.com/watch?v=NjdgcHdzvac" target="blank">Lying From You</a></li>
                <li><a href="https://www.youtube.com/watch?v=Gd9OhYroLN0" target="blank">Crawling</a></li>
                <li><a href="#">Somewhere I Belong</a></li>
                <li><a href="#">Pushing Me Away</a></li>
                <li><a href="#">Cure for the Itch</a></li>
                <li><a href="#">A Light That Never Comes</a></li>
                <li><a href="#">Guilty All The Same</a></li>
                <li><a href="#">Waiting For The End</a></li>
                <li><a href="#">Forgotten</a></li>
                <li><a href="#">Out Of Time</a></li>
                <li><a href="#">Points of Authority</a></li>
                <li><a href="#">Burn It Down</a></li>
                <li><a href="#">In the End</a></li>
                <li><a href="#">Numb</a></li>
                <li><a href="#">Bleed It Out</a></li>
                <li><a href="#">What I've Done</a></li>
                <li><a href="#">Given Up</a></li>
                <li><a href="#">New Divide</a></li>
                <li><a href="#">Breaking The Habit</a></li>
                <li><a href="#">Place for My Head</a></li>
                <li><a href="#">The Catalyst</a></li>
                <li><a href="#">Papercut</a></li>
                <li><a href="https://www.youtube.com/watch?v=4qlCC1GOwFw" target="blank">One Step Closer</a></li>
                <li><a href="#">Shadow Of The Day</a></li>
                <li><a href="#">Lost In The Echo</a></li>
                <li><a href="#">With You</a></li>
                <li><a href="#">Runaway</a></li>
                <li><a href="#">Faint</a></li>
                <li><a href="#">By Myself</a></li>
            </ul>
        </div>
        
        <div id="d2">
            <img src="<?php echo URLROOT; ?>/public/img/LP.jpg">
        </div>
    </div>