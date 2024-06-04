
        var visiontextbtn = document.getElementById("visiontextbtn");

        // Добавляем обработчик события клика на кнопку
        visiontextbtn.addEventListener("click", function() {
            // Создаем новый экземпляр объекта XMLHttpRequest
            var xhr = new XMLHttpRequest();

            var visiontextinput = document.querySelector('#visiontextinput').value;
            
            // Устанавливаем путь к серверному скрипту
            xhr.open("POST", "scripts/visiontext.php", true);

            // Устанавливаем заголовок Content-Type для отправки данных формы
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            //var userId = document.getElementById('userid').value;
            // Определяем действие для выполнения на сервере
            var data = "vision=" + visiontextinput;

            // Отправляем запрос на сервер
            xhr.send(data);

            // Обработчик события загрузки данных
            xhr.onload = function() {
                if (xhr.status == 200) {
                    // Отображаем результат на странице
                    
                    if(xhr.responseText == 1) {
                        document.getElementById("result").innerHTML = `
                        <img src="images/decorative/not-prohibited-content.png" alt="">
                        <p>Неприпустимого контенту не виявлено!</p>
                        `;
                    } else if (xhr.responseText == 0) {
                        
                        document.getElementById("result").innerHTML = `
                        <img src="images/decorative/prohibited-content.png" alt="">
                        <p>Присутній неприпустимий контент!</p>
                        `;
                    } else {
                        document.getElementById("result").innerHTML = xhr.responseText;
                    }
                }
            };
        });


    
         // Получаем ссылку на кнопку "Show All Users"
        var visionimagebtn = document.getElementById("visionimagebtn");

        // Добавляем обработчик события клика на кнопку
        visionimagebtn.addEventListener("click", function() {
            // Создаем новый экземпляр объекта XMLHttpRequest
            var xhr = new XMLHttpRequest();

            var visionimageinput = document.querySelector('#visionimageinput').value;
            
            // Устанавливаем путь к серверному скрипту
            xhr.open("POST", "scripts/visionimage.php", true);

            // Устанавливаем заголовок Content-Type для отправки данных формы
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            //var userId = document.getElementById('userid').value;
            // Определяем действие для выполнения на сервере
            var data = "vision=" + visionimageinput;

            // Отправляем запрос на сервер
            xhr.send(data);

            // Обработчик события загрузки данных
            xhr.onload = function() {
                if (xhr.status == 200) {
                    // Отображаем результат на странице
                    if(xhr.responseText == 1) {
                        document.getElementById("result").innerHTML = `
                        <img src="images/decorative/not-prohibited-content.png" alt="">
                        <p>Неприпустимого контенту не виявлено!</p>
                        `;
                    } else if (xhr.responseText == 0) {
                        
                        document.getElementById("result").innerHTML = `
                        <img src="images/decorative/prohibited-content.png" alt="">
                        <p>Присутній неприпустимий контент!</p>
                        `;
                    } else {
                        document.getElementById("result").innerHTML = xhr.responseText;
                    }
                }
            };
        });
    
    