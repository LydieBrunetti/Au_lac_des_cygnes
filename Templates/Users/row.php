<tr>
      <td>
      <form action="delete_process.php" method="POST">
      <div class="form-check">
    <input type="checkbox" class="form-check-input" id="produit" name="produit" value="<?php echo $row['produit'];?>">
    <label class="form-check-label" for="produit"><?php echo $row['produit'];?></label>
    <input type="submit" name="delete" value= "Supprimer" class="btn btn-danger">
    </form>
  </div> 
      </td>
      <td>
          <p></p>
      </td>


</tr>