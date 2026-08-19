<?php 
// Файл прочитан из src/slider.php (подключается из index.php, поэтому пути указаны от корня сайта).
$file_csv = "coolers/coolers.csv";

$output = "<div class=\"slider\">
                <div class=\"owl-carousel\">";

if (file_exists($file_csv)) {
    $handle = fopen($file_csv, "r");
    if ($handle !== false) {
        while (($data = fgetcsv($handle, 1000, ";")) !== false) {
            // Значения из CSV считаются ненадёжными: экранируем перед выводом в HTML
            $img = isset($data[0]) ? trim($data[0]) : '';
            $alt = isset($data[1]) ? trim($data[1]) : '';
            $url = isset($data[2]) ? trim($data[2]) : '#';

            $safeImg = htmlspecialchars($img, ENT_QUOTES, 'UTF-8');
            $safeAlt = htmlspecialchars($alt, ENT_QUOTES, 'UTF-8');
            $safeUrl = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');

            $output .= "<div class=\"slider-item\">
                            <img src=\"/coolers/images/" . $safeImg . ".jpg\" alt=\"" . $safeAlt . "\">
                            <a href=\"" . $safeUrl . "\" class=\"button\" target=\"_blank\" rel=\"noopener noreferrer\">Заказать</a>
                        </div>";
        }
        fclose($handle);
    }
}

$output .= "</div>
            </div>";

echo $output;
?>