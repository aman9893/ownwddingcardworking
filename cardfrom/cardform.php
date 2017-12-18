<?php session_start(); 
     if(!empty($_SESSION)){?>
     <input type='hidden' id='u' value='<?php echo $_SESSION['sessData']['userID'];?>'> 
     <?php }?>

<?php include 'header.php';?>

<div class="container col-md-12">

<form  id="form1" method=""  enctype="multipart/form-data" class="form-horizontal"> 
   
<table class="table table-bordered table-responsive ">

<h1> Wedding Form </h1>

<br>
<hr>
<h2> BRIDE SECTION </h2>
   
<tr>
   <td><label class="control-label">Wedding Date</label></td>
   <td>  <input type="date" size="60" name="WeddingDate" id="WeddingDate" placeholder="Date"/  > </td>
    
</tr>

<tr>
   <td><label class="control-label">Bride Name</label></td>
   <td><input class="form-control" type="text"   id="Bridename" name="Bridename" placeholder="Bridename"  /></td>
</tr>


<tr>
   <td><label class="control-label">Bride Image</label></td>
   <td><input  class="input-group" type="file" name="bride_image" id="bride_image"  /> </td>
</tr>

<tr>
   <td><label class="control-label">Father Name</label></td>
   <td><input class="form-control" type="text" name="brideFatherName" id="brideFatherName" placeholder="Father Name" /></td>
</tr>

<tr>
   <td><label class="control-label">Mother Name</label></td>
   <td><input class="form-control" type="text" name="brideMotherName"  id="brideMotherName" placeholder="Mother Name"  /></td>
</tr>

<tr>
   <td><label class="control-label">Grand Father Name</label></td>
   <td><input class="form-control" type="text" name="brideGrandFatherName"id="brideGrandFatherName" placeholder="Grand Father Name" /></td>
</tr>

<tr>
   <td><label class="control-label">Grand Mother Name</label></td>
   <td><input class="form-control" type="text" name="brideGrandMotheName" id="brideGrandMotheName"placeholder="Grand Mother Name"  /></td>
</tr>

<tr>
   <td><label class="control-label">From</label></td>
   <td><input class="form-control" type="text" name="bridegroomFrom"id="bridegroomFrom" placeholder="From"  /></td>
</tr>



<tr>  
<td><label class="control-label">  <h2> GROOM SECTION</h2></label></td>

</tr>
<tr>
   <td><label class="control-label">Groom Name</label></td>
   <td><input class="form-control" type="text" name="GroomName"id="GroomName" placeholder="groom section" /></td>
</tr>



<tr>
   <td><label class="control-label">Groom Image</label></td>
   <td><input class="input-group" type="file" name="GroomImage"id="GroomImage" accept="image/*" /></td>
</tr>




<tr>
   <td><label class="control-label"> Father Name</label></td>
   <td><input class="form-control" type="text" name="FatherName" id="FatherName"placeholder="Father Name" /></td>
</tr>

<tr>
   <td><label class="control-label">Mother Name</label></td>
   <td><input class="form-control" type="text" name="MotherName"id="MotherName" placeholder="Mother Name" /></td>
</tr>

<tr>
   <td><label class="control-label">Grand Father Name</label></td>
   <td><input class="form-control" type="text" name="GrandFatherName" id="GrandFatherName"placeholder="Grand Father Name"  /></td>
</tr>
<tr>
   <td><label class="control-label">Grand Mother Name</label></td>
   <td><input class="form-control" type="text" name="GrandmotherName"id="GrandmotherName" placeholder="Grand Father Name"  /></td>
</tr>

<tr>
   <td><label class="control-label">From</label></td>
   <td><input class="form-control" type="text" name="From" id="From"placeholder="From"  /></td>
</tr>


<tr>  
<td> <h2>Card Details<h2></td>

</tr>
<tr>
   <td><label class="control-label">Banner Message</label></td>
   <td><input class="form-control" type="text" name="BannerMessage" id="BannerMessage"placeholder="Banner Message"  /></td>
</tr>

<tr>
   <td><label class="control-label">God Title</label></td>
   <td><input class="form-control" type="text" name="GodTitle"id="GodTitle" placeholder="God Title"  /></td>
</tr>

<tr>
   <td><label class="control-label">Parent message</label></td>
   <td><input class="form-control" type="text" name="Parentmessage"id="Parentmessage" placeholder="Parent message"  /></td>
</tr>

<tr>
   <td><label class="control-label">Invitation Message</label></td>
   <td><input class="form-control" type="text" name="InvitationMessage"id="InvitationMessage" placeholder="InvitationMessage"  /></td>
</tr>


<tr>
   <td><label class="control-label">Marriage Place</label></td>
   <td><input class="form-control" type="text" name="MarriagePlace"id="MarriagePlace"placeholder="Marriage Place"  /></td>
</tr>


<tr>
   <td><label class="control-label">Marriage Place Address</label></td>
   <td><input class="form-control" type="text" name="MarriagePlaceaddress"id="MarriagePlaceaddress" placeholder="Marriage Place Address"  /></td>
</tr>


<tr>
   <td><label class="control-label">Phone No.</label></td>
   <td><input class="form-control" type="text" name="Phonetwo"id="Phonetwo" placeholder="Phone No."  /></td>
</tr>


<tr>
   <td><label class="control-label">Phone No.</label></td>
   <td><input class="form-control" type="text" name="Phoneone" id="Phoneone"placeholder="Phone No."  /></td>
</tr>


<tr>
   <td><label class="control-label">Wedding Card Images</label></td>

  
   <td><input  class="input-group" type="file" name="CardUpload1" id="CardUpload1" accept="image/*"  /> </td>
    
   <td><input  class="input-group" type="file" name="CardUpload2" id="CardUpload2" accept="image/*"  /> </td>
    
   <td><input  class="input-group" type="file" name="CardUpload3" id="CardUpload3" accept="image/*"  /> </td>

   <td><input  class="input-group" type="file" name="CardUpload4" id="CardUpload4" accept="image/*"  /> </td>
</tr>





<tr>
   <td><label class="control-label">Fucntion Photo</label></td>

   

   <td><input  class="input-group" type="file" name="FucntionPhoto1" id="FucntionPhoto1" accept="image/*"  /> </td>
    
   <td><input  class="input-group" type="file" name="FucntionPhoto2" id="FucntionPhoto2" accept="image/*"  /> </td>
    
   <td><input  class="input-group" type="file" name="FucntionPhoto3" id="FucntionPhoto3" accept="image/*"  /> </td>

   <td><input  class="input-group" type="file" name="FucntionPhoto4" id="FucntionPhoto4" accept="image/*"  /> </td>
  





</tr>


<tr>
   <td><label class="control-label">Function Title1</label></td>
   <td><input class="form-control" type="text" name="FunctionTitle1" id="FunctionTitle1"placeholder="FunctionTitle"  /></td>
</tr>



<tr>
   <td><label class="control-label">Function Title2</label></td>
   <td><input class="form-control" type="text" name="FunctionTitle2"id="FunctionTitle2"placeholder="FunctionTitle"  /></td>
</tr>



<tr>
   <td><label class="control-label">Function Title3</label></td>
   <td><input class="form-control" type="text" name="FunctionTitle3"id="FunctionTitle3" placeholder="FunctionTitle"  /></td>
</tr>



<tr>
   <td><label class="control-label">Function Title4</label></td>
   <td><input class="form-control" type="text" name="FunctionTitle4"id="FunctionTitle4" placeholder="FunctionTitle"  /></td>
</tr>


<tr>
   <td><label class="control-label">Day and date </label></td>
   <td><input class="form-control" type="text" name="Dayandate" id="Dayandate"placeholder="Dayandate "  /></td>
</tr>


<tr>
   <td><label class="control-label">Time</label></td>
   <td><input class="form-control" type="text" name="time" id="time"placeholder="Time"/></td>
</tr>

<tr>
   <td><label class="control-label">Fuctnion Address</label></td>
   <td><input class="form-control" type="text" name="FuctnionAddress"id="BridenFuctnionAddressame"placeholder="Fuctnion Address"  /></td>
</tr>

<tr>
   <td><label class="control-label">Home Address</label></td>
   <td><input class="form-control" type="text" name="HomeAddress"id="HomeAddress" placeholder="Home Address" /></td>
</tr>

<tr>
   <td><label class="control-label">Family Member Title</label></td>
   <td><input class="form-control" type="text" name="FamilyMemberTitle" id="FamilyMemberTitle"placeholder="Family Member Title" /></td>
</tr>

<tr>
   <td><label class="control-label">Family Member1</label></td>
   <td><input class="form-control" type="text" name="FamilyMember1"id="FamilyMember1" placeholder="Family Member1"  /></td>
</tr>


<tr>
   <td><label class="control-label">Family Member2</label></td>
   <td><input class="form-control" type="text" name="FamilyMember2" id="FamilyMember2"placeholder="Family Member2"  /></td>
</tr>


<tr>
   <td><label class="control-label">Family Member3</label></td>
   <td><input class="form-control" type="text" name="FamilyMember3"id="FamilyMember3" placeholder="Family Member3"  /></td>
</tr>


<tr>
   <td><label class="control-label">Family Member4</label></td>
   <td><input class="form-control" type="text" name="FamilyMember4"id="BriFamilyMember4dename" placeholder="Family Member4" /></td>
</tr>

<tr>
   <td><label>Family Members5</label></td>
   <td><input class="form-control" type="text" name="FamilyMember5"id="FamilyMember5" placeholder="Family Members" /></td>
</tr>

 <tr>
   <td><label>Family Member6</label></td>
   <td><input class="form-control" type="text" name="FamilyMember6" id="FamilyMember6"placeholder="Family Members" /></td>
</tr>



<tr>
   <td><label class="control-label">Email</label></td>
   <td><input class="form-control" type="text" name="Email" id="Email" placeholder="Email"  required /></td>
</tr>



<tr>
   <td colspan="2">
       <!-- <input type="button" name="submit" class="btn btn-default" value='submit' id='btn_submit'> -->
       <!--<input type="button" name="submit_name" class="btn btn-default" id="btn_name" value="Preview Theam" onclick="submit_by_name()"
       data-toggle="modal" data-target="#myModal"/>-->
   
     <input type="submit" name="submit" class="btn btn-default" value='submit' id='btn_submit'>
           
     <input type="button"  class="btn btn-default" value='PREVIEW' onclick="get_val();"/>
         <!-- <input type="button"  class="btn btn-default" value='PREVIEW' onclick="get_val2();"/>-->

        


   </td>
   </tr>
   </table>
   
</form>

</div>

<?php include 'footer.php';?>


 <script>

    $(document).ready(function(e) {
        $("#form1").on('submit', (function(e) {
            e.preventDefault();
            $.ajax({
                url: '../curdcard/insert.php',
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    //window.location.reload();
                },

            });

            alert('Saved Successfully');

        }));
    });



    </script>


<script type="text/javascript">


function get_val(){

    var user = $('#u').val();
   // alert(user);
    if(typeof user === "undefined"){
        window.open('../login/index.php',"_self");
    }else{
        window.open('../preview/weddingpreview.php',"_self");
    }
}
</script>
</body>
</html>	

