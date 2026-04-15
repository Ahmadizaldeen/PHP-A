<?php

function getColors() {
    return [
        "red",
        "green",
        "blue",
        "yellow",
        "orange",
        "purple",
        "pink",
        "brown",
        "gray",
        "black",
        "white",
        "cyan",
        "magenta",
        "lime",
        "teal",
        "navy",
        "maroon",
        "olive",
        "silver",
        "gold"
    ];
}
function getRandomColor() {
    $colors = getColors();
    return $colors[array_rand(getColors())];
}
function getColorByIndex($index) {
    $colors = getColors();
    return $colors[$index] ?? "black";
	
}

/*function getNColor($n=1){
	if ($n==1)	return getColorByIndex(rand(0,1);
	else if($n>count(getColors())) return getColorByIndex(rand(0,n);
	else return return getColorByIndex(rand(0,count(getColors));
}*/
function getColorsInfo(){
	print("Function in color.php:<br>");
	print("1. getColors() 			   => return Colors Array.<br>");
	print("2. getColorByIndex(int index) => return one color an index. <br>");
	print("3. getRandomColor() 		   =>Array random color. <br>");
}
?>