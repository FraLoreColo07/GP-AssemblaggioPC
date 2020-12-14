$(document).ready(function () {

    $(document).keypress(function () {

        $("#finestra").modal("show");
        load();
    });

    function load() {

        var canvas = document.getElementById("dati");
        var ctx = canvas.getContext("2d");

        canvas.height = document.getElementById("fBody").innerHeight;
        canvas.width = document.getElementById("fBody").innerWidth;

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

    }



});