<script type="text/javascript">
var detect = document.getElementById("eventdescp").innerHTML;
var repl = detect.replace(/(<p>|.</p>)/igm,  function (a) {
  return "";
});
document.getElementById("eventdescp").innerHTML = repl;
</script>
