<tr>
      <td>
      <form action="edit_form.php" method="POST">
      <div class="form-check">
    <input type="checkbox" class="form-check-input" id="produit" name="produit" value="<?php echo $row['nom'];?>">
    <label class="form-check-label" for="produit"><?php echo $row['nom'];?></label>
    <input type="submit" name="edit" value= "Modifier" class="btn btn-secondary">
    </form>
  </div> 
      </td>
      <td>
          <p></p>
      </td>


</tr>