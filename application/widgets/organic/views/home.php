<div class="row-fluid">
    <form class="form-inline" id="organic-filter">
        <p class="fl"><img src="<?php echo base_url() ?>public/images/organic-food-header.gif"/></p>
        <select name="city" id="city" class="fr input-medium select2box" placeholder="select state">

        </select>
        <label class="fr" style="margin-top: 15px;">Choose a State&nbsp;</label>
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