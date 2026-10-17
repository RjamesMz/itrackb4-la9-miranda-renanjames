Part F

F1. Which column did you make nullable, and why that one and not another?
I made the stock column nullable because the medicine's stock quantity might not be recorded yet. The other columns are required because they contain important information about each medicine.

F2. Which step failed first for you, and what did the error say?
The first error I encountered was running "php artisan migrate:status" it was related to the PHP intl extension. The error indicated that the extension was missing or not enabled. I fixed it by enabling the intl extension in the php.ini configuration file and running the command again.

F3. You changed no Blade file in Part D, yet your pages still work. Why not?
The pages still work because Laravel uses the MVC architecture. I only changed how the controller retrieves data from the database using the Medicine model. The Blade views can continue displaying the records without changes as long as the controller provides the rigth data.