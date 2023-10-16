<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <style>
        /* */
        * {
            font-size: 1em;
            font-family: Verdana;
        }
        .mt {
            margin-top: 20px;
        }
        .title {
            display:block;
            width:100%;
            background: #8b6fbf;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        .title h2 {
            font-size: 1.4em;
            margin: 0;
        }
        .disclaimer {
            margin-top: 70px;
            border-top: 1px solid #6435bb;
            text-align: center;
        }
        .disclaimer > p > i {
            color: #ccc;
            font-size: 0.8em;
        }
        pre {
            padding-left: 50px;
            border-left: 1px solid #ccc;
            word-wrap: break-word;
            word-break: break-all;
        }
    </style>
</head>
<body>
    <div class="title">
        <img src="{{ asset('img/ucc-logo.png') }}" alt="UCC Cali" width="100px">
        <h2 class="">Unión de Ciudadanas <br />de Colombia - Seccional Cali</h2>
    </div>
    <br />
    <p>Hola...</p>
    <p>Se ha producido un contacto desde el sitio web UCC Seccional Cali.</p>
    <p>Por favor ponte en contacto con el interesado en el menor tiempo posible</p>
    <div class="mt">
        <p><b>Nombre:</b> {{ $data['name'] }}</p>
        <p><b>Email:</b> {{ $data['email'] }}</p>
        <p><b>Asunto:</b> {{ $data['subject'] }}</p>
        <p><b>Mensaje:</b></p>
        <pre>
            {{ $data['message'] }}
        </pre>
    </div>
    <div class="disclaimer">
        <p>
            <i>Copyright © 2023 UCC- Seccional Cali.</i><br/>
            <i>Por favor no reenvíes ni compartas este correo electrónico, ya que está destinado únicamente para ti.</i>
        </p>
    </div>
</body>
</html>