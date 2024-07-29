<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 50%;
      margin: auto;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #333;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    form div {
      margin-bottom: 15px;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
      display: block;
    }

    input[type="text"], input[type="textarea"], select {
      width: 100%;
      padding: 10px;
      margin: 5px 0 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      background-color: red;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .form-title {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="form-title">Book Order</h2>
    <form>
      <div>
        <label>Name</label>
        <input type="text" name="Name" required>
      </div>
      <div>
        <label>Phone</label>
        <input type="text" name="phoneNo" required>
      </div>
      <div>
        <label>Address</label>
        <textarea name="address" required cols="100" rows="5"></textarea>
        
      </div>
      <div>
        <label>Location</label>
        <input type="text" name="location" required>
      </div>
      <div>
        <label>Building Type</label>
        <select id="build-type" name="build-type" required>
          <option value="House">House</option>
          <option value="Apartment">Apartment</option>
          <option value="Office">Office</option>
          <option value="Shop">Shop</option>
          <option value="Warehouse">Warehouse</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div>
        <label>Work Type</label>
        <select id="worktype" requrired>
          <option value="squarefeet">squarefeet</option>
          <option value="Tatch">Tatch</option>
        </select>
      
      </div>
      <div>
        <label>Square Feet</label>
        <input type="text" name="sqfeet" required>
      </div>
      <div>
        <input type="submit" value="Book">
      </div>
    </form>
  </div>
</body>
</html>
