

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <img src="play.png" id="image" alt="Play/Pause" onclick="toggleImage()" style="cursor: pointer;">
    <script>
        function toggleImage() {
            let img = document.getElementById('image');
            
            if (img.src.includes('play.png')) {
                img.src = 'pause.png';
            } else {
                img.src = 'play.png';
            }
        }
    </script>

    <script>
    //     function sum(num1, num2){
    //         return num1 + num2;
    // }

    // document.write(sum(5,10));

    function Jino(){
        let name = document.getElementById("name").value;
        document.getElementById("content").innerHTML = "<h1>Hello " + name + "</h1>";
        setTimeout(() => {
            alert("Burgir");
        }, 500);
    }

    </script>   


    <p id="content">What is your name?</p
    >
    <input type="text" id="name" placeholder="Enter your Name">
    <button onclick="Jino()">Submit</button>

   

</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="play.png" id="image" alt="">
    <h1>This is Header 1</h1>
    <button onclick="document.getElementById('image').src='play.png'">Play</button>
    <button onclick="document.getElementById('image').src='pause.png'">Pause</button>
</body>
</html> -->