<button type="button" onclick="loadXMLDoc()">do something</button>
<script>

function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open('POST', 'run.php', true);
  xmlhttp.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
  var jsonString = '{"abc":[{"ID": "349878","Name": "user1"},{"ID": "349878","Name": "user1"},{"ID": "349878","Name": "user1"}]}';


  var obj = JSON.parse(jsonString);
  obj['abc'].push({"teamId":"4","status":"pending"});
  obj = JSON.stringify(obj,null,2);

  
  xmlhttp.send(obj);
}
</script>