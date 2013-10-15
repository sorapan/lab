<!DOCTYPE html>
    <html>
<head>
    <title>hello...</title>

    <script src="../jquery/jquery.js"></script>
    <script>

        $(function(){


            cycle();

            function cycle(){

                $.ajax({
                    type: 'GET',
                    url: 'run.php',
                    async: true,
                    cache : false,
                    success: function(data){

                        $(" div#result1").append(data);
                        cycle();

                    }
                });

            }



        });

    </script>

</head>
<body>

<label for="ip1">>>></label>
<input type="text" id="ip1">
<button id="sm">Enter</button>


<div id="result1">

</div>
</body>
    </html>