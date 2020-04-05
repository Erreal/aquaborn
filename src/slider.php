<?php 
$file_csv = "coolers/coolers.csv";
$output = "<div class=\"slider\">
                <div class=\"owl-carousel\">";
//Тут типа код
if (file_exists($file_csv)) {
    $handle = fopen($file_csv, "r");
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        
    }
    fclose($handle);
}
echo "<pre>".print_r($csv)."</pre>";
$output .= "</div>
            </div>";

echo $output;
?>


    
       <!-- <div class="slider-item"> 
            <img src="/coolers/images/1.png" alt="">
            <a href="#" class="button" target="_blank">Заказать</a>
        </div>-->
   