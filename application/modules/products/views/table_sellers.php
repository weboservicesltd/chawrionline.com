<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>
  <script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
  <form  action="<?php echo base_url().'products/deleteAll';?>" method="post" id="form-validate" name"formproducts">
<div class="container"><div class="row">
<button type="submit" title="Submit" class="button" style="text-align: right;"><span> Delete Selected</span></button>
 </div></div>
<div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">
 <table id="example" class="display "  cellspacing="0" width="100%">
 
         <thead>
              <tr>
              
                
                 
                   
                    <th> Categories</th>
                    <th> Name</th>
                    <th>Brand Name</th>
                    <th>Manufacturer</th>
                     <th>Reel No</th>
                    <th>GSM</th>
                    <th> Bulk (mic)</th>
                    <th>Size(cms)</th>
                    
                    <th>Grain</th>
                    <th> Sheets Per Pkt.</th>
                    <th> Pkt. Weight</th>
                    <th>Pkt Per Bdl</th>
                    <th>Qty. on Offer</th>
                    <th>Packing</th>
                    <th>Rate</th>
                    <th>Cenvat Amount</th>
                    <th>Action</th>
                    <th>Select</th>
                  
              </tr>
          </thead>

        

          <tbody>
              <?php
                                    // print_r($data);
                                  foreach($data as $rows){
                   ?>
                  <tr style="text-transform: uppercase;">
                    <!-- <td>
                      <input type="checkbox" class="checkboxes" value="1">
                    </td> -->
                    <td>
                      <?php echo $rows['chawri_categories_name']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_name']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_brand_name']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_manufacturer']; ?>
                    </td>
                     <td>
                      <?php echo $rows['chawri_products_reel_no']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_substance']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_thickness']; ?>
                    </td>
                    <td>
                      <?php if($rows['chawri_products_size_w']){ echo $rows['chawri_products_size_w']; ?>
                        X
                          <?php echo $rows['chawri_products_size_h'];}else{ echo $rows['chawri_products_reel_size']; } ?>

                    </td>

                    <td>
                      <?php echo $rows['chawri_products_grain']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_sheets_per_packet']; ?>
                    </td>

                                       
                    <td>
                      <?php echo $rows['chawri_products_weight']; ?>
                    </td>

                    <td>
                      <?php echo $rows['chawri_products_packets_per_bundle']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_quantity_on_offer']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_packing']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_rate']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_cenvat_amount']; ?>
                    </td>
                    
                     <td>
                      <a href="<?php echo base_url().'products/showUpdate/'.$rows['chawri_products_id']?>"> Edit<a>/  <a onclick="return confirm('Are you sure you want to Delete Products?')" href="<?php echo base_url().'products/delete/'.$rows['chawri_products_id']?>"> Delete</a>
                      </td><td>
                    <input type="checkbox"  required name="select[]" value="<?php echo $rows['chawri_products_id']; ?>"></td>
                  </tr>
                                   <?php }?>

            
          </tbody>

          </form>
      </table>
    
</div>
<script>  
function ConfirmDelete()
{
  var x = confirm("Are you sure you want to delete?");
  if (x)
      return true;
  else
    return false;
}
</script>  