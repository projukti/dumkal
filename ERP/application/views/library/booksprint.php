<div class="container">
    <div class="row">
        
    </div>
    <div class="row">
        <form action="" method="post" target="_blank">
            <fieldset>
                <legend>Search &amp; Print</legend>                
            <div class="input-group-inline">
                <label for=""> From Sl No.</label>
                <input type="text" name="from_slno" value=""/>
            </div>    
            <div class="input-group-inline">
                <label for="">To Sl No.</label>
                <input type="text" name="to_slno" value=""/>
            </div>
            <div class="input-group-inline">
            <button type="submit" onClick="this.form.method='post'; this.form.action='booksprint/barcode';this.form.submit();">Print Barcode</button> 
            <button type="submit" onClick="this.form.method='post'; this.form.action='booksprint/spine';this.form.submit();">Print Spine Slip</button> 
            </div>
            </fieldset>
        </form>
    </div>
    <div class="row">
        
    </div>
</div>

