<div class="popup_back"></div>    

    <div class="popup_wrapper"> 
        <div id = "erconts" style = "display: none"></div>
        <div id="close"></div>
        <p class="popup_label">Доставка воды осуществляется бесплатно по Москве и МО. <br>
Минимальное количество бутылей для заказа - 3 штуки.<br>
При первом заказе, с каждой бутыли, необходимо заплатить залог за тару. В случае возврата бутылей, залог за тару возвращается.</p>
        <form class="callback-form" method="post" action="mail.php">
            <?php if (isset($csrf_token)) : ?>
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token, ENT_QUOTES, 'UTF-8'); ?>">
            <?php endif; ?>
            <!-- Honeypot-поле: скрыто от людей, заполняется только ботами -->
            <input type="text" name="website" value="" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0;overflow:hidden;">
            <label for="name">Ваше имя:</label> <br>
            <input name="name" type="text" placeholder="Как к вам обращаться?" id="name" maxlength="100"><br>
            <label for="contacts">Телефон:</label><br>
            <input name="contacts" type="text" placeholder="+7 (000) 000-00-00" id="contacts" maxlength="100"><br>
            <button class="submit" type="submit">Отправить</button>
        </form>
    </div>