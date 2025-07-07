<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR</title>
<body>
    <style>
        
body{ 
    font-family: 'Poppins', sans-serif;
    background:rgb(255, 255, 255);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.error-container {
    display: flex;
    flex-direction: column;
    border-radius: 12px;
    max-width: 350px;
    width: 100%;
    justify-content: center;
    text-align: center;
    align-items: center;
    font-family: 'Poppins', sans-serif;
    animation: fadeIn 0.5s ease;
}

.tente-novamente {
    max-width: 150px;
    width: 100%;
    margin-top: 70px;
    display: flex;
    padding: 12px 20px;
    background-color:rgba(31, 102, 233, 0.98);
    color: #ffffff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 400;
    transition: background-color 0.3s ease, transform 0.2s ease;
    align-items: center;
    
}

.error-container h1 {
    margin-bottom: 70px;
    font-size: 1rem;
    color:rgb(0, 0, 0);
    margin-bottom: 25px;
    font-weight: 600;
}


.error-container a:hover {
    background-color: #46a5d8;
    transform: translateY(-2px);
}

.error-container a:active {
    transform: translateY(0);
}
    </style>
    <div class="error-container">
        <img width="120" height="120" src="https://img.icons8.com/arcade/100/cloud-cross.png" alt="cloud-cross"/>
        <h1>Dados inválidos</h1>
        <p>Os dados fornecidos não atendem aos critérios necessários. Verifique as informações e tente novamente. <a  class="tente-novamente"href="login.php"> <img  width="24" height="24" src="https://img.icons8.com/ios/FFFFFF/24/update-left-rotation.png" alt="update-left-rotation"/>Tente novamente</a></p>
    </div>
</body>
</html>
