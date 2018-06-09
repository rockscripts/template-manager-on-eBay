<div id="errorapp" class="the_error">
    <?php
    if ($this->session->flashdata('error')) {
        ?>
        <div class="alert alert-error">
            <h4>Please verify the following:</h4>
            <?php print $this->session->flashdata('error'); ?>
        </div>
    <?php
    }
    ?>
</div>
<div id="success" class="the_error">
    <?php
    if ($this->session->flashdata('success')) {
        ?>
        <div class="alert alert-success">
            <h4>Success!!</h4>
            <?php print $this->session->flashdata('success'); ?>
        </div>
    <?php
    }
    ?>
</div>
