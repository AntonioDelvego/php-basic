<?php
$a = 5;
$b = '05';
var_dump($a == $b);         // Почему true?
var_dump((int)'012345');     // Почему 12345?
var_dump((float)123.0 === (int)123.0); // Почему false?
var_dump((int)0 === (int)'hello, world'); // Почему true?

echo "<div>
    <h4>Пояснения к результатам</h4>
    <h5>Первое выражение - var_dump(\$a == \$b) возвращает true</h5>
    <p>Т.к. в переменных записаны значения разных типов, то при операции сравнения будет выполнено неявное приведение типов. В этом случае оба значения будут приведены к типу \"int\". При приведении строкового значения '05' к числу ведущий ноль будет отброшен. Соответственно при нестрогом сравнении выражение вернет true, т.к. значения переменных одинаковое, а их типы не проверяются</p>
    <h5>Второе выражение - var_dump((int)'012345') возвращает 12345</h5>
    <p>При приведении строкового значения к числу типа int ведущий ноль будет отброшен.</p>
    <h5>Третье выражение - var_dump((float)123.0 === (int)123.0) возвращает false</h5>
    <p>Здесь применен оператор строгого сравнения. Выражнеие верне false, т.к. у сравниваемых значений разный тип (одно int, а другое float). Строгое сравнение вернет true только в том случае, если и значения, и типы операндов будут одинаковые.</p>
    <h5>Четвертое выражение - var_dump((int)0 === (int)'hello, world') возвращает true</h5>
    <p>Строка не содержащая цифр при приведении к числу примет значение 0. И соответственно в этом примере будут равны и значения, и типы операндов. Строгое сравнение вернет true.</p>
</div>"
?>
