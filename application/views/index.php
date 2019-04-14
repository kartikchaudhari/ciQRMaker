<body>
<div class="container">
    <div class="row">
        <h2 align="center">QR Code Generator with Codeigniter</h2>
        <hr>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Fill out the Required information</h3>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <label class="control-label">Code Content : </label>
                            <input class="form-control" id="content" type="text" required="required">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Code Level (ECC) : </label>
                            <select class="form-control" id="ecc">
                              <option value="H">H - best</option>
                              <option value="M">M</option>
                              <option value="Q">Q</option>
                              <option value="L">L - smallest</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Size : </label>
                            <input type="number" min="1" max="10" step="1" class="form-control" id="size" value="5">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary" onclick="sendQrData();">Generate QR Code</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">QR Image</h3>
                </div>
                <div class="panel-body">
                    <div class="showQRCode"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url(JQUERY); ?>"></script>
<script type="text/javascript" src="<?php echo base_url(BOOTSTRAP_JS); ?>"></script>
<script type="text/javascript">
  function sendQrData(){
    $.ajax({
        type: 'POST',
        url: '<?=base_url('qr/doGenrateQr');?>',
        data: { formData:$("#content").val(),ecc:$("#ecc").val(),size:$("#size").val() },
        success: function(response) {
            $(".showQRCode").html(response);
        }
    });  
  }
</script>
</body>
</html> 

