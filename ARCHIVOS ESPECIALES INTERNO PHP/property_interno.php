<?php
global $property_dueno;
global $property_telefonos;
global $property_mail;
global $property_contacto;
global $property_nota;
global $owner_notes;
?> 

<div class="submit_container">
<div class="submit_container_header"><?php _e('Uso Interno');?></div>

    <p class="half_form">
        <label for="property_dueno"> <?php _e('Dueño o Encargado');?></label>
        <input type="text" id="property_dueno" size="40" class="form-control"  name="property_dueno" value="<?php print $property_dueno;?>">
    </p>

    <p class="half_form half_form_last">
        <label for="property_telefonos"> <?php  _e('Teléfonos');?> </label>
        <input type="text" id="property_telefonos" size="40" class="form-control"  name="property_telefonos" value="<?php print $property_telefonos;?>">
    </p>

    <p class="half_form ">
        <label for="property_mail"><?php _e('Mail');?></label>
        <input type="text" id="property_mail" size="40" class="form-control"  name="property_mail" value="<?php print $property_mail;?>">
    </p>

    <p class="half_form half_form_last">
        <label for="property_contacto"><?php _e('Contacto Inicial');?></label>
        <input type="text" id="property_contacto" size="40" class="form-control"  name="property_contacto" value="<?php print $property_contacto;?>">
    </p>
     
    <p class="full_form">
        <label for="owner_notes"><?php _e('Nota Adicional');?></label>
        <textarea id="owner_notes" class="form-control"  name="owner_notes" ><?php print $owner_notes;?></textarea>
    </p>


</div>  
