<body>
<div class="container">
    <div class="row">
        <h2>QR Code Generator with Codeigniter</h2>
       <table class="table table-bordered table-hover">
         <thead>
           <tr>
             <th>#</th>
             <th>Link</th>
             <th>Thumbnail</th>
           </tr>
         </thead>
         <tbody>
           <?php 
              for ($i=0; $i<count($data); $i++) { 
                echo "<tr>
                      <td>".$i."</td>
                      <td><a href='".base_url('images/').$data[$i]."'>".base_url('images/').$data[$i]."</td>
                      <td><img src='".base_url('images/').$data[$i]."' height='70' width='70'></td>
                </tr>\n";
              }
           ?>
         </tbody>
       </table>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url(JQUERY); ?>"></script>
<script type="text/javascript" src="<?php echo base_url(BOOTSTRAP_JS); ?>"></script>
</body>
</html> 

