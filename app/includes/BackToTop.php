<?php 

namespace App\Controllers;

use App\Core\App;
$costumables = App::get('database')->selectAll("blog_content");
$tables = [
    'costumables' => $costumables,
];

?>

<style>
div {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#backToTop {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: <?=$costumables[0]->headers_colors?>;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 50%;
  box-shadow: 0px 9px 15px rgba(0, 0, 0, 0.4);
}

#backToTop svg{
    width: 20px;
    height: 20px;
}

#backToTop:hover {
  background-color: <?=$costumables[0]->main_color_hover?>;
}
</style>

<div>
<button onclick="topFunction()" id="backToTop" title="Go to top">
<svg fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 330 330" xml:space="preserve">
<path id="XMLID_224_" d="M325.606,229.393l-150.004-150C172.79,76.58,168.974,75,164.996,75c-3.979,0-7.794,1.581-10.607,4.394
	l-149.996,150c-5.858,5.858-5.858,15.355,0,21.213c5.857,5.857,15.355,5.858,21.213,0l139.39-139.393l139.397,139.393
	C307.322,253.536,311.161,255,315,255c3.839,0,7.678-1.464,10.607-4.394C331.464,244.748,331.464,235.251,325.606,229.393z"/>
</svg>

</button>
</div>




