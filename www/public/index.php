<!doctype html>
<html>
<head lang="sv"></head>
<body>
<h1>Matematik-test</h1>
<form action="resultat.php" method="post">
    <fieldset>
        <legend>Namn</legend>
        <input type="text" name="n1">
    </fieldset> 
<form>
<form action="resultat.php" method="post">
   <fieldset>
       <legend>Frågor</legend>
       <label>4 + 5 = </label>
       <input type="number" name="q1">
       <br>
       <label>3 x 5 = </label>
       <input type="number" name="q2">
       <br>
       <label> 8 * 3 = </label>
       <input type="number" name="q3">
       <br>
       <label> 164 / 4 = </label>
       <input type="number" name="q4">
       <br>
        <label> 128 * 5 = </label>
        <input type="number" name="q5">
        <br>
        <label> 5 - 4 = </label>
        <input type="text" name="q6">
       <input type="submit" value="Rätta">
   </fieldset>
</form>
</body>
</html>