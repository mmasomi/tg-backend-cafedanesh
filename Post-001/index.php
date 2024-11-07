<!DOCTYPE html>
<html dir="rtl" lang="fa">
<body style="font-family: 'B Nazanin', sans-serif; padding: 20px 16px; font-size: 18px; ">
<?php

echo "این دستور در هر اجرای اسکریپت اجرا میشود." . "<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "درخواست ارسالی از طریق POST است." . "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "درخواست ارسالی از طریق GET است." . "<br>";
}

?>

<form id="methodForm" action="index.php" method="POST">
    <input type="hidden" id="methodInput" name="_method" value="POST">
    <label for="method">انتخاب روش:</label>
    <select id="method" name="_method" onchange="updateFormMethod()">
        <option value="POST">POST</option>
        <option value="GET">GET</option>
    </select>
    <input type="hidden" name="method" id="formMethod" value="POST">
    <button type="submit">ارسال</button>
</form>

<script>
    function updateFormMethod() {
        var method = document.getElementById("method").value;
        document.getElementById("formMethod").value = method;
        if (method === "GET")
        {
            document.getElementById("methodForm").method = "GET";
        }
        if (method === "POST"){
            document.getElementById("methodForm").method = "POST";
        }
    }
</script>
<style>
    form {
        margin: 20px auto;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        max-width: 1280px;
    }

    label {
        margin-bottom: 10px;

    }
    select {
        padding: 5px;
        margin-bottom: 10px;
    }

    button {
        padding: 5px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-family: "B Nazanin", sans-serif;
    }

</style>
</body>
</html>



