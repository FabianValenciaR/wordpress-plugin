<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="container">
    <h1 class="py-3">Welcome to Content Refinery!</h1>
    <form method="post" action="options.php" class="bg-light">
    <?php
    settings_fields( 'cr_settings' );
    do_settings_sections( 'cr_settings' );
    ?>
    <div class="mb-3">
        <label for="AgencyName" class="form-label">Agency Name</label>
        <input type="text" name="cr_agency_name" value="<?php echo get_option( 'cr_agency_name' ) ?>" class="form-control" id="AgencyName" aria-describedby="theAgencyName">
    </div>
    <div class="mb-3">
        <label for="ApiKey" class="form-label">API Key</label>
        <input type="text" name="cr_api_key" value="<?php echo get_option( 'cr_api_key' ) ?>" class="form-control" id="ApiKey">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
