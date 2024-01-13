<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            color: #ff0000;
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form id="productForm" action="add_product.php" method="post" onsubmit="return validateForm()">
        <h2>Add Product</h2>
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>

        <div class="error-message" id="error-message"></div>

        <input type="submit" value="Add Product">
    </form>

    <script>
        function validateForm() {
            var productName = document.getElementById('product_name').value;
            var price = document.getElementById('price').value;
            if (productName.trim() === '' || price.trim() === '') {
                document.getElementById('error-message').innerText = 'Please fill in all fields.';
                return false;
            }

            return true;
        }
    </script>
   <?php
    // Assuming you have a database connection established
    $host = "localhost";
    $dbname = "database";
    $username = "root";
    $password = "";

    try {
        $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['product_name']) && isset($_POST['price']) && isset($_POST['description'])) {
            $product_name = $_POST['product_name'];
            $price = $_POST['price'];
            $description = $_POST['description'];

            if (!empty($product_name) && !empty($price)) {
                $sql1 = "SELECT * FROM addproducts WHERE ref = :ref";
                $stmt = $bdd->prepare($sql1);
                $stmt->bindParam(':ref', $product_name);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if (empty($row)) {
                    $sql2 = "INSERT INTO addproducts (ref, cat, nom, prix, marque) VALUES (:ref, :cat, :nom, :prix, :marque)";
                    $stmt = $bdd->prepare($sql2);
                    $stmt->bindParam(':ref', $product_name);
                    $stmt->bindParam(':name', $_POST['name']); 
                    $stmt->bindParam(':price', $_POST['prcie']); 
                    $stmt->bindParam(':prix', $price);
                    $stmt->bindParam(':description', $_POST['description']); 
                    $stmt->execute();
                    echo "<center>The product $product_name is added successfully</center>";
                } else {
                    echo "<center>The product already exists!</center>";
                }
            } else {
                echo "<center>Please fill in all required fields.</center>";
            }
        }
    }
?>


</body>
</html>
