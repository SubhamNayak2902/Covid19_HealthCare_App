<!DOCTYPE html>
<html>
<head>
<script>
function showHint(str) {
if (str.length == 0) {
document.getElementById("txtHint").innerHTML = "11.php";
return;
} else {
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("txtHint").innerHTML = this.response
Text;
}
}
xmlhttp.open("GET", "11.php?q="+str, true);
xmlhttp.send();
}
}
</script>
</head>
<body>