
<div class="container">
<div class="title_head">Add Book</div><hr />
<span class="msg_text"><?php echo $this->session->flashdata('message')."<br>";?></span>
   <form action="books" method="post">
   <input type="hidden" value="add" name="action" />
    <div class="row">
            <div class="input-group-inline">
                <label for="">Acc No.*</label>
                <?php $acc_no=str_pad($new_acc_no, 5, "0", STR_PAD_LEFT);?>
                <input type="hidden" name="acc_no" id="acc_no" value="<?php echo $acc_no;?>"/>
                <img src="<?php echo base_url();?>index.php/main/show_barcode/<?php echo $acc_no;?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Title* </label>
                <input type="text" id="title" name="title"/>
                <?php echo form_error('title'); ?>
            </div>
            <div class="input-group-inline">
                <label for="">Volume</label>
                <input type="text" name="volume" id="volume"/>
            </div>
            <div class="input-group-inline">
                <label for="">Author 1</label>
                <input type="text" name="author1" id="author1"/>
                <?php echo form_error('author1'); ?>
            </div>
            <div class="input-group-inline">
                <label for="">Author 2</label>
                <input type="text" name="author2" id="author2"/>
            </div>
            <div class="input-group-inline">
                <label for="">Author 3</label>
                <input type="text"  id="author3" name="author3"/>
            </div>
            <div class="input-group-inline">
                <label for="">Corp. Auth/Confer.</label>
                <input type="text" name="auth_conf" id="auth_conf"/>
            </div>
            <div class="input-group-inline">
                <label for="">Corp. Auth/Assoc.</label>
                <input type="text" name="auth_assc" id="auth_assc"/>
            </div>
            <div class="input-group-inline">
                <label for="">ISBN No</label>
                <input type="text" name="isbn_no" id="isbn_no"/>
                <?php echo form_error('isbn_no'); ?>
            </div>
             <div class="input-group-inline">
                <label for="">Publisher</label>
                <input type="text" name="publisher" id="publisher"/>
                <?php echo form_error('publisher'); ?>
            </div>
           <div class="input-group-inline">
                <label for="">Year of Publish</label>
                <input type="text" name="date_of_publish"  id="date_of_publish"/>
            </div>
           <div class="input-group-inline">
                <label for="">Place Of Publication</label>
                <input type="text" name="place_of_publication" id="place_of_publication"/>
            </div>
           <div class="input-group-inline">
                <label for="">Edition</label>
                <input type="text" name="edition" id="edition"/>
                <?php echo form_error('edition'); ?>
            </div>
           <div class="input-group-inline">
                <label for="">Editor</label>
                <select type="text" name="editor" id="editor"/>
                    <option value="">Select</option>
                    <option value="Tr. By">Tr. By</option>
                    <option value="Ed. By">Ed. By</option>
                    <option value="Cop. By">Cop. By</option>
                </select>
            </div>        
    </div>
    <div class="row">
            <div class="input-group-inline">
                <label for="">Ed./Comp./ Tran. Name</label>
                <input type="text" id="editor_by" name="editor_by"/>
            </div>  
            <div class="input-group-inline">
                <label for="">Series</label>
                <input type="text" id="series" name="series"/>
            </div>
            <div class="input-group-inline">
                <label for="">Bibliographic Note</label>
                <textarea name="bibliographic_note" id="bibliographic_note" cols="30" rows="10"></textarea>
            </div>
            <div class="input-group-inline">
                <label for="">Note</label>
                <textarea name="note" id="note" cols="30" rows="10"></textarea>
            </div>
             <div class="input-group-inline">
                <label for="">Classification No.</label>
                <input type="text" name="classification_no" id="classification_no"/>
            </div>
           <div class="input-group-inline">
                <label for="">Author Mark </label>
                <input type="text" name="author_mark" id="author_mark"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 1 </label>
                <input type="text" name="subject1" id="subject1"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 2</label>
                <input type="text" name="subject2" id="subject2"/>
            </div>
             <div class="input-group-inline">
                <label for="">Subject 3</label>
                <input type="text" id="subject3" name="subject3"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 4</label>
                <input type="text" name="subject4" id="subject4"/>
            </div>
    </div>
    <div class="row">
       <div class="input-group-inline">
                <label for="">Price</label>
                <input type="text" name="price" id="price"/>
                <?php echo form_error('price'); ?>
            </div>
            <div class="input-group-inline">
                <label for="">Page No</label>
                <input type="text" name="page_no" id="page_no"/>
            </div>
           <div class="input-group-inline">
                <label for="">Bound</label>
                <select name="bound" id="bound">
                    <option value="">Select</option>
                    <option value="HB">HB</option>
                    <option value="PB">PB</option>
                </select>
            </div>
            <div class="input-group-inline">
                <label for="">Type</label>
                <select name="type" id="type">
                    <option value="Book">Book</option>
                    <option value="Reference Book">Reference Book</option>
                    <option value="English Book">English Book</option>
                    <option value="Journals">Journals</option>
                    <option value="CD">CD</option>
                </select>
            </div>
             <div class="input-group-inline">
                <label for="">Fund Type</label>
                <select name="fund_type" id="fund_type">
                    <option value="">Select</option>
                    <option value="DCLF">DCLF</option>
                    <option value="UGC">UGC</option>
                    <option value="DPI">DPI</option>
                    <option value="Book Bank">Book Bank</option>
                    <option value="Donate">Donate</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="input-group-inline">
                <label for="">Supplier</label>
                <input type="text" name="suppliers" id="suppliers"/>
            </div>
            <div class="input-group-inline">
                <label for="">Physical Details</label>
                <textarea name="additional" id="additional" cols="30" rows="10"></textarea>
            </div>
            <div class="input-group-inline">
                <label for="">Remarks</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
             <div class="input-group-inline">
                <label for="">Book Condition</label>
                <select type="text" name="book_condition" id="book_condition"/>
                    <option value="Good">Good</option>
                    <option value="Bad">Bad</option>
                    <option value="Repair">Repair </option>
                    <option value="Reject">Reject</option>
                </select>
            </div>
            <div class="input-group-inline">
                <label for="">No of Copy</label>
                <input type="text" id="copy" name="copy" value="1"/>
            </div> 
           <button type="submit" onclick="return confirm('Are You Sure?');">Submit</button>
    </div>        
    </form>
</div>