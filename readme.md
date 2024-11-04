# Продвинутое программирование на PHP — Laravel
## Домашняя работа №6

В этой практической работе вы создадите форму по добавлению новой книги в книжный каталог. Форма будет создаваться внутри шаблона. Данные из формы будут записываться в соответствующие поля базы данных с помощью модели Eloquent.

### 1. Внутри директории resources/view корневого каталога проекта создайте новый блейд-шаблон с именем form.blade.php.

---
   Пример формы:

![form.blade.php](storage/app/private/img/1_0.png "form.blade.php")

---

В примере выше продемонстрирована простая форма для добавления новой записи о книге. В ней указаны поля с названием книги, именем автора, а также жанр, который можно выбрать из списка. Вы также можете добавить произвольные поля, чтобы сделать данные из формы более комплексными и приближенными к реальности.

---
![form.blade.php](storage/app/private/img/1_1.png "form.blade.php")

---

### 2. Чтобы защитить данные формы от межсайтовой подделки запроса, добавьте внутрь формы CSRF токен. Напомним, сделать этом можно с помощью директивы @csrf или скрытого поля input:

---
![csrf](storage/app/private/img/2_0.png "csrf")

---

![csrf](storage/app/private/img/2_1.png "csrf")

---

### 3. Свяжите данные полей формы с моделью Laravel. Для этого создайте новую модель. Сделать это можно из командной строки с помощью artisan-команды:

---
![model Book](storage/app/private/img/3_0.png "model Book")

Напомним, что флаг -mfsc создаст модель, наполнитель, контроллер и файл миграции.

---
![model Book](storage/app/private/img/3_1.png "model Book")

---

### 4. Чтобы данные из формы корректно записывались в соответствующие поля базы данных, опишите схему базы данных в методе up():

---
![model Book description](storage/app/private/img/4_0.png "model Book description")

---
![model Book description](storage/app/private/img/4_1.png "model Book description")

---

Чтобы в базе данных появились соответствующие поля, не забудьте повторно запустить миграции в базе данных, воспользовавшись соответствующей командой artisan.

---
![model Book description](storage/app/private/img/4_2.png "model Book description")
![model Book description](storage/app/private/img/4_3.png "model Book description")
![model Book description](storage/app/private/img/4_4.png "model Book description")

---

### 5. Внутри файла /routes/web.php опишите новый роут (метод GET), который будет вызывать метод index контроллера BookController по url /index. Также добавьте роут с методом POST, который будет вызывать метод store того же контроллера BookController с url** /store**

---
![routes](storage/app/private/img/5_0.png "routes")

---

### 6. Опишите метод index внутри контроллера BookController. Метод должен возвращать представление формы в браузере.

---
![метод index контроллера BookController](storage/app/private/img/6_0.png "метод index контроллера BookController")
![метод index контроллера BookController](storage/app/private/img/6_1.png "метод index контроллера BookController")

---

### 7. Опишите метод store(). Прежде чем сохранить данные внутри модели, проведите валидацию с помощью метода $request->validate(). Правила для валидации:
   — все поля обязательны к заполнению, без пустых строк и пробелов в качестве единственного значения;
   — максимальное число символов в имени автора — 100, в названии книги — 255;
   — название книги должно быть уникальным значением в моделе Book.

---
![метод store контроллера](storage/app/private/img/7_0.png "метод store контроллера")

---
![метод store контроллера](storage/app/private/img/ "метод store контроллера")

---

### 8. Добавьте обработку ошибок при некорректной валидации.

---
![обработка ошибок](storage/app/private/img/8_0.png "обработка ошибок")

---
![обработка ошибок](storage/app/private/img/8_1.png "обработка ошибок")
![обработка ошибок](storage/app/private/img/8_2.png "обработка ошибок")
![обработка ошибок](storage/app/private/img/8_3.png "обработка ошибок")
![обработка ошибок](storage/app/private/img/8_4.png "обработка ошибок")
![обработка ошибок](storage/app/private/img/8_5.png "обработка ошибок")
![обработка ошибок](storage/app/private/img/8_6.png "обработка ошибок")

---
