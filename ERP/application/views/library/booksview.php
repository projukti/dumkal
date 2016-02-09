<?php if(isset($single_book)){?>
<div class="container">
<div class="title_head">Update Book</div><hr />
   <form action="<?php echo base_url();?>index.php/library/booksview/update_book_id" method="post">
   <?php foreach ($single_book as $single_book){?>
    <div class="row">
            <div class="input-group-inline">
                <label for="">Acc No.*</label>
                <input type="hidden" name="id" id="is" value="<?php echo $single_book->id; ?>"/>
                <input type="hidden" name="acc_no" id="acc_no" value="<?php echo $single_book->acc_no; ?>"/>
                <img src="<?php echo base_url();?>index.php/main/show_barcode/<?php echo $single_book->acc_no; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Title* </label>
                <input type="text" id="title" name="title" value="<?php echo $single_book->title; ?>"/>
                <?php echo form_error('title'); ?>
            </div>
            <div class="input-group-inline">
                <label for="">Volume</label>
                <input type="text" name="volume" id="volume" value="<?php echo $single_book->volume; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Author 1</label>
                <input type="text" name="author1" id="author1" value="<?php echo $single_book->author1; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Author 2</label>
                <input type="text" name="author2" id="author2" value="<?php echo $single_book->author2; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Author 3</label>
                <input type="text"  id="author3" name="author3" value="<?php echo $single_book->author3; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Corp. Auth/Confer.</label>
                <input type="text" name="auth_conf" id="auth_conf" value="<?php echo $single_book->auth_conf; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Corp. Auth/Assoc.</label>
                <input type="text" name="auth_assc" id="auth_assc" value="<?php echo $single_book->auth_assc; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">ISBN No</label>
                <input type="text" name="isbn_no" id="isbn_no" value="<?php echo $single_book->isbn_no; ?>"/>
            </div>
             <div class="input-group-inline">
                <label for="">Publisher</label>
                <input type="text" name="publisher" id="publisher" value="<?php echo $single_book->publisher; ?>"/>
            </div>
           <div class="input-group-inline">
                <label for="">Date of Publish</label>
                <input type="text" name="date_of_publish"  id="date_of_publish" value="<?php echo $single_book->date_of_publish; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Place Of Publication</label>
                <input type="text" name="place_of_publication" id="place_of_publication" value="<?php echo $single_book->place_of_publication; ?>"/>
            </div>
           <div class="input-group-inline">
                <label for="">Edition</label>
                <input type="text" name="edition" id="edition" value="<?php echo $single_book->edition; ?>"/>
            </div>
             <div class="input-group-inline">
                <label for="">Editor</label>
                <select type="text" name="editor" id="editor"/>
                    <option <?php if($single_book->editor=='Tr. By'){echo 'selected';} ?> value="Tr. By">Tr. By</option>
                    <option <?php if($single_book->editor=='Ed. By'){echo 'selected';} ?> value="Ed. By">Ed. By</option>
                    <option <?php if($single_book->editor=='Cop. By'){echo 'selected';} ?> value="Cop. By">Cop. By</option>
                </select>
                
                <?php echo form_error('editor'); ?>
            </div>           
    </div>
    <div class="row">
           <div class="input-group-inline">
                <label for="">Ed./Comp./ Tran. Name</label>
                <input type="text" id="editor_by" name="editor_by" value="<?php echo $single_book->editor_by; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Series</label>
                <input type="text" id="series" name="series" value="<?php echo $single_book->series; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Bibliographic Note</label>
                <textarea name="bibliographic_note" id="bibliographic_note" cols="30" rows="10"><?php echo $single_book->bibliographic_note; ?></textarea>
            </div>
            <div class="input-group-inline">
                <label for="">Note</label>
                <textarea name="note" id="note" cols="30" rows="10"><?php echo $single_book->note; ?></textarea>
            </div>
             <div class="input-group-inline">
                <label for="">Classification No.</label>
                <input type="text" name="classification_no" id="classification_no" value="<?php echo $single_book->classification_no; ?>"/>
            </div>
           <div class="input-group-inline">
                <label for="">Author Mark </label>
                <input type="text" name="author_mark" id="author_mark" value="<?php echo $single_book->author_mark; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 1 </label>
                <input type="text" name="subject1" id="subject1" value="<?php echo $single_book->subject1; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 2</label>
                <input type="text" name="subject2" id="subject2" value="<?php echo $single_book->subject2; ?>"/>
            </div>
             <div class="input-group-inline">
                <label for="">Subject 3</label>
                <input type="text" id="subject3" name="subject3" value="<?php echo $single_book->subject3; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 4</label>
                <input type="text" name="subject4" id="subject4" value="<?php echo $single_book->subject4; ?>"/>
            </div>
    </div>
    <div class="row">
       <div class="input-group-inline">
                <label for="">Price</label>
                <input type="text" name="price" id="price" value="<?php echo $single_book->price; ?>"/>
                <?php echo form_error('price'); ?>
            </div>
            <div class="input-group-inline">
                <label for="">Page No</label>
                <input type="text" name="page_no" id="page_no" value="<?php echo $single_book->page_no; ?>"/>
            </div>
           <div class="input-group-inline">
                <label for="">Bound</label>
                <select name="bound" id="bound">
                    <option <?php if($single_book->bound=='HB'){echo 'selected';} ?> value="HB">HB</option>
                    <option <?php if($single_book->bound=='PB'){echo 'selected';} ?> value="PB">PB</option>
                </select>
            </div>
            <div class="input-group-inline">
                <label for="">Type</label>
                <select name="type" id="type">
                    <option <?php if($single_book->type=='Book'){echo 'selected';} ?> value="Book">Book</option>
                    <option <?php if($single_book->type=='Reference Book'){echo 'selected';} ?> value="Reference Book">Reference Book</option>
                    <option <?php if($single_book->type=='English Book'){echo 'selected';} ?> value="English Book">English Book</option>
                    <option <?php if($single_book->type=='Journals'){echo 'selected';} ?> value="Journals">Journals</option>
                    <option <?php if($single_book->type=='CD'){echo 'selected';} ?> value="CD">CD</option>
                </select>
            </div>
             <div class="input-group-inline">
                <label for="">Fund Type</label>
                <select name="fund_type" id="fund_type">
                    <option <?php if($single_book->fund_type=='DCLF'){echo 'selected';} ?> value="DCLF">DCLF</option>
                    <option <?php if($single_book->fund_type=='UGC'){echo 'selected';} ?> value="UGC">UGC</option>
                    <option <?php if($single_book->fund_type=='DPI'){echo 'selected';} ?> value="DPI">DPI</option>
                    <option <?php if($single_book->fund_type=='Book Bank'){echo 'selected';} ?> value="Book Bank">Book Bank</option>
                    <option <?php if($single_book->fund_type=='Donate'){echo 'selected';} ?> value="Donate">Donate</option>
                    <option <?php if($single_book->fund_type=='Others'){echo 'selected';} ?> value="Others">Others</option>
                </select>
            </div>
            <div class="input-group-inline">
                <label for="">Supplier</label>
                <input type="text" name="suppliers" id="suppliers" value="<?php echo $single_book->suppliers; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Physical Details</label>
                <textarea name="additional" id="additional" cols="30" rows="10"><?php echo $single_book->additional; ?></textarea>
            </div>
            <div class="input-group-inline">
                <label for="">Remarks</label>
                <textarea name="description" id="description" cols="30" rows="10"><?php echo $single_book->description; ?></textarea>
            </div>
            <div class="input-group-inline">
                <label for="">Book Condition</label>
                <select type="text" name="book_condition" id="book_condition"/>
                    <option <?php if($single_book->book_condition=='Good'){echo 'selected';} ?> value="Good">Good</option>
                    <option <?php if($single_book->book_condition=='Bad'){echo 'selected';} ?> value="Bad">Bad</option>
                    <option <?php if($single_book->book_condition=='Repair'){echo 'selected';} ?> value="Repair">Repair </option>
                    <option <?php if($single_book->book_condition=='Reject'){echo 'selected';} ?> value="Reject">Reject</option>
                </select>
            </div>
           <button type="submit">Submit</button>
    </div>  
    <?php }?>        
    </form>
</div>
<?php } elseif(isset($copy_book)){?>
<div class="container">
<div class="title_head">Copy Book</div><hr />
   <form action="<?php echo base_url();?>index.php/library/books" method="post">
   <input type="hidden" value="copy" name="action" />
   <?php foreach ($copy_book as $single_book){?>
    <div class="row">
             <div class="input-group-inline">
                <label for="">Acc No.*</label>
                <?php $acc_no=str_pad($new_acc_no, 5, "0", STR_PAD_LEFT);?>
                <input type="hidden" name="acc_no" id="acc_no" value="<?php echo $acc_no;?>"/>
                <img src="<?php echo base_url();?>index.php/main/show_barcode/<?php echo $acc_no;?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Title* </label>
                <input type="text" id="title" name="title" value="<?php echo $single_book->title; ?>"/>
                <?php echo form_error('title'); ?>
            </div>
            <div class="input-group-inline">
                <label for="">Volume</label>
                <input type="text" name="volume" id="volume" value="<?php echo $single_book->volume; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Author 1</label>
                <input type="text" name="author1" id="author1" value="<?php echo $single_book->author1; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Author 2</label>
                <input type="text" name="author2" id="author2" value="<?php echo $single_book->author2; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Author 3</label>
                <input type="text"  id="author3" name="author3" value="<?php echo $single_book->author3; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Corp. Auth/Confer.</label>
                <input type="text" name="auth_conf" id="auth_conf" value="<?php echo $single_book->auth_conf; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Corp. Auth/Assoc.</label>
                <input type="text" name="auth_assc" id="auth_assc" value="<?php echo $single_book->auth_assc; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">ISBN No</label>
                <input type="text" name="isbn_no" id="isbn_no" value="<?php echo $single_book->isbn_no; ?>"/>
            </div>
             <div class="input-group-inline">
                <label for="">Publisher</label>
                <input type="text" name="publisher" id="publisher" value="<?php echo $single_book->publisher; ?>"/>
            </div>
           <div class="input-group-inline">
                <label for="">Date of Publish</label>
                <input type="text" name="date_of_publish"  id="date_of_publish" value="<?php echo $single_book->date_of_publish; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Place Of Publication</label>
                <input type="text" name="place_of_publication" id="place_of_publication" value="<?php echo $single_book->place_of_publication; ?>"/>
            </div>
           <div class="input-group-inline">
                <label for="">Edition</label>
                <input type="text" name="edition" id="edition" value="<?php echo $single_book->edition; ?>"/>
            </div>
           <div class="input-group-inline">
                <label for="">Editor</label>
                <select type="text" name="editor" id="editor"/>
                    <option <?php if($single_book->editor=='Tr. By'){echo 'selected';} ?> value="Tr. By">Tr. By</option>
                    <option <?php if($single_book->editor=='Ed. By'){echo 'selected';} ?> value="Ed. By">Ed. By</option>
                    <option <?php if($single_book->editor=='Cop. By'){echo 'selected';} ?> value="Cop. By">Cop. By</option>
                </select>
                
                <?php echo form_error('editor'); ?>
            </div>           
    </div>
    <div class="row">
           <div class="input-group-inline">
                <label for="">Ed./Comp./ Tran. Name</label>
                <input type="text" id="editor_by" name="editor_by" value="<?php echo $single_book->editor_by; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Series</label>
                <input type="text" id="series" name="series" value="<?php echo $single_book->series; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Bibliographic Note</label>
                <textarea name="bibliographic_note" id="bibliographic_note" cols="30" rows="10"><?php echo $single_book->bibliographic_note; ?></textarea>
            </div>
            <div class="input-group-inline">
                <label for="">Note</label>
                <textarea name="note" id="note" cols="30" rows="10"><?php echo $single_book->note; ?></textarea>
            </div>
             <div class="input-group-inline">
                <label for="">Classification No.</label>
                <input type="text" name="classification_no" id="classification_no" value="<?php echo $single_book->classification_no; ?>"/>
            </div>
           <div class="input-group-inline">
                <label for="">Author Mark </label>
                <input type="text" name="author_mark" id="author_mark" value="<?php echo $single_book->author_mark; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 1 </label>
                <input type="text" name="subject1" id="subject1" value="<?php echo $single_book->subject1; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 2</label>
                <input type="text" name="subject2" id="subject2" value="<?php echo $single_book->subject2; ?>"/>
            </div>
             <div class="input-group-inline">
                <label for="">Subject 3</label>
                <input type="text" id="subject3" name="subject3" value="<?php echo $single_book->subject3; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 4</label>
                <input type="text" name="subject4" id="subject4" value="<?php echo $single_book->subject4; ?>"/>
            </div>
    </div>
    <div class="row">
       <div class="input-group-inline">
                <label for="">Price</label>
                <input type="text" name="price" id="price" value="<?php echo $single_book->price; ?>"/>
                <?php echo form_error('price'); ?>
            </div>
            <div class="input-group-inline">
                <label for="">Page No</label>
                <input type="text" name="page_no" id="page_no" value="<?php echo $single_book->page_no; ?>"/>
            </div>
           <div class="input-group-inline">
                <label for="">Bound</label>
                <select name="bound" id="bound">
                    <option <?php if($single_book->bound=='HB'){echo 'selected';} ?> value="HB">HB</option>
                    <option <?php if($single_book->bound=='PB'){echo 'selected';} ?> value="PB">PB</option>
                </select>
            </div>
            <div class="input-group-inline">
                <label for="">Type</label>
                <select name="type" id="type">
                    <option <?php if($single_book->type=='Book'){echo 'selected';} ?> value="Book">Book</option>
                    <option <?php if($single_book->type=='Reference Book'){echo 'selected';} ?> value="Reference Book">Reference Book</option>
                    <option <?php if($single_book->type=='English Book'){echo 'selected';} ?> value="English Book">English Book</option>
                    <option <?php if($single_book->type=='Journals'){echo 'selected';} ?> value="Journals">Journals</option>
                    <option <?php if($single_book->type=='CD'){echo 'selected';} ?> value="CD">CD</option>
                </select>
            </div>
             <div class="input-group-inline">
                <label for="">Fund Type</label>
                <select name="fund_type" id="fund_type">
                    <option <?php if($single_book->fund_type=='DCLF'){echo 'selected';} ?> value="DCLF">DCLF</option>
                    <option <?php if($single_book->fund_type=='UGC'){echo 'selected';} ?> value="UGC">UGC</option>
                    <option <?php if($single_book->fund_type=='DPI'){echo 'selected';} ?> value="DPI">DPI</option>
                    <option <?php if($single_book->fund_type=='Book Bank'){echo 'selected';} ?> value="Book Bank">Book Bank</option>
                    <option <?php if($single_book->fund_type=='Donate'){echo 'selected';} ?> value="Donate">Donate</option>
                    <option <?php if($single_book->fund_type=='Others'){echo 'selected';} ?> value="Others">Others</option>
                </select>
            </div>
            <div class="input-group-inline">
                <label for="">Supplier</label>
                <input type="text" name="suppliers" id="suppliers" value="<?php echo $single_book->suppliers; ?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Physical Details</label>
                <textarea name="additional" id="additional" cols="30" rows="10"><?php echo $single_book->additional; ?></textarea>
            </div>
            <div class="input-group-inline">
                <label for="">Remarks</label>
                <textarea name="description" id="description" cols="30" rows="10"><?php echo $single_book->description; ?></textarea>
            </div>
            <div class="input-group-inline">
                <label for="">Book Condition</label>
                <select type="text" name="book_condition" id="book_condition"/>
                    <option <?php if($single_book->book_condition=='Good'){echo 'selected';} ?> value="Good">Good</option>
                    <option <?php if($single_book->book_condition=='Bad'){echo 'selected';} ?> value="Bad">Bad</option>
                    <option <?php if($single_book->book_condition=='Repair'){echo 'selected';} ?> value="Repair">Repair </option>
                    <option <?php if($single_book->book_condition=='Reject'){echo 'selected';} ?> value="Reject">Reject</option>
                </select>
            </div>
            <div class="input-group-inline">
                <label for="">No of Copy</label>
                <input type="text" id="copy" name="copy" value="1"/>
            </div>
           <button type="submit">Submit</button>
    </div>  
    <?php }?>        
    </form>
</div>
<?php }elseif(isset($search_book)){?>
<div class="container">
<div class="title_head">Book Listing<span style="float:right; background:#C2DBF5; font-size:14px;"><a href="<?php echo base_url();?>index.php/library/excelreport">Export Excel</a></span></div>
<hr />
<?php echo form_open('library/booksview/search_book_id'); ?>
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
<?php }}?>
</div>
<?php }else{?>
<div class="container">
<div class="title_head">Book Listing<span style="float:right; background:#C2DBF5; font-size:14px;"><a href="<?php echo base_url();?>index.php/library/excelreport">Export Excel</a></span></div>
<hr />
<span class="msg_text"><?php echo $this->session->flashdata('message')."<br>";?></span>
<span class="msg_text"><?php echo $this->session->flashdata('messageup')."<br>";?></span>
<?php echo form_open('library/booksview/search_book_id'); ?>
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
<?php if (empty($results)){?>
<div align="center" style="width:100%; position:absolute; top:100%;">No Data Found</div>
<?php }else {?>
<?php foreach($results as $books) { ?>
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
<?php }?>
<div id="pagination">
<?php echo $links;?>
<?php /*?><ul class="tsc_pagination">
<!-- Show pagination links -->
<?php foreach ($links as $link) {
echo "<li>". $link."</li>";
} ?>
</ul><?php */?>
</div>
<?php }?>
</div>
<?php }?>

