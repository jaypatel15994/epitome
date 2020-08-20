

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/upload" method="POST" enctype="multipart/form-data">
        
       
        name : <input type="text" name="name" value="Cool Clothing with Brown Strips" />
        price : <input type="text" name="price" value="3.99" />
        desc: <input type="text" name="desc" value="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s." />
        @csrf
        <input type="text" name="seller_id" value="1"/>
        <input type="file" name="image" />
        <input type="submit" value="Upload" />
    </form>
</body>
</html>