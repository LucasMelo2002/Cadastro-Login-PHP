<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CRUD </title>
    <link rel="stylesheet" type="text/css" href="style/home.css"/>
</head>
<body>

    <div class="card">
        <div class="titlebar">
            <span class="buttons">
                <button class="minimize">
                        <svg x="0px" y="0px" viewBox="0 0 10.2 1"><rect x="0" y="50%" width="10.2" height="1"></rect></svg>
                    </button>
                <button class="maximize">
                        <svg viewBox="0 0 10 10"><path d="M0,0v10h10V0H0z M9,9H1V1h8V9z"></path></svg>
                    </button>
                <button class="close">
                        <svg viewBox="0 0 10 10"><polygon points="10.2,0.7 9.5,0 5.1,4.4 0.7,0 0,0.7 4.4,5.1 0,9.5 0.7,10.2 5.1,5.8 9.5,10.2 10.2,9.5 5.8,5.1"></polygon></svg>
                    </button>
            </span>
        </div>
        <div class="cppcode">
                <pre id="pre"><code><span class="s1">#include</span> <span class="s2">&lt;iostream&gt;</span>
                <br>using<span class="s3"> CRUD </span>std<span class="sc">;<br><br></span><span class="s3">int</span> <span class="s2">main()</span> <span class="curlies">{</span>

            <span class="s3">int</span> <span class="s4">login</span> <span class="operator">=</span> true <span class="sc">;</span>
            &nbsp;&nbsp;&nbsp;<span class="s3">int</span> <span class="s4">cadastro</span> <span class="operator">=</span> true <span class="sc">;</span>

            <span class="s4">if</span> <span class="s5">(</span> <span class="s1"><span class="s4">login</span> == true </span>) {
               <br><br><span><a href="login.php">Login</a></span> <span class="sc">;</span><br>
            <br>}<span class="s4">else</span> {
                <br><br>&nbsp; &nbsp; &nbsp; &nbsp; <span><a href="formulario.php">Cadastre-se</a></span> 
            <br><br>}
                </code></pre>
        </div>
</div>

</body>
</html>