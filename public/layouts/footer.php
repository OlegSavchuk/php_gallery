    </div>
    <div id="footer">Copyright <?php echo date("Y", time()); ?>, Oleg Savchuk</div>
  </body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>