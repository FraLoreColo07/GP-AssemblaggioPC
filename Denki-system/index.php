<html>

<head>
	
    <link rel="stylesheet" href="_css/matrix.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="grandezza">
        <div class="s">
            <div class="modal fade" id="finestra" >
                <div class="modal-dialog">
                        <div class="modal-content bg-dark">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <p class="special">Loading</p>  
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body text-center">
                                <h3>Welcom to Denki System</h3>
                                <p> plese load the system to start navigation</p>
                                <button class="btn btn-secondary mx-auto" onclick="avvia()">Load</button>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <p>Welcome</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <canvas id="canvas"></canvas>
    </div>
        

    <script>
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");


        canvas.height = window.innerHeight;
        canvas.width = window.innerWidth;

        var code = "アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヰヱヲ0123456789";

        code = code.split("");

        var font_size = 15;
        var columns = canvas.width / font_size;

        var drops = [];

        for (var x = 0; x < columns; x++)
            drops[x] = 1;


        function draw() {

            ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            ctx.fillStyle = "#0F0"; //green text
            ctx.font = font_size + "px arial";

            for (var i = 0; i < drops.length; i++) {

                var text = code[Math.floor(Math.random() * code.length)];

                ctx.fillText(text, i * font_size, drops[i] * font_size);


                if (drops[i] * font_size > canvas.height && Math.random() > 0.975)
                    drops[i] = 0;


                drops[i]++;
            }
        }


        setInterval(draw, 33);
    </script>
     <script>
        function avvia() {
			window.open("home.php");          
			close();
        }
    </script>
</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="_script/matrix.js"></script>
</html>