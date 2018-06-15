<?php 
$theme_dir = get_template_directory_uri(); 
?>
<style>
hr{
height: 2px;
border-top: 2px solid #555;
}
</style>
<div class="title">
    <h1>Business Hours Shortcodes Options</h1>
    <p>Fill out this form to set the hours for your website.</p>
</div>

<form method="POST" action="<?php echo get_site_url(); ?>/front-page.php">
    <input type="hidden" name="MSR_PLUGIN" value="true" />
    <h1>Hours</h2>
    <h3>Sunday Hours: </h3>
    <input type="text" size="40" name="MSR_SUN"  value="<?= MSR_SUN; ?>"  />
    <br/>
    <h3>Monday Hours: </h3>
    <input type="text" size="40" name="MSR_MON"  value="<?= MSR_MON; ?>"  />
    <br/>
    <h3>Tuesday Hours: </h3>
    <input type="text" size="40" name="MSR_TUE"  value="<?= MSR_TUE; ?>"  />
    <br/>
    <h3>Wednesday Hours: </h3>
    <input type="text" size="40" name="MSR_WED"  value="<?= MSR_WED; ?>"  />
    <br/>
    <h3>Thursday Hours: </h3>
    <input type="text" size="40" name="MSR_THU"  value="<?= MSR_THU; ?>"  />
    <br/>
    <h3>Friday Hours: </h3>
    <input type="text" size="40" name="MSR_FRI"  value="<?= MSR_FRI; ?>"  />
    <br/>
    <h3>Saturday Hours: </h3>
    <input type="text" size="40" name="MSR_SAT"  value="<?= MSR_SAT; ?>"  />
    <br/>
    <hr/>
    <!-- Explain how to use the shortcodes here -->
    <h1>Shortcodes</h1>
    <h2>[todayhours]</h2>
    <h3>This shortcode will output a span with the id="today-hours" that contains the hours for the active day</h3>
    <h4>Example: </h4>
    
    <blockquote>
        <xmp><span id="today-hours">9:00am-5:00pm</span></xmp>
    </blockquote>
    <br/>
    <h2>[hourslist]</h2>
    <h3>This shortcode will output an unordered list with the id="hours-list" that contains the hours for every day</h3>
    <h4>Example:</h4>
    <blockquote>
<xmp><ul id="hours-list">
    <li>Sunday:  closed</li>
    <li>Monday:  closed</li>
    <li>Tuesday:  closed</li>
    <li>Wednesday:  closed</li>
    <li>Thursday:  closed</li>
    <li>Friday:  closed</li>
    <li>Saturday:  closed</li>
</ul>    
</xmp>
    </blockquote>
    
    <!-- Cancel/Save -->
    <hr/><br/>
    <a href="<?= get_site_url(); ?>/wp-admin/">
        <button type="button" class="button">Cancel All Changes</button></a>
        &nbsp;&nbsp;
        <button type="submit" class="button">Save All Changes</button>
    
</form>