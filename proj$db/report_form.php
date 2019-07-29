<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
<h3> Complaint Report Form</h3>
<div class="container">
  <form method="post">
    <label for="fname">Full Names</label>
    <input type="text" id="fname" name="fullnames" placeholder="Your full names..">

    <label for="house_no">House number</label>
    <input type="text" id="house_no" name="house_no" placeholder="Your house number..">

    <label for="problem">Choose where problem is</label>
    <select id="problem" name="problem">
      <option value="livingroom">Living Room</option>
      <option value="bedroom">Bedroom</option>
      <option value="bathroom">Bathroom</option>
      <option value="other">Other</option>
    </select>
    
    <label for="urgency">How urgent is it</label>
    <select id="urgency" name="urgency">
    <option value="immediate">Immediate</option>
    <option value="soon">Soon </option>
    <option value="not_urgent">Not Urgent</option>
      </select>
    <label for="message">Message to manager</label>
    <textarea id="subject" name="subject" placeholder="Describe the message but remember to be nice.." style="height:200px"></textarea>

    <input type="submit" name='submit' value="Submit">
  </form>
    <?php
    if(isset($_POST['submit'])){
    $sql = "INSERT INTO reports (reportID,tenantID,houseID,category,importance,msg)
VALUES ('NULL',)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    }
?>
</div>

</body>
</html>
