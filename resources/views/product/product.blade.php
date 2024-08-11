<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Example</title>
    <style>
 
body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f4f4f4;
    display: flex;
    flex-wrap: wrap;
}

.card {
    width: 300px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    transition: box-shadow 0.3s ease;
    margin-left: 20px;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
}

.card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.card-img {
    width: 100%;
    height: auto;
    display: block;
}

.card-content {
    padding: 16px;
}

.card-title {
    font-size: 1.5em;
    margin: 0 0 8px;
}

.card-description {
    font-size: 1em;
    margin: 0 0 16px;
    color: #555;
}

.card-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    text-align: center;
    font-size: 1em;
    transition: background-color 0.3s ease;
    display: flex;
    justify-content:center;
    
}

.card-button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Card Image" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Card Title</h2>
            <p class="card-description">This is a description of the card. It gives more information about the content of the card.</p>
            <a href="#" class="card-button">Read More</a>
        </div>
    </div>
    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Card Image" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Card Title</h2>
            <p class="card-description">This is a description of the card. It gives more information about the content of the card.</p>
            <a href="#" class="card-button">Read More</a>
        </div>
    </div>
    
     <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Card Image" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Card Title</h2>
            <p class="card-description">This is a description of the card. It gives more information about the content of the card.</p>
            <a href="#" class="card-button">Read More</a>
        </div>
    </div>

     <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Card Image" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Card Title</h2>
            <p class="card-description">This is a description of the card. It gives more information about the content of the card.</p>
            <a href="#" class="card-button">Read More</a>
        </div>
    </div>


    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Card Image" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Card Title</h2>
            <p class="card-description">This is a description of the card. It gives more information about the content of the card.</p>
            <a href="#" class="card-button">Read More</a>
        </div>
    </div>

    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Card Image" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Card Title</h2>
            <p class="card-description">This is a description of the card. It gives more information about the content of the card.</p>
            <a href="#" class="card-button">Read More</a>
        </div>
    </div>


    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Card Image" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Card Title</h2>
            <p class="card-description">This is a description of the card. It gives more information about the content of the card.</p>
            <a href="#" class="card-button">Read More</a>
        </div>
    </div>
    
    

</body>
</html>