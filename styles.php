<style>
    :root {
        color-scheme: dark;
    }

    body {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    main {
        max-width: 800px;
        background-color:rgb(26, 26, 26);
        margin: 0 auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(151, 151, 151, 0.56);
    }

    h1{
        text-align: center;
        color: white;
        font-size: 2.5em;
        margin-bottom: 20px;
        padding: 10px;
    }

    .album {
        display: flex;
        align-items: center;
        margin: 15px 0px;
        padding: 15px;
        border: 1px solid rgb(110, 110, 110);
        border-radius: 10px;
        background-color:rgb(36, 36, 36);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .album:hover {
        transform: translateY(-5px) translateX(2px);
        box-shadow: 2px 4px 10px rgba(253, 253, 253, 0.77);
    }

    .album img {
        width: 100px;
        height: 100px;
        border-radius: 8px;
        margin-right: 20px;
    }

    .album-info {
        flex: 1; /* Ocupa el espacio restante*/
    }

    .album-info h2 {
        color: white;
        font-size: 1.5em;
        margin: 0;
    }

    .album-info h3 {
        color:rgb(192, 192, 192);
        font-size: 1.2em;
        margin: 5px 0;
    }

    .album-info p {
        margin: 5px 0;
        color:rgb(158, 158, 158);
    }

    .album-links {
        display: flex;
        gap: 15px;
        margin-top: 10px;
    }

    .album-links a {
        text-decoration: none;
        color: white;
        font-weight: bold;
        display: flex;
        gap: 5px;
        align-items: center;
    }

    .album-links a:hover {
        text-decoration: underline;
    }

    .album-links a i {
        font-size: 1.2em;
    }

    form {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        height: 30px;
    }

    label {
        font-size: 1.1m;
        padding: 4px 8px;
        font-weight: bold;
        background-color:rgb(0, 41, 68);
        border-radius: 10px;
        border: 2px solid white;
        
    }

    select {
        padding: 5px;
        font-size: 1em;
        background-color:rgb(0, 41, 68);
        border-radius: 10px;
        border: 2px solid white;
        font-weight: bold;
    }

   button {
        background-color:rgb(0, 41, 68);
        padding: 4px 8px;
        border-radius: 10px;
        font-weight: bold;
        cursor: pointer;
    }

    select:hover, button:hover {
        background-color: rgb(4, 77, 126);
    }
/* 
    form {
        margin: 20px;
        padding: 10px;
        background-color:rgb(27, 27, 27);
        border-radius: 5px;
    }
    label {
        font-weight: bold;
    }
    select, button {
        padding: 5px;
        margin: 5px;
    }
    button {
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
*/
</style>