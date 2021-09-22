<html>
    <head>

    </head>
    <body>
        
   
    <input type="number" name="input" id="input">

    <br>
    <span id="error" style="color: red; font-weight: bold;"></span>

    <br><br>
    <button onclick="segitiga();">Generate Segitiga</button>
    <button onclick="ganjil();">Generate Bilangan Ganjil</button>
    <button onclick="prima();">Generate Bilangan Prima</button>

    <br>
    <h1 >Result : </h1>
    <p id="result"></p>

   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        function clearError(){
            $('#error').html('');
        }

        function segitiga(){
            
            var input = $('input').val();
            if(input == 0 || input == ''){
                $('#error').html('Mohon lengkapi data');
            }else{
                clearError();

                var data = {'input': input}

                $.post('/segitiga.php', data, function(result){

                    var result = JSON.parse(result);

                    if(result.success){
                        $('#result').html(result.result);
                    }else{
                        $('#error').html(result.message);
                    }

                });
            }
        }

        function ganjil(){
            var input = $('input').val();

            if(input == 0 || input == ''){
                $('#error').html('Mohon lengkapi data');
            }else{
                clearError();

                var data = {'input': input}

                $.post('/ganjil.php', data, function(result){
                    var result = JSON.parse(result);

                    if(result.success){
                        $('#result').html(result.result);
                    }else{
                        $('#error').html(result.message);
                    }
                });
            }
        }

        function prima(){
            var input = $('input').val();

            if(input == 0 || input == ''){
                $('#error').html('Mohon lengkapi data');
            }else{
                clearError();

                var data = {'input': input}

                $.post('/prima.php', data, function(result){
                    var result = JSON.parse(result);

                    if(result.success){
                        $('#result').html(result.result);
                    }else{
                        $('#error').html(result.message);
                    }
                });
            }
        }


    </script>
    </body>
</html>