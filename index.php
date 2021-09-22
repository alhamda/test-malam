<html>
    <head>

    </head>
    <body>
        
   
    <input type="number" name="input" id="input">

    <br>
    <span id="error" style="color: red; font-weight: bold;"></span>

    <br><br>
    <button onclick="check('segitiga');">Generate Segitiga</button>
    <button onclick="check('ganjil');">Generate Bilangan Ganjil</button>
    <button onclick="check('prima');">Generate Bilangan Prima</button>

    <br>
    <h1 >Result : </h1>
    <p id="result"></p>

   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        function clearError(){
            $('#error').html('');
        }

        function check(type){

            var input = $('input').val();
            if(input == 0 || input == ''){
                $('#error').html('Mohon lengkapi data');
            }

            clearError();
            var data = {'input': input}
            var url = '';

            if(type=='segitiga'){
                url = '/segitiga.php';
            }else if(type=='ganjil'){
                url = '/ganjil.php';
            }else{
                url = '/prima.php';
            }

            $.post(url, data, function(result){

                var result = JSON.parse(result);

                if(result.success){
                    $('#result').html(result.result);
                }else{
                    $('#error').html(result.message);
                }

            });

        }

    </script>
    </body>
</html>