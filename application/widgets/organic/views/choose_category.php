<div id="choose-category">
    <h4>Step 02: Choose your Organic Category</h4>
    <hr/>
    <form class="form-horizontal">
        <?php if( $organicListing ): ?>
            <?php foreach($organicListing as $key => $organic): ?>
            <label class="radio">
                <input type="radio" name="organic" id="organic-<?php echo $organic->id ?>" value="<?php echo $organic->title ?>">
                <?php echo $organic->title ?>
            </label>
            <?php endforeach; ?>
        <?php endif; ?>
        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn btn-primary">Proceed to next Step <i class="icon-chevron-right"></i></button>
            </div>
        </div>
    </form>

</div>