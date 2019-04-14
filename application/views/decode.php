<body onload="load(); setimg();">
<div class="container">
    <div class="row">
        <h2 align="center">Decode QRCode</h2>
        <hr>
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Browse QR image:</h3>
            </div>
            <div class="panel-body">
              <input type="file" onchange="handleFiles(this.files)">
            </div>
          </div>
        </div>
        <br>
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Decoded Informaton:</h3>
            </div>
            <div class="panel-body">
              <canvas id="qr-canvas"></canvas>
              <div id="result"></div>
            </div>
          </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url(JQUERY); ?>"></script>
<script type="text/javascript" src="<?php echo base_url(BOOTSTRAP_JS); ?>"></script>

<!-- 
    include these jQuyery pluging
    to decode the uploded qr code.
 -->
<script type="text/javascript" src="<?php echo base_url('assets/js/webqr.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/llqrcode.js'); ?>"></script> 
<script type="text/javascript">
  $(document).ready(function() {
load();
setimg();            
});
</script>

</body>
</html> 

