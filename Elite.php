<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="student.css">
<link rel="stylesheet" type="text/css" href="dummymedical.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-------------------------------THIS FOR FONT FAMILY------------------------------------->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Pushster&display=swap" rel="stylesheet">
<!----------------------------------------------------------------------------------->

<!------------------------ THIS FOR FONT ICONS-------------------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
<!------------------------------------------------------------------------------>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<link href= "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

</head>
<body>
  <div class="container">
<div class="main">
<form class="form" name="myform" method="post" onsubmit="return medical()">
            <div class="wrapper">
                    <div class="row">
                    <div class="col-lg-12 mb-5">
                    <select id="flip" name="select" class="form-control">
                    <option value="">Select</option>  
                    <option value="1">Student Form</option>
                    <option value="2">Medical Form</option>
                    <option value="3">Third Form</option>
                    <option value="4">D</option>
                    </select>
                    </div>
                    </div>
       
                    <div class="heading1" id="t1">
                        <div class="heading1_1 text-light">A.General Information</div>
                        <div class="heading1_2"><i class="fa-solid fa-chevron-down first text-light"></i></div>
                    </div>
                    <div id="toggle1">
                        <div class="row">
                            <div class="fullname col-lg-4">
                                <label for="fullname" class="text-dark">Full Name</label>
                                <input id="fullname" type="text" class="form-control" name="fullname">
                            </div>  
                            <div class="dob col-md-12 col-lg-4 col-xl-4">
                                <label for="d_o_admission">Date Of Birth</label>
                                <input id="d_o_admission" class="form-control date" name="dob" placeholder="Select date...">
                                 
                             </div>
                            <div class="gender col-lg-4">
                                <label for="gender">Gender</label>
                                <div class="row">
                                <div class="custom-control custom-radio" id="gender">
                                    <input type="radio" class="custom-control-input" id="stu_customRadio1" name="gender" value="Male">
                                    <label class="custom-control-label" for="stu_customRadio1">Male</label>
                                </div>
                    
                                <div class="custom-control custom-radio female" id="gender">
                                    <input type="radio" class="custom-control-input" id="stu_customRadio2" name="gender" value="Female">
                                    <label class="custom-control-label" for="stu_customRadio2">Female</label>
                                </div>
                                </div>
                            </div>  
                        </div>

                        <div class="row">
                            <div class="fathername col-lg-4">
                                <label for="fathername">Father Name</label>
                                <input id="fathername" type="text" class="form-control input-sm" name="fathername">
                            </div>  
                            <div class="mothername col-lg-4">
                                <label for="mothername">Mother Name</label>
                                <input id="mothername" type="text" class="form-control input-sm" name="mothername">
                            </div>  
                        
                            <div class="contact col-lg-4">
                                <label for="contact">Contact Number</label>
                                <input id="contact" type="number" class="form-control input-sm" name="contactnumber">
                            </div>  
                        </div>
                        <div class="row">

                        <div class="col-lg-4">
                            <div class="address">
                                <label for="address">Address/Correspondance</label>
                                <textarea class="form-control input-sm" id="address" rows="4"></textarea>
                            </div>  
                        </div>                         
                         <div class="col-lg-8">
                            <div class="row">
                                <div class="email col-lg-6">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control input-sm" name="email">
                                </div> 
                                <div class="place col-lg-6">
                                    <label for="place">City</label>
                                    <input id="place" type="text" class="form-control input-sm" name="city">
                                </div> 
                                <div class="district col-lg-6">
                                    <label for="district">District</label>
                                    <input id="district" type="text" class="form-control input-sm" name="district">
                                </div>  
                                
                            
                                
                                <div class="state col-lg-6">
                                    <label for="state">State</label>
                                    <input id="state" type="text" class="form-control input-sm" name="state">
                                </div>  
                                
                                
                            </div>
                       </div>
                        </div>
                    </div>

                <div class="stu_toggle2" id="stu_toggle2">
                    <div class="heading2" id="t2">
                        <div class="heading2_2 text-light">B.Student Details</div>
                        <div class="heading2_3"><i class="fa-solid fa-chevron-down second text-light"></i></div>
                    </div>
                    <div id="toggle2">
                       

                        <div class="row">
                          
                                    <div class="h_admitted col-lg-4">
                                        <label for="h_admitted">Name of School/ College</label>
                                        <input id="h_admitted" type="text" class="form-control input-sm" name="n">
                                    </div> 
                                    <div class="h_admitted col-lg-4">
                                        <label for="h_admitted">Enrollment/Register Number</label>
                                        <input id="h_admitted" type="text" class="form-control input-sm" name="h_admitted">
                                    </div>  
                             
                                    <div class="h_admitted col-lg-4">
                                        <label for="h_admitted">Class/Department</label>
                                        <input id="h_admitted" type="text" class="form-control input-sm" name="h_admitted">
                                    </div>  
                                    <div class="h_admitted col-lg-4">
                                        <label for="h_admitted">School/College Address</label>
                                        <textarea class="form-control input-sm" id="address" rows="5"></textarea>
                                    </div> 
                                  
                             <div class="col-lg-8">
                                 <div class="row">
                                    <div class="h_admitted col-lg-6">
                                        <label for="h_admitted">Marks/Percentage</label>
                                        <input id="h_admitted" type="text" class="form-control input-sm" name="h_admitted">
                                    </div> 
                                    <div class="form-group col-lg-6">
                                        <label for="exampleFormControlFile1">Pervious Marksheet</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                    <div class="h_admitted col-lg-6">
                                        <label for="h_admitted">Term/Semester</label>
                                        <input id="h_admitted" type="text" class="form-control input-sm" name="h_admitted">
                                    </div> 
                                    <div class="h_admitted col-lg-6">
                                        <label for="h_admitted">Acadamic Year</label>
                                        <input id="h_admitted" type="text" class="form-control input-sm" name="h_admitted">
                                    </div> 
                                  
                                
                                 
                               
                                 </div>
                         
                             </div>
                             <div class="t_o_disease col-lg-4">
                                <label for="t_o_disease">Scholarship category</label>
                                <select class="custom-select" id="t_o_disease" name="select">
                                    <option value="expert">Scholarship...</option>
                                    <option value="1">Premetric</option>
                                    <option value="2">Post metric</option>
                                </select>
                            </div> 
                             <div class="h_admitted col-lg-4">
                                <label for="h_admitted"> Phone Number</label>
                                <input id="h_admitted" type="text" class="form-control input-sm" name="h_admitted">
                            </div>
                        
                         
                            <div class="h_admitted col-lg-4">
                                <label for="h_admitted">  Email</label>
                                <input id="h_admitted" type="text" class="form-control input-sm" name="h_admitted">
                             </div>
                        </div>

                     

                        <div class="heading2_1 mt-5">Bank AccountDetails:-</div>

                        <div class="account_details">
                            <div class="row">
                             
                                <div class="a_number col-lg-4">
                                    <label for="a_number">Account Number</label>
                                    <input id="a_number" type="number" class="form-control" name="account_number">
                                </div>
                                <div class="n_o_bank col-lg-4">
                                    <label for="n_o_bank">Name Of Bank</label>
                                    <input id="n_o_bank" type="text" class="form-control" name="name_o_bank">
                                </div>   
                                <div class="ifsc_code col-lg-4">
                                    <label for="ifsc_code">IFSC Code</label>
                                    <input id="ifsc_code" type="text" class="form-control" name="ifsc_code">
                                </div>  
                            </div>

                            <div class="row">
                                <div class="aa_number col-lg-4">
                                    <label for="aa_number">Aadhar Number</label>
                                    <input id="aa_number" type="number" class="form-control" name="aadhar_number">
                                </div>  
                                 <div class="form-group col-lg-4">
                                    <label for="exampleFormControlFile1">Attachement</label>
                                    <input type="file" class="form-control-file" name="attachment" id="exampleFormControlFile1">
                                  </div>
                            
                            </div>

                        </div>
                    </div>
                </div>
             
                     
                <div id="md_toggle5">
                    <div class="heading2 mt-4" id="t5">
                        <div class="heading2_2">B.Medical Details</div>
                        <div class="heading2_3"><i class="fa-solid fa-chevron-down fith"></i></div>
                    </div>
                    <div id="toggle5">

                        <div class="row">
                            <div class="h_admitted col-lg-4">
                                <label for="h_admitted">Name Of Hospital Admitted</label>
                                <input id="h_admitted" type="text" class="form-control input-sm" name="name_o_hospital">
                            </div>  
                            <div class="t_o_disease col-lg-4">
                                <label for="t_o_disease">Type Of Disease</label>
                                <select class="custom-select" id="t_o_disease" name="disease_select">
                                    <option value="expert">Affected by...</option>
                                    <option value="1">Injury</option>
                                    <option value="2">Maternity</option>
                                    <option value="3">Illness</option>
                                </select>
                            </div> 
                            <div class="n_o_disease col-lg-4">
                                <label for="n_o_disease">Name Of Disease</label>
                                <input id="n_o_disease" type="text" class="form-control input-sm" name="name_o_disease">
                            </div>  
                          <div class="t_o_disease col-lg-4">
                                <label for="t_o_disease">Severity Of Disease</label>
                                <select class="custom-select" id="t_o_disease" name="severity_o_select">
                                    <option value="expert">Please select ...</option>
                                    <option value="1">Minor</option>
                                    <option value="2">Moderate</option>
                                    <option value="3">Major</option>
                                    <option value="3">Extreme</option>
                                </select>
                            </div> 
                 
                            <div class="d_o_admission col-lg-4">
                                <label for="d_o_admission">Date Of Admission</label>
                                <input id="d_o_admission" class="form-control date" name="d_o_admission" placeholder="Click me...">
                            </div>  
                            <div class="a_expense col-lg-4">
                                <label for="a_expense">Approximate Expenses</label>
                                <input id="a_expense" type="text" class="form-control" name="a_expense">
                            </div>  
                            <div class="r_amount col-lg-4">
                                <label for="r_amount">Requested Amount</label>
                                <input id="r_amount" type="text" class="form-control" name="r_amount">
                            </div> 
                            <div class="form-group col-lg-4">
                                <label for="exampleFormControlFile1"> Hospital Report/Recommendation letter </label>
                                <input type="file" class="form-control-file" name="hosital-report" id="exampleFormControlFile1">
                            </div> 
                            <div class="form-group col-lg-4">
                                <label for="exampleFormControlFile1">Pervious Medical Report</label>
                                <input type="file" class="form-control-file" name="perious_medical_report" id="exampleFormControlFile1">
                            </div> 
                        </div>
                         <div class="orphan col-lg-12">
                            
                            <div class="row orphan_1">
                                <label for="orphan" class="orphan1">Do you have Insurance scheme?</label>
                            <div class="custom-control custom-radio" id="in_orphan">
                                <input type="radio" class="custom-control-input" id="customRadio5" name="radio3" value="yees">
                                <label class="custom-control-label" for="customRadio5">Yes</label>
                            </div>
                
                            <div class="custom-control custom-radio" id="in_orphan">
                                <input type="radio" class="custom-control-input" id="customRadio6" name="radio3" value="noo">
                                <label class="custom-control-label" for="customRadio6">No</label>
                            </div> 
                            </div>
                            <div class="gov" id="in_yes">
                                <div class="row orphan_1">
                                    <div class="a_expense col-lg-4">
                                        <label for="a_expense">Goverment</label>
                                        <input id="a_expense" type="text" class="form-control" name="orphan_g_p" placeholder=" Enter Insurance Id">
                                    </div> 
                    
                                    <div class="a_expense col-lg-4">
                                        <label for="a_expense">Private</label>
                                        <input id="a_expense" type="text" class="form-control"  name="orphan_g_p" placeholder=" Enter Insurance Id">
                                    </div> 
                            </div>

                        </div> 
                      
                     
                        
                     </div> 


                        <div class="heading2_1">Bank AccountDetails:-</div>

                        <div class="account_details">
                            <div class="row">
                                <div class="a_number col-lg-4">
                                    <label for="a_number">Account Number</label>
                                    <input id="a_number" type="text" class="form-control" name="a_number">
                                </div> 
                           
                                <div class="n_o_bank col-lg-4">
                                    <label for="n_o_bank">Name Of Bank</label>
                                    <input id="n_o_bank" type="text" class="form-control" name="n_o_bank">
                                </div>  
                                <div class="ifsc_code col-lg-4">
                                    <label for="ifsc_code">IFSC Code</label>
                                    <input id="ifsc_code" type="text" class="form-control" name="ifsc_code">
                                </div> 
                            </div>

                            <div class="row">
                                <div class="aa_number col-lg-4">
                                    <label for="aa_number">Aadhar Number</label>
                                    <input id="aa_number" type="text" class="form-control" name="aa_number">
                                </div>  
                                <div class="form-group col-lg-4">
                                    <label for="exampleFormControlFile1">Attachement</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            
                            </div>

                        </div>
                    </div>
               </div>
              


                    <div class="heading3" id="t3">
                        <div class="heading3_1 text-light">C.Family Information</div>
                        <div class="heading3_2"><i class="fa-solid fa-chevron-down third text-light"></i></div>
                    </div>
                    <div id="toggle3">
                        <div class="orphan col-lg-12">
                            
                            <div class="row orphan_1">
                                <label for="orphan" class="orphan">Orphan</label>
                            <div class="custom-control custom-radio" id="orphan">
                                <input type="radio" class="custom-control-input" id="stu_customRadio3" name="radio2" value="yes">
                                <label class="custom-control-label" for="stu_customRadio3">Yes</label>
                            </div>
                
                            <div class="custom-control custom-radio" id="orphan">
                                <input type="radio" class="custom-control-input" id="stu_customRadio4" name="radio2" value="no">
                                <label class="custom-control-label" for="stu_customRadio4">No</label>
                            </div>
                            </div>
                        </div> 
                        <div class="orpahan_yes col-lg-4" id="o_yes">
                            <label for="aa_number">Guardian Name</label>
                            <input id="" type="text" class="form-control input-sm" name="orphanyes">
                        </div>
                        <div class="row10">
                            <div class="f_members" id="o_no">
                                <label for="f_members">Number Of Family Members:-</label>
                                <div class="f_members2">
                                    <table id="myTable" class="table table-bordered">
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Relation</th>
                                        <th>Marital Status</th>
                                        <th>Occupation</th>
                                        <th>Annual Income</th>
                                        <th>Add</th>
                                        <tr id='row_0'>
                                            <td><input type="text" id="txtfirst" class="form-control input-sm " /></td>
                                            <td><input type="text" id="txtsecond" class="form-control input-sm " /></td>
                                            <td><input type="text" id="txtthird"  class="form-control input-sm " /></td>
                                            <td><input type="text" id="txtfourth" class="form-control input-sm " /></td>
                                            <td><select name="marital_status"  class="form-control input-sm m" >
                                                <option value="in">Married</option>
                                                <option value="de">Unmarried</option>
                                                <option value="fr">Widow/Widowar</option>
                                                <option value="us">Single Parent</option>
                                            </select></td>
                                            <td><input type="text" id="txtfifth" class="form-control " oninput="calculate('row_0')"/></td>
                                            <td><input type="text" id="txtsix" class="form-control t"  /></td>
                                            <td><i class="fa fa-plus" onClick="insertRow()"></i></td>
                                        </tr>
                                    
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                        <label class="form-check-label" for="gridCheck1">
                            Declaration:
                          </label>
                        <div class="col-lg-12" id="gridcheck1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                I hereby declare that the above information is true.
                            </label>
                          </div>
                        </div>
                        </div>
                        <div class="submit">
                           <button type="submit" class="btn btn-primary" id="form_sub">submitt</button>
                        </div>
                    </div>
                </div>
            </form>
         </div>
     </div>
     <script src="student application.js"></script>
     <script>
         $(document).ready(function (){

            $('#form_sub').click(function(event){
            event.preventDefault();
            alert('ok');
            var file_image = $('#user_image').prop('files')[0];
            alert(file_image);
            var formdata =new FormData(document.getElementById('subform'));
            formdata.append('file',file_image);
            alert(formdata);
            
            $.ajax({
            url: 'insert.php',
            data: formdata,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(data){
                alert(data);
            }
            });
            

            
            });
            });

    </script>
  
</body>
</html>