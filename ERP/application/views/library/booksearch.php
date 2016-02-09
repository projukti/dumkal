<div class="container">
<div class="title_head">Search And Issue Book</div>
<hr />
<?php echo form_open('library/booksearch/search_book_id'); ?>
<div class="row">
        
</div>
<div class="row">
<fieldset>
<legend>Search Books</legend>
<div class="input-group-inline">
<label for="">Search Keyword</label>
<input type="text" name="searchto" id="searchto" value=""/>
</div>
<div class="input-group-inline">
<label for="">Search By</label>
<select type="text" name="searchby" id="searchby"/>
                    <option value="all">All</option>
                    <option value="author">Author</option>
                    <option value="title">Title</option>
                    <option value="acc_no">Accn No.</option>
                    <option value="subject">Subject</option>
                    <option value="publisher">Publisher</option>
</select>
</div>
<button type="submit">Search</button>
</fieldset>
</div>
<div class="row">
        
</div>
<?php echo form_close();?>

<?php if(isset($search_book)){?>
<?php echo form_open('library/booksview/search_book_id'); ?>
<span class="msg_text"><?php echo $this->session->flashdata('messageup')."<br>";?></span>
<?php if (empty($search_book)){?>
<div align="center" style="width:100%; position:absolute; top:1000%;">No Data Found</div>
<?php }else {?>
<?php foreach($search_book as $books) { ?>
    <div class="row-full">
        <div class="list-item">
            <div class="box">
                <span><?php echo "Sl. No.: ".$books->sl_no; ?></span>
                <span><?php echo "Clarification No: ".$books->classification_no; ?></span>
                <span><?php echo "ISBN. No.: ".$books->isbn_no; ?></span>
            </div>
            <div class="box">
                <span><?php echo "Acc. No.: ".$books->acc_no; ?></span>
                <span><?php echo "Author Mark: ".$books->author_mark; ?></span>
                <span><?php echo "Type: ".$books->type; ?></span>
            </div>
            <div class="box">
                <span><?php echo "Title: ".$books->title; ?></span>
                <span><?php echo "Call No: ".$books->call_no; ?></span>
                <span><?php echo "Status: ".$books->status; ?></span>
            </div>
            <div class="box-button">
                    <!--<button class="details">Details</button>-->
                    <!--<button class="delete"><span class="icon2-fire"></span></button>-->
                    <button class="edit"><a href="<?php echo base_url() . "index.php/library/booksview/show_book_id/" . $books->id; ?>">
                    Edit</a></button>
                    <button class="edit"><a href="<?php echo base_url() . "index.php/library/booksview/copy_book_id/" . $books->id; ?>">
                    Make Copy</a></button>
            </div>
        </div>
    </div>
<?php }}}?>
</div>


