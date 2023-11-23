<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color :  antiquewhite; 
            
        }
        section{
            background-color: #FF5757;
            height: 250px;
            border-radius: 10px;
            
        }
        input{
             border: none;
            background-color:  #ffffff00;
            padding: 5vw;
            padding-left: 1vw;
        }
        input::placeholder{
            color: white;
            font-size: 5vw;
            font-weight: 500;
        }
        hr{
            background-color: #ffffffff;
            height: 0.5vw;
            margin-left: 5%;
            margin-right: 5%;
            margin-top: -1%;
            
            
        }
        h1{
            background-color:  #FF914A;
            margin-top: 30%;
            text-align: center;
            color: antiquewhite;
            font-size: 5vw;
            padding: 5%;
            text-transform: uppercase;
            border-radius: 5px;
        }
        div{
            text-align: center;
        }
        svg{
            margin-left: 5%;
        }
        button{
            background-color: white;
            border-radius: 5px;
            font-size: 5vw;
            height: 40px;
            margin: auto;
            text-transform: uppercase;
            border: none;
            color: #FF5757;
            font-weight: 600;
            text-align: center;
        }

    </style>
</head>
<body>
<h1>
            Digiete seu número e E-mail 
        </h1>
    <section>
        <form action="b_processa_esqueceu.php" method="post">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#faebd7}</style><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
        <input type="text" name="nome" placeholder="Nome:">
        <hr>
        <svg xmlns="http://www.w3.org/2000/svg" height="6vw" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
        <input type="email" name="email" placeholder="E-mail:">
        <hr>
        <svg xmlns="http://www.w3.org/2000/svg" height="6vw" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#faebd7}</style><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
        <input type="text" name="telefone" placeholder="WhatsApp:">
        
        <hr>
        <div>
            <button type="submit">Recuperar</button>
        </div>
        

        </form>
        
    </section>

</body>
</html>