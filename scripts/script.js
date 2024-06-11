
        var visiontextbtn = document.getElementById("visiontextbtn");

        visiontextbtn.addEventListener("click", function() {
            var xhr = new XMLHttpRequest();

            var visiontextinput = document.querySelector('#visiontextinput').value;
            
            xhr.open("POST", "scripts/visiontext.php", true);

            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        
            var data = "vision=" + visiontextinput;

            xhr.send(data);

            xhr.onload = function() {
                if (xhr.status == 200) {
                    
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


    
        var visionimagebtn = document.getElementById("visionimagebtn");

        visionimagebtn.addEventListener("click", function() {
            var xhr = new XMLHttpRequest();

            var visionimageinput = document.querySelector('#visionimageinput').value;
            
=            xhr.open("POST", "scripts/visionimage.php", true);

            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        
            var data = "vision=" + visionimageinput;

            xhr.send(data);

            xhr.onload = function() {
                if (xhr.status == 200) {
=                    if(xhr.responseText == 1) {
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
    
    
