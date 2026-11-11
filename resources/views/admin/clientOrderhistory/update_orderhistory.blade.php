<?php echo View::make('admin/header'); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Order History</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">			
					@if(Session::has('alert-success'))
						<div class="alert alert-success">
							{{Session::get('alert-success')}}
						</div>
					@endif		
					@if(Session::has('success_msg'))
						<div class="alert alert-success">
							{{Session::get('success_msg')}}
						</div>
					@endif
					@if(Session::has('danger'))
						<div class="alert alert-danger">
							{{Session::get('danger')}}
						</div>
					@endif					
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <a type="submit" class="btn btn-warning" value="Payment" href="{{url('developer/order-history')}}"> Back</a> Invoice Order Edit

						<div id="success-payment_update">
							 </div> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">							 
							  
					 	 
							<form method="POST" onsubmit="return client.updateClientPayOrder(this)"  class="form-horizontal updateorder_validation">						 
							<div class="modal-body">
								{{ csrf_field() }}
								<input type="hidden" name="client_id" value="<?php if(!empty($client->id)){  echo $client->id; } ?>">		
								<div class="form-group">
								<label class="col-sm-3">Business Name</label>
								<div class="col-md-6"><?php if(!empty($client)){  echo $client->business_name; } ?>
								</div>
								</div>
								<div class="form-group">
								<label class="col-sm-3">Package Name<sup><i style="color:red" class="fa fa-asterisk fa-fw" aria-hidden="true"></i></sup></label>							 
								<div class="col-md-6"> 				
								<input type="hidden" name="order_id" value="{{$paymentHistory->id}}">			 
								 {{ ucfirst($paymentHistory->package_name) }}
						 
							 
									 
									 
								</div>
								</div> 	
									
								 
								<div class="form-group">
								<label class="col-sm-3">Amount<sup><i style="color:red" class="fa fa-asterisk fa-fw" aria-hidden="true"></i></sup></label>
							 
								<div class="col-md-6"> 							 
								<input type="text" name="amount" id="amount" class="form-control" value="{{ old('amount',(isset($paymentHistory)) ? $paymentHistory->amount:"")}}" placeholder="Paid Amount" onkeypress="return isNumericKeyCheck(event);" onblur="handlingPaiAmt()" > 
								</div>
								</div> 
								<div class="form-group">
								<label class="col-sm-3">Coins<sup><i style="color:red" class="fa fa-asterisk fa-fw" aria-hidden="true"></i></sup></label>
								<div class="col-md-3">
									<label>Coins:</label>
									<input type="text" step=1 class="form-control" name="coins_amt"  id="coins_per_lead" value="{{ old('coins_amt',(isset($paymentHistory)) ? $paymentHistory->coins_amt:"")}}"  readonly/>
								</div>	
							 																 
								</div>
								<div class="form-group">
								<label class="col-sm-3">GST<sup><i style="color:red" class="fa fa-asterisk fa-fw" aria-hidden="true"></i></sup></label>
								<div class="col-md-6"> 	
								<label class="radio-inline">
								<input type="radio" name="gst_status" value="Yes" onchange="paidgst(this.value)" <?php if($paymentHistory->gst_status=='Yes') echo "checked"; ?>>Yes
								</label>
								<label class="radio-inline">
								<input type="radio" name="gst_status" value="No" onchange="nopaidgst(this.value)" <?php if($paymentHistory->gst_status=='No') echo "checked"; ?>>No
								</label>

								</div>	
								</div>	
								<div class="form-group">
								<label class="col-sm-3">GST Amount</label>
							 
								<div class="col-md-6"> 
								 
								<input type="number" name="gst_tax" id="gst_tax" class="form-control" placeholder="GST Amount"  value="{{ old('gst_tax',(isset($paymentHistory)) ? $paymentHistory->gst_tax:"")}}"> 
								</div>
								</div> 
								
								<div class="form-group">
								<label class="col-sm-3">GST Total Amount<sup><i style="color:red" class="fa fa-asterisk fa-fw" aria-hidden="true"></i></sup></label>
							 
								<div class="col-md-6"> 
								 
								<input type="number" name="gst_total_amount" id="gst_total_amount" class="form-control" value="{{ old('gst_total_amount',(isset($paymentHistory)) ? $paymentHistory->gst_total_amount:"")}}" placeholder="GST Total Amount" > 
								</div>
								</div> 


								<div class="form-group">
								<label class="col-sm-3">TDS<sup><i style="color:red" class="fa fa-asterisk fa-fw" aria-hidden="true"></i></sup></label>
								<div class="col-md-6"> 	
								<label class="radio-inline">
								<input type="radio" name="tds_status" value="Yes" onchange="paidtds(this.value)" <?php if($paymentHistory->tds_status=='Yes') echo "checked"; ?>>Yes
								</label>
								<label class="radio-inline">
								<input type="radio" name="tds_status" value="No" onchange="nopaidtds(this.value)" <?php if($paymentHistory->tds_status=='No') echo "checked"; ?>>No
								</label>

								</div>	
								</div>	
								<div class="form-group">
								<label class="col-sm-3">TDS Amount</label>
							 
								<div class="col-md-6"> 
								 
								<input type="number" name="tds_amount" id="tds_amount" class="form-control" placeholder="TDS Amount" value="{{ old('tds_amount',(isset($paymentHistory)) ? $paymentHistory->tds_amount:"")}}" > 
								</div>
								</div> 
								
								<div class="form-group">
								<label class="col-sm-3">Total Amount<sup><i style="color:red" class="fa fa-asterisk fa-fw" aria-hidden="true"></i></sup></label>						 
								<div class="col-md-6"> 								 
								<input type="number" name="total_amount" id="total_amount" class="form-control" placeholder="Total Amount" value="{{ old('total_amount',(isset($paymentHistory)) ? $paymentHistory->total_amount:"")}}" > 
								</div>
								</div> 
								
								
								
								
							 
								 
								
								<div class="form-group">
										<label class="col-sm-3" for="stud-payment_mode">Payment Mode<sup><i style="color:red" class="fa fa-asterisk fa-fw" aria-hidden="true"></i></sup></label>
										<div class="col-sm-6">
											<?php
											 
												 	 									
												foreach($moderesults as $moderesult){
													$modes[$moderesult->slug] = $moderesult->mode;
												}
											?>										
											<select class="form-control" id="stud-payment_mode" name="stud-payment_mode" required>
												<option value="">Select Payment Mode</option>
												<?php foreach($modes as $key => $value): ?>
													<option value="<?php echo $key; ?>" <?php echo ((isset($paymentHistory->payment_mode) && $paymentHistory->payment_mode==$key)?"selected":""); ?>><?php echo $key; ?></option>
												<?php endforeach; ?>
												 
											</select>
										</div>
									</div>					
									<?php foreach($modes as $key=>$value): ?>
										<?php if($key!='cash' && $key!='cheque'): ?>
											<div class="form-group hide-mode <?php echo $key; ?>">
												<label class="col-sm-3" for="stud-<?php echo $key; ?>"><?php echo $value; ?></label>
												<div class="col-sm-6">          
													<select class="form-control" id="stud-<?php echo $key; ?>" name="stud-<?php echo $key; ?>">
														<option value="">-- Select <?php echo $value; ?> --</option>
														<?php
														$banks =  App\Models\Banksdetails::where('mode',$key)->get();	
															//$banks = $wpdb->get_results("SELECT * FROM `banks_details` WHERE `mode`='".$key."'");
															$pay='pay_'.$paymentHistory->payment_mode;	
															echo $paymentHistory->$pay;															
															if( count($banks) > 0 ){
																foreach ($banks as $bank) {
																	$selected = "selected";																	
																	if($bank->name==$paymentHistory->$pay){
																		echo "<option value=\"".$bank->name."\" ".$selected.">".$bank->name."</option>";
																	}else{
																	echo "<option value=\"".$bank->name."\">".$bank->name."</option>";
																	}
																}
															}
														?>
													</select>
												</div>
											</div>
										<?php endif; ?>
									<?php endforeach; ?>
									<div class="form-group hide-mode cheque">
										<label class="col-sm-3" for="stud-chq_no">Cheque Number</label>
										<div class="col-sm-6">          
										  <input type="text" class="form-control" id="stud-chq_no" name="stud-chq_no" placeholder="Enter Cheque Number" value="{{ old('chq_card_no',(isset($paymentHistory)) ? $paymentHistory->chq_card_no:"")}}">
										</div>
									</div>	
								 
									<div class="form-group hide-mode bank">
										<label class="col-sm-3" for="stud-card_no">Last 4 Digit Card Number</label>
										<div class="col-sm-6">          
										  <input type="text" class="form-control" maxlength="4" id="stud-card_no" name="stud-card_no" placeholder="Enter Last 4 Digit of Card Number" value="{{ old('bank_card_no',(isset($paymentHistory)) ? $paymentHistory->bank_card_no:"")}}">
										</div>
									</div>	
									
							 
								
								<div class="form-group">
								<label class="col-sm-3">Transaction-Id:</label>							 
								<div class="col-md-6"> 								 
								<input type="text" name="transactionid" class="form-control" placeholder="Enter Transaction-Id" value="{{ old('transactionid',(isset($paymentHistory)) ? $paymentHistory->transactionid:"")}}"> 
								
								</div>
								</div>
								<div class="form-group">
								<label class="col-sm-3">Select ID Proof:</label>							 
								<div class="col-md-6"> 								 
								<select class="form-control" name="selectproofid"> 
								<option value="">Select ID Proof</option>
								<option value="Pan Card" <?php echo ((isset($paymentHistory->selectproofid) && $paymentHistory->selectproofid=='Pan Card')?"selected":""); ?> >Pan Card</option>
								<option value="Adhar Card" <?php echo ((isset($paymentHistory->selectproofid) && $paymentHistory->selectproofid=='Adhar Card')?"selected":""); ?>>Adhar Card</option>
								<option value="Passport" <?php echo ((isset($paymentHistory->selectproofid) && $paymentHistory->selectproofid=='Passport')?"selected":""); ?>>Passport</option>
								<option value="Driver Licence" <?php echo ((isset($paymentHistory->selectproofid) && $paymentHistory->selectproofid=='Driver Licence')?"selected":""); ?>>Driver Licence</option>
								</select>
								
								</div>
								</div>
								
								<div class="form-group">
								<label class="col-sm-3">ID Proof:</label>							 
								<div class="col-md-6"> 								 
								<input type="text" name="proofid" class="form-control" placeholder="Enter ID proof" value="{{ old('proofid',(isset($paymentHistory)) ? $paymentHistory->proofid:"")}}"> 
								
								</div>
								</div>
								<div class="form-group">
								<label class="col-sm-3"></label>							 
								<div class="col-md-6"> 								 
						 <input type="hidden" name="Update_order" value="UpdateOrder">
									<input type="submit" name="submit" class="btn btn-warning" value="Update"> 
								
								</div>
								</div>
								<div class="clearfix"></div>

								 


							</div>
							
				 
						
						
					</form>
				 							
							
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
<script>
				 
		function paidgst(gst){			
			 
			var paid = parseInt($('#amount').val());		
		 		 
			 var tot = Math. round(((paid)*(0.18)));			 
			 var gstamount = $('#gst_tax').val(tot);			 
			 var tatol= parseInt(paid + tot);			 
			 var tobe = $('#gst_total_amount').val(tatol);	 
			 
		}
		
		function nopaidgst(gstno){
			var paid = parseInt($('#amount').val());		
			 var tot = parseInt(0);			 
			 var gstamount = $('#gst_tax').val(tot);			 
			 var tatol= paid + tot;			 
			 var tobe = $('#gst_total_amount').val(tatol);				   
		}
		
		function paidtds(tds){			
			 
			var tdspaid = parseInt($('#amount').val()); 	
			var gst_total_amount = parseInt($('#gst_total_amount').val());			 		 
			 var tottds = Math. round(((tdspaid)*(2))/100);			 
			 var gstamount = $('#tds_amount').val(tottds);			 
			 var tdstatol= parseInt(gst_total_amount - tottds);			 
			 var tdstobe = $('#total_amount').val(tdstatol);	 
			 
		}
		
		function nopaidtds(tdsno){
			var tdspaid = parseInt($('#amount').val());	
			var gst_total_amount = parseInt($('#gst_total_amount').val());				
			 var tottds = parseInt(0);			 
			 var gstamount = $('#tds_amount').val(tottds);			 
			 var tdstatol= gst_total_amount - tottds;			 
			 var tdstobe = $('#total_amount').val(tdstatol);				   
		}
		
		 
		</script>
		
<?php echo View::make('admin/footer'); ?>