

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

        <style>
            body{ background-color: gray;
            }
            #div{

                    border: 5px;


                }
            #a{
                color: red;
            }
            #h1{
                color: black;
                font-size: medium;
            }
        </style>
    <div id="div">
           <ul>
         <li><a  id="a"href="{{route('site.index')}}">Home</a></li>
          <li><a id="a" href="{{route('site.info')}}">Info</a></li>
          <li><a id="a" href="{{route('site.contatos')}}">Contato</a></li>
          <li><a id="a" href="{{route('site.login')}}">login</a></li>
        </ul>
    </div>

            <h1 id='h1'>Página de logim em construção</h1>
    </body>
    </html>


