<!DOCTYPE html>
<html lang="en">
<head>
<style>

.tx
{

width: 400px;
height: 400px;

}




</style>


    <title>Document</title>
    <script>

        function abc()
        {

        var a=document.getElementById('txt').value;
        var b=document.getElementById('ans').innerHTML=a;


        }


    </script>



</head>
<body>
    
<input type="text" id="txt" class="tx" />
<input type="button" value="Run" onclick="abc()" />

<div id="ans">



</div>



</body>
</html>