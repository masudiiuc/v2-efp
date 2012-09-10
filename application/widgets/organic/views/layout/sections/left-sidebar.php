<div class="well sidebar-nav left-sidebar-bg">
    <div class="sidebar-box">
        <form>
            <legend>Search for Eco-Vendors</legend>
            <label>Find</label>
            <select id="listing-type" name="listing_type">
                <option>Select one</option>
            </select>

            <label>Location</label>
            <input type="text" class="input-medium span10" placeholder="city, state or Zip code">


            <label>Within</label>
            <select id="radius" name="radius">
                <option value="5">5 miles</option>
            </select>

            <button type="submit" class="btn-small">Search Now!</button>
        </form>
    </div>

    <div class="sidebar-box">
        <form>
            <legend>Login Eco-Vendor</legend>

            <label>Email address </label>
            <div class="input-prepend">
                <span class="add-on">@</span><input class="span9" id="email" size="16" type="text" placeholder="Enter Email">
            </div>


            <label>Password </label>
            <div class="input-prepend">
                <span class="add-on">**</span><input class="span9" id="password" size="16" type="password" placeholder="Enter password">
            </div>

            <button type="submit" class="btn-small">Login</button>
        </form>
    </div>

    <div class="sidebar-box">
        <form>
            <legend>Eco-Friendly Approval Seal</legend>

            <img src="<?php echo base_url() ?>public/images/eco-friendly-party-seal.png" width="60%" align="middle" style="padding-left: 45px"/>

        </form>
    </div>
</div><!--/.well -->