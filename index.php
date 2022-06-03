<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Script</title>
</head>
<body>
    <div class="container" id="span">
        <h1>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque iusto beatae voluptas error asperiores consectetur architecto, minima cum fugiat esse! Eligendi doloremque, adipisci similique minus optio harum! Quaerat ipsum ratione nemo architecto, asperiores, soluta inventore odio eum provident laborum at?
        </h1>
    </div>
</body>
<script>
    console.log("जय श्री गणेश ");
    var string1 = "this";
    var string2 = "is";
    var string3 = "my mmessage";
    var temp = `${string3} is a nice person and \\ he has a channel called `;
    console.log(temp);
    var y = new String("yash");
    console.log(y)
    var len = string1.length;
    console.log(`${len}`);

    document.getElementById('span').innerHTML = '<h2> This is heading</h2>';


</script>
</html>