# bsa_laravel_crud

ТОЧКА ВХОДА В СИСТЕМУ .../library/

Проект был реализован со следующей логикой:
1.) Пользователь может взять несколько книг
2.) Книга может быт только у 1 пользователя (Поэтому промежуточная таблица между пользователями и книгами не создавалась. Хватило 2 таблиц с отношением один ко многим)
3.) Пользователя нельзя удалять до тех пор, пока он не сдал все книги. Поэтому кнопка удаления присутствует только там, где возможно удалить пользователя.
4.) Книгу нельзя удалять, пока ее не сдали в библиотеку. Поэтому кнопка удаления присутствует только там, где возможно удалить книгу.

Кнопка "Info" у пользователя открывает страницу, позволяющую выдавать и возвращать книги пользователем.
