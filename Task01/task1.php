<?php
echo 'Вариант 3
Написать консольный вариант для игры "Виселица" (согласно общей спецификации) с сохранением информации о партиях в базе данных SQLite.

* * *

Псевдографика для игры:
```
+---+    +---+    +---+    +---+    +---+    +---+    +---+
    |    0   |    0   |    0   |    0   |    0   |    0   |
    |        |    |   |   /|   |   /|\  |   /|\  |   /|\  |
    |        |        |        |        |   /    |   / \  |
   ===      ===      ===      ===      ===      ===      ===
```

* Режим работы приложения должны определяться при запуске по аргументам командной строки:
    * `--new`. Новая игра. Этот же режим используется по умолчанию, если программа запускается без параметров.
    * `--list`. Вывод списка всех сохраненных игр.
    * `--replay id`. Повтор игры с идентификатором id.
    * `--help`. Вывод краткой информации о приложении и доступных ключах для запуска в разных режимах.'
?>