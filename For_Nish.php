<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #fff9e6; /* Set the background color */
        }
        #image-container {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center; /* Center the content horizontally */
        }
        button {
            padding: 15px;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            width: 150px;
            position: relative;
        }
        #yes-button {
            background-color: green;
            color: white;
        }
        #no-button {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <div id="image-container">
        <img id="main-image" src="giphy.gif" alt="Centered Image" width="200" height="200">
        <div id="button-container">
            <button id="yes-button" onclick="showYipie()">Yes</button>
            <button id="no-button" onclick="moveNoButton()">No</button>
        </div>
    </div>

    <script>
        function showYipie() {
            var mainImage = document.getElementById('main-image');
            
            // Change the source of the image to the new GIF
            mainImage.src = 'Yippie.gif';

            // You can also display a message or perform other actions if needed
            document.getElementById('button-container').innerHTML = '<p>YIPIEEEE</p>';
        }

        function moveNoButton() {
            var button = document.getElementById('no-button');

            // Calculate a random position around the center
            var centerOffsetX = Math.floor(Math.random() * 100) - 50;
            var centerOffsetY = Math.floor(Math.random() * 100) - 50;

            // Set the new position using style properties
            button.style.left = centerOffsetX + 'px';
            button.style.top = centerOffsetY + 'px';
        }
    </script>
</body>
</html>



