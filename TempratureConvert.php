<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>

* {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
           background-color: #0f206b;
          box-shadow: 1px 1px 20px #012290f7, 1px 1px 10px #0053b0f7;
        }

        .form {
            width: 300px;
            height: 300px;
            border-radius: 20px;
            border: 2px solid black;
            background-color: greenyellow;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            flex-direction: column;
        }

        .content {
            color: #555534;
            text-shadow : 0px 0px 1px  #555534, 0px 0px 1px  #555534, 0px 0px 1px  #555534,  0px 0px 1px  #555534;
            font-size: 25px;
            font-weight: 600;
        }
        select {
        width: 100%;
        padding: 10px;
        border: 2px solid #555557;
        border-radius: 5px;
        background-color: #555534;
        color : white;
        font-size: 16px;
    }

    /* Style the dropdown arrow (you may need to adjust the path to the arrow image) */
    select::-ms-expand {
        display: none;
    }

    select::after {
        content: '▼';
        font-size: 16px;
        color: #333;
        position: absolute;
        background-color: #555557;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
    }

        .container form input,
  form textarea {
    border: none;
    outline: none;
    width: 100%;
    padding: 8px;
    background: #555557;
    color: #000;
    font-size: 1rem;
    font-weight: 400;
    margin-bottom: 0.5rem;
    border-radius: 0.5rem;
  }
        .select-style {
            margin-bottom: 20px;
        }

        p {
            font-size : 20px;
            font-weight : 600;
            text-align : center ;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="form">
            <div class="content">PHP TEMP CONVERTER</div>
            <form method="POST">
                <div class="app-form-group">
                    <input type="text" class="app-form-control" placeholder="Enter here" name="num1">
         </div>
                <div class="select-style">
                    <select name="operation">
                        <option value="F">Celsius to Fahrenheit</option>
                        <option value="C">Fahrenheit to Celsius</option>
                    </select>
                </div>
                <div>
                    <input type="submit" value="submit" name="submit" class="app-form-button">
                </div>
            </form>

            <div class="app-form-group showdata">
                <p>
                    <?php
                    if(isset($_POST['submit'])) {
                        $num1 = $_POST['num1'];
                        $operation = $_POST['operation'];
                        $fah= $num1*(9/5) + 32;
                        $cel=($num1-32)*(5/9);
                        
                            if($operation == "F") {
                                echo 'Celsius to Fahrenheit is '.$fah.'';
                            }
                            else {
                                echo 'Fahrenheit to Celsius is '.$cel.'';
                            }
                        }   
                    ?>
                </p>
            </div>
    
</body>
</html>