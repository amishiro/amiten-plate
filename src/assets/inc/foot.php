</div>
<script src="assets/js/vendor.bundle.js"></script>
<script src="assets/js/components.bundle.js"></script>
<?php
if (isset($addScripts)) {
  foreach ($addScripts as $script){
    echo $script;
    echo PHP_EOL;
  };
}
?>
</body>

</html>
