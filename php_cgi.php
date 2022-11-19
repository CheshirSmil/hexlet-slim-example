<?php

/**Реализуйте микросайт, со следующими страницами:

/. Содержимое:

<a href="/welcome">welcome</a>
<br>
<a href="/not-found">not-found</a>

/welcome. Содержимое:
<a href="/">main</a>

Все остальные обращения считаются не найденными страницами. На такие запросы должен возвращаться код ответа 404 и содержимое:
Page not found. <a href="/">main</a>

Подсказки
    Используйте массив $_SERVER и его ключ REQUEST_URI
    Нужно выводить содержимое страницы на экран
*/

// BEGIN (write your solution here)
if ($_SERVER['REQUEST_URI'] === '/') {
    echo '<a href="/welcome">welcome</a><br><a href="/not-found">not-found</a>';
} elseif ($_SERVER['REQUEST_URI'] === '/welcome') {
    echo '<a href="/">main</a>';
} else {
    header("HTTP/1.1 404 Not Found");
    echo 'Page not found. <a href="/">main</a>';
}
// END

/**Решение учителя
// BEGIN
$address = $_SERVER['REQUEST_URI'];
switch ($address) {
    case '/':
        echo '<a href="/welcome">welcome</a>';
        echo '<br>';
        echo '<a href="/not-found">not-found</a>';
        break;
    case '/welcome':
        echo '<a href="/">main</a>';
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo 'Page not found. <a href="/">main</a>';
        break;
}
// END
*/