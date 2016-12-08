<script src="<?php echo base_url();?>assets/src/components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/src/components/foundation-datepicker/js/foundation-datepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/src/js/smap.js" async defer></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/pagination/jquery.tablesorter.js" async defer></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/pagination/addons/pager/jquery.tablesorter.pager.js" async defer></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/pagination/js/chili/chili-1.8b.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/pagination/js/docs.js"></script>
<script type="text/javascript">
$(function() {
  $("table")
  .tablesorter({widgets: ['zebra']})
  .tablesorterPager({container: $("#pager")});
});
</script>
</body>
</html>
