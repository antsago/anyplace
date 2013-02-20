<!DOCTYPE HTML>
<html>
    <head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("select#city").attr("disabled","disabled");
            $("select#country").change(function(){
            $("select#city").attr("disabled","disabled");
            $("select#city").html("<option>wait...</option>");
            var id = $("select#country option:selected").attr('value');
            $.post("select_city.php", {id:id}, function(data){
                $("select#city").removeAttr("disabled");
                $("select#city").html(data);
            });
        });
        $("form#select_form").submit(function(){
            var country = $("select#country option:selected").attr('value');
            var city = $("select#city option:selected").attr('value');
            if(country>0 && city>0)
            {
                var result = $("select#city option:selected").html();
                $("#result").html('your choice: '+result);
            }
            else
            {
                $("#result").html("you must choose two options!");
            }
            return false;
        });
    });
    </script>
    </head>
    <body>
        <?php include "SelectCity.class.php"; ?>
        <form id="select_form">
            Choose a Country:<br />
            <select id="country">
                <?php echo $opt->ShowCountry(); ?>
            </select>
        <br /><br />
        Choose a City:<br />
        <select id="city">
             <option value="0">choose...</option>
        </select>
        <br /><br />
        <input type="submit" value="confirm" />
        </form>
        <div id="result"></div>
    </body>
</html>

