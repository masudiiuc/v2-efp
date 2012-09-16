<div class="row-fluid">
    <form class="form-inline">

        <select name="state" id="state" class="fr input-medium">
            <option value="">Select city </option>
        </select>
        <label class="fr">&nbsp;</label>
        <select name="city" id="city" class="fr input-medium">
            <option value="">Select state </option>
        </select>
    </form>
</div>

<?php if( $listingData ): ?>
    <?php foreach($listingData as $key => $value ): ?>

        <?php
        if( $key == 0 || $key % 4 == 0  ): ?>
        <?php echo $key != 0 ? '</div>' : '' ?>
        <div class="row-fluid">
        <?php endif; ?>

            <div class="span3 widget-box">
                <h4><?php echo $value->name ?></h4>
                <h6><b><?php echo $value->what_they_do ?></b></h6>
                <p><?php echo $value->address ?>, <?php echo $value->city ?>, <?php echo $value->state ?>, <?php echo $value->zip_code ?></p>
                <p><a class="btn-mini fr" href="<?php echo $value->eco_link ?>">View details &raquo;</a></p>
            </div>

        <?php if( (($key + 1) == count($listingData))):  ?>
        </div>
        <?php endif; ?>

    <?php endforeach; ?>
<?php endif; ?>

<br/>

<div class="pagination pagination-right">
    <?php echo $pagination; ?>
</div>

<br/>