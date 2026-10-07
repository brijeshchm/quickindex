<?php echo View::make('admin/header'); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update SEO keyword - {{$keyword->keyword}}</h1>
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
					@if(Session::has('danger_msg'))
						<div class="alert alert-danger">
							{{Session::get('danger_msg')}}
						</div>
					@endif					
                   <style>
/* ==== Custom Panel Section Styling ==== */
.section-border {
    border: 2px solid #ddd;
    border-radius: 10px;
    padding: 25px;
    margin-bottom: 30px;
    background-color: #f9f9f9;
}

.section-border h4 {
    background-color: #007bff;
    color: #fff;
    padding: 10px 15px;
    margin: -25px -25px 20px -25px;
    border-radius: 10px 10px 0 0;
    font-size: 18px;
    font-weight: 600;
}

.section-border label {
    font-weight: 500;
}

.btn-primary {
    border-radius: 5px;
}
.panel-body{

padding:0px;
}
</style>

<div class="panel panel-default">
  

    <div class="panel-body">
         
        <div class="section-border">
            <h4>Meta Information</h4>
            <form class="form-horizontal" method="POST" onsubmit="return keywordController.updateMetaInformation(this,<?php echo (isset($keyword->id)? $keyword->id:""); ?>)">
                {{ csrf_field() }}

                <div class="form-group">
                    <label class="col-md-2 control-label">Meta Title</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="meta_title" placeholder="Enter Meta Title">{{ old('meta_title',(isset($keyword)) ? $keyword->meta_title:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Meta Description</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="meta_description" placeholder="Enter Meta Description">{{ old('meta_description',(isset($keyword)) ? $keyword->meta_description:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">H1 Heading</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="h1_heading" placeholder="Enter H1 Heading">{{ old('h1_heading',(isset($keyword)) ? $keyword->h1_heading:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Short Definition</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="short_definition" placeholder="Enter short definition">{{ old('short_definition',(isset($keyword)) ? $keyword->short_definition:"")}}</textarea>
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="ratingValue" class="col-md-2 control-label">Rating Value</label>
                    <div class="col-md-8">
                    <select class="form-control" name="ratingvalue">
                    <option value="">Select Rating Value</option>
                    <?php 
                    $rating = array(1,2,3,3.5,4,4.5,4.75,5);
                    foreach($rating as $key=>$value){	
                    ?>
                    <option value="<?php echo $value; ?>" @if ("$value"== old('ratingvalue'))
                    selected="selected"	
                    @else
                    {{ (isset($keyword) && $keyword->ratingvalue ==$value ) ? "selected":"" }} @endif><?php echo $value; ?></option>
                    <?php } ?>
                    </select>
                            
                    </div>
                </div>

                <div class="form-group">
                    <label for="ratingcount" class="col-md-2 control-label">Rating Count</label>
                    <div class="col-md-8">								 
                        <input type="number" class="form-control" name="ratingcount" value="{{ old('ratingcount',(isset($keyword)) ? $keyword->ratingcount:"")}}">
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn"></i> Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>

        {{-- ==================== PAGE CONTENT SECTION ==================== --}}
        <div class="section-border">
            <h4>About Keyword Content</h4>
            <form class="form-horizontal" method="POST" onsubmit="return keywordController.updateAboutKeyword(this,<?php echo (isset($keyword->id)? $keyword->id:""); ?>)" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label class="col-md-2 control-label">Heading</label>
                    <div class="col-md-8">
                        <input class="form-control" name="heading" value="{{ old('heading',(isset($keyword)) ? $keyword->heading:"")}}" placeholder="Enter heading">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">About What is {{$keyword->keyword}}</label>
                    <div class="col-md-8">
                        <textarea class="form-control summernote" name="courseabout" rows="5" placeholder="Enter About Section">{{ old('courseabout',(isset($keyword)) ? $keyword->courseabout:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Paragraph 1</label>
                    <div class="col-md-8">
                        <input class="form-control" name="paragraph1" value="{{ old('paragraph1',(isset($keyword)) ? $keyword->paragraph1:"")}}" placeholder="Enter paragraph 1">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Paragraph 2</label>
                    <div class="col-md-8">
                        <input class="form-control" name="paragraph2" value="{{ old('paragraph2',(isset($keyword)) ? $keyword->paragraph2:"")}}" placeholder="Enter paragraph 2">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Paragraph 3</label>
                    <div class="col-md-8">
                        <input class="form-control" name="paragraph3" value="{{ old('paragraph3',(isset($keyword)) ? $keyword->paragraph3:"")}}" placeholder="Enter paragraph 3">
                    </div>
                </div>
                <div class="form-group">
                    <label for="h1_heading" class="col-md-2 control-label">Paragraph 4 </label>
                    <div class="col-md-8">
                        <input class="form-control" name="paragraph4" placeholder="Enter paragraph4" value="{{ old('paragraph4',(isset($keyword)) ? $keyword->paragraph4:"")}}"> 
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="h1_heading" class="col-md-2 control-label">Paragraph 5</label>
                    <div class="col-md-8">
                        <input class="form-control" name="paragraph5" placeholder="Enter paragraph5" value="{{ old('paragraph5',(isset($keyword)) ? $keyword->paragraph5:"")}}"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="h1_heading" class="col-md-2 control-label">Paragraph 6 </label>
                    <div class="col-md-8">
                        <input class="form-control" name="paragraph6" placeholder="Enter paragraph 6" value="{{ old('paragraph6',(isset($keyword)) ? $keyword->paragraph6:"")}}"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="h1_heading" class="col-md-2 control-label">Paragraph 7 </label>
                    <div class="col-md-8">
                        <input class="form-control" name="paragraph7" placeholder="Enter paragraph 7" value="{{ old('paragraph7',(isset($keyword)) ? $keyword->paragraph7:"")}}"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="h1_heading" class="col-md-2 control-label">Paragraph 8 </label>
                    <div class="col-md-8">
                        <input class="form-control" name="paragraph8" placeholder="Enter paragraph 8" value="{{ old('paragraph8',(isset($keyword)) ? $keyword->paragraph8:"")}}"> 
                    </div>
                </div>

                 <div class="form-group text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn"></i> Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="section-border">
            <h4> Page Content</h4>
            <form class="form-horizontal" method="POST" onsubmit="return keywordController.updatePageContent(this,<?php echo (isset($keyword->id)? $keyword->id:""); ?>)" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-md-2 control-label">Top Heading</label>
                    <div class="col-md-8">
                        <input class="form-control" name="top_heading" value="{{ old('top_heading',(isset($keyword)) ? $keyword->top_heading:"")}}" placeholder="Enter top heading">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label">Page Top Description (max 500 chars)</label>
                    <div class="col-md-8">
                        <textarea class="form-control summernote" name="top_description" rows="9" placeholder="Enter Page Top Description">{{ old('top_description',(isset($keyword)) ? $keyword->top_description:"")}}</textarea>
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Bottom Heading</label>
                    <div class="col-md-8">
                        <input class="form-control" name="bottom_heading" value="{{ old('bottom_heading',(isset($keyword)) ? $keyword->bottom_heading:"")}}" placeholder="Enter bottom heading">
                    </div>
                </div>
            <div class="form-group ">
                <label for="bottom_description" class="col-md-2 control-label">Page Bottom Description</label>
                <div class="col-md-8">
                <textarea class="form-control summernote" name="bottom_description" placeholder="Enter Page Bottom Description" rows="15">{{ old('bottom_description',(isset($keyword)) ? $keyword->bottom_description:"")}}</textarea>
                </div>
            </div>	
            <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn"></i> Submit
            </button>
        </div>
            </form>
        </div>


        <div class="section-border">
            <h4>Extra Content</h4>
            <form class="form-horizontal" method="POST" onsubmit="return keywordController.extraPageContent(this,<?php echo (isset($keyword->id)? $keyword->id:""); ?>)" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-md-2 control-label">Extra Heading</label>
                    <div class="col-md-8">
                        <input class="form-control" name="extra_heading" value="{{ old('extra_heading',(isset($keyword)) ? $keyword->extra_heading:"")}}" placeholder="Enter Extra heading">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label">Page Extra Description (max 500 chars)</label>
                    <div class="col-md-8">
                        <textarea class="form-control summernote" name="extra_description" rows="9" placeholder="Enter Page Extra Description">{{ old('extra_description',(isset($keyword)) ? $keyword->extra_description:"")}}</textarea>
                    </div>
                </div>
                  
            	
            <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn"></i> Submit
            </button>
        </div>
            </form>
        </div>

          <div class="section-border">
            <h4>Noida City Page Content</h4>
            <form class="form-horizontal" method="POST" onsubmit="return keywordController.updateNoidaPageContent(this,<?php echo (isset($keyword->id)? $keyword->id:""); ?>)" >
                {{ csrf_field() }}
                
                
                <div class="form-group">
                    <label class="col-md-2 control-label">Meta Title Noida</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="meta_title_noida" placeholder="Enter Meta Title Noida">{{ old('meta_title_noida',(isset($keyword)) ? $keyword->meta_title_noida:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Meta Description Noida</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="meta_desc_noida" placeholder="Enter Meta Description Noida">{{ old('meta_desc_noida',(isset($keyword)) ? $keyword->meta_desc_noida:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">H1 Heading Noida</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="h1_heading_noida" placeholder="Enter H1 Heading Noida">{{ old('h1_heading_noida',(isset($keyword)) ? $keyword->h1_heading_noida:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Short Definition Noida</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="short_desc_noida" placeholder="Enter short definition Noida">{{ old('short_desc_noida',(isset($keyword)) ? $keyword->short_desc_noida:"")}}</textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-2 control-label">Noida Top Heading</label>
                    <div class="col-md-8">
                        <input class="form-control" name="noida_top_heading" value="{{ old('noida_top_heading',(isset($keyword)) ? $keyword->noida_top_heading:"")}}" placeholder="Enter noida top heading">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label">Page Top Description (max 500 chars)</label>
                    <div class="col-md-8">
                        <textarea class="form-control summernote" name="noida_top_description" rows="9" placeholder="Enter Page Top Description">{{ old('noida_top_description',(isset($keyword)) ? $keyword->noida_top_description:"")}}</textarea>
                    </div>
                </div>
            <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn"></i> Submit
            </button>
        </div>
            </form>
        </div>



        
          <div class="section-border">
            <h4>Delhi City Page Content</h4>
            <form class="form-horizontal" method="POST" onsubmit="return keywordController.updateDelhiPageContent(this,<?php echo (isset($keyword->id)? $keyword->id:""); ?>)" >
                {{ csrf_field() }}
       

                <div class="form-group">
                    <label class="col-md-2 control-label">Meta Title Delhi</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="meta_title_delhi" placeholder="Enter Meta Title Delhi">{{ old('meta_title_delhi',(isset($keyword)) ? $keyword->meta_title_delhi:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Meta Description Delhi</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="meta_desc_delhi" placeholder="Enter Meta Description Delhi">{{ old('meta_desc_delhi',(isset($keyword)) ? $keyword->meta_desc_delhi:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">H1 Heading Delhi</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="h1_heading_delhi" placeholder="Enter H1 Heading Delhi">{{ old('h1_heading_delhi',(isset($keyword)) ? $keyword->h1_heading_delhi:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Short Definition Delhi</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="short_desc_delhi" placeholder="Enter short definition Delhi">{{ old('short_desc_delhi',(isset($keyword)) ? $keyword->short_desc_delhi:"")}}</textarea>
                    </div>
                </div>
                

                  <div class="form-group">
                    <label class="col-md-2 control-label">Delhi Bottom Heading</label>
                    <div class="col-md-8">
                        <input class="form-control" name="delhi_bottom_heading" value="{{ old('delhi_bottom_heading',(isset($keyword)) ? $keyword->delhi_bottom_heading:"")}}" placeholder="Enter bottom delhi heading">
                    </div>
                </div>
            <div class="form-group ">
                <label for="bottom_description" class="col-md-2 control-label">Delhi Page Bottom Description</label>
                <div class="col-md-8">
                <textarea class="form-control summernote" name="delhi_bottom_description" placeholder="Enter Page Bottom Description" rows="15">{{ old('delhi_bottom_description',(isset($keyword)) ? $keyword->delhi_bottom_description:"")}}</textarea>
                </div>
            </div>	


            
            <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn"></i> Submit
            </button>
        </div>
            </form>
        </div>



        <div class="section-border">
            <h4>Faridabad only City Page Content</h4>
            <form class="form-horizontal" method="POST" onsubmit="return keywordController.updatePageWithoutCityContent(this,<?php echo (isset($keyword->id)? $keyword->id:""); ?>)" >
                {{ csrf_field() }}

                
                <div class="form-group">
                    <label class="col-md-2 control-label">Meta Title Faridabad</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="meta_title_faridabad" placeholder="Enter Meta Title faridabad">{{ old('meta_title_faridabad',(isset($keyword)) ? $keyword->meta_title_faridabad:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Meta Description Faridabad</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="meta_desc_faridabad" placeholder="Enter Meta Description faridabad">{{ old('meta_desc_faridabad',(isset($keyword)) ? $keyword->meta_desc_faridabad:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">H1 Heading faridabad</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="h1_heading_faridabad" placeholder="Enter H1 Heading faridabad">{{ old('h1_heading_faridabad',(isset($keyword)) ? $keyword->h1_heading_faridabad:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Short Definition faridabad</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="short_desc_faridabad" placeholder="Enter short definition faridabad">{{ old('short_desc_faridabad',(isset($keyword)) ? $keyword->short_desc_faridabad:"")}}</textarea>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label">Without City Top Heading</label>
                    <div class="col-md-8">
                        <input class="form-control" name="top_wcity_heading" value="{{ old('top_wcity_heading',(isset($keyword)) ? $keyword->top_wcity_heading:"")}}" placeholder="Enter top without city heading">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label">Page Top Description Without City</label>
                    <div class="col-md-8">
                        <textarea class="form-control summernote" name="top_wcity_description" rows="9" placeholder="Enter Page Top Description">{{ old('top_wcity_description',(isset($keyword)) ? $keyword->top_wcity_description:"")}}</textarea>
                    </div>
                </div>
       
      
            <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn"></i> Submit
            </button>
        </div>
            </form>
        </div>

        
        <div class="section-border">
            <h4>Bangalore only City Page Content</h4>
            <form class="form-horizontal" method="POST" onsubmit="return keywordController.updateBangaloreCityContent(this,<?php echo (isset($keyword->id)? $keyword->id:""); ?>)" >
                {{ csrf_field() }}
         

                 <div class="form-group">
                    <label class="col-md-2 control-label">Meta Title Bangalore</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="meta_title_bangalore" placeholder="Enter Meta Title Bangalore">{{ old('meta_title_bangalore',(isset($keyword)) ? $keyword->meta_title_bangalore:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Meta Description bangalore</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="meta_desc_bangalore" placeholder="Enter Meta Description bangalore">{{ old('meta_desc_bangalore',(isset($keyword)) ? $keyword->meta_desc_bangalore:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">H1 Heading bangalore</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="h1_heading_bangalore" placeholder="Enter H1 Heading bangalore">{{ old('h1_heading_bangalore',(isset($keyword)) ? $keyword->h1_heading_bangalore:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Short Definition bangalore</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="short_desc_bangalore" placeholder="Enter short definition bangalore">{{ old('short_desc_bangalore',(isset($keyword)) ? $keyword->short_desc_bangalore:"")}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Bottom Heading without city</label>
                    <div class="col-md-8">
                        <input class="form-control" name="bottom_wcity_heading" value="{{ old('bottom_wcity_heading',(isset($keyword)) ? $keyword->bottom_wcity_heading:"")}}" placeholder="Enter bottom heading without city">
                    </div>
                </div>
            <div class="form-group ">
                <label for="bottom_description" class="col-md-2 control-label">Page Bottom Description without city</label>
                <div class="col-md-8">
                <textarea class="form-control summernote" name="bottom_wcity_description" placeholder="Enter Page Bottom Description" rows="15">{{ old('bottom_wcity_description',(isset($keyword)) ? $keyword->bottom_wcity_description:"")}}</textarea>
                </div>
            </div>	
            <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn"></i> Submit
            </button>
        </div>
            </form>
        </div>




        {{-- ==================== FAQ SECTION ==================== --}}
        <div class="section-border">
            <h4>FAQ Section</h4>
            <form class="form-horizontal" method="POST" onsubmit="return keywordController.updateFaqKeyword(this,<?php echo (isset($keyword->id)? $keyword->id:""); ?>)">
                {{ csrf_field() }}

        <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Question 1</label>
                <div class="col-md-8">
        <input class="form-control" name="faqq1" placeholder="Enter FAQ Question 1" value="{{ old('faqq1',(isset($keyword)) ? $keyword->faqq1:"")}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Answer 1</label>
                <div class="col-md-8">
                    <textarea class="form-control" name="faqa1" placeholder="Enter FAQ Answer 1">{{ old('faqa1',(isset($keyword)) ? $keyword->faqa1:"")}}</textarea>
                </div>
            </div>
            
            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Question 2</label>
                <div class="col-md-8">
                    <input class="form-control" name="faqq2" placeholder="Enter FAQ Question 2" value="{{ old('faqq2',(isset($keyword)) ? $keyword->faqq2:"")}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Answer 2</label>
                <div class="col-md-8">
                    <textarea class="form-control" name="faqa2" placeholder="Enter FAQ Answer 2">{{ old('faqa2',(isset($keyword)) ? $keyword->faqa2:"")}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Question 3</label>
                <div class="col-md-8">
                    <input class="form-control" name="faqq3" placeholder="Enter FAQ Question 3" value="{{ old('faqq3',(isset($keyword)) ? $keyword->faqq3:"")}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Answer 3</label>
                <div class="col-md-8">
                    <textarea class="form-control" name="faqa3" placeholder="Enter FAQ Answer 3">{{ old('faqa3',(isset($keyword)) ? $keyword->faqa3:"")}}</textarea>
                </div>
            </div>
            
            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Question 4</label>
                <div class="col-md-8">
                    <input class="form-control" name="faqq4" placeholder="Enter FAQ Question 4" value="{{ old('faqq4',(isset($keyword)) ? $keyword->faqq4:"")}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Answer 4</label>
                <div class="col-md-8">
                    <textarea class="form-control" name="faqa4" placeholder="Enter FAQ Answer 4">{{ old('faqa4',(isset($keyword)) ? $keyword->faqa4:"")}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Question 5</label>
                <div class="col-md-8">
                    <input class="form-control" name="faqq5" placeholder="Enter FAQ Question 5" value="{{ old('faqq5',(isset($keyword)) ? $keyword->faqq5:"")}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Answer 5</label>
                <div class="col-md-8">
                    <textarea class="form-control" name="faqa5" placeholder="Enter FAQ Answer 5">{{ old('faqa5',(isset($keyword)) ? $keyword->faqa5:"")}}</textarea>
                </div>
            </div>


            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Question 6</label>
                <div class="col-md-8">
                    <input class="form-control" name="faqq6" placeholder="Enter FAQ Question 6" value="{{ old('faqq6',(isset($keyword)) ? $keyword->faqq6:"")}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Answer 6</label>
                <div class="col-md-8">
                    <textarea class="form-control" name="faqa6" placeholder="Enter FAQ Answer 6">{{ old('faqa6',(isset($keyword)) ? $keyword->faqa6:"")}}</textarea>
                </div>
            </div>
            

            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Question 7</label>
                <div class="col-md-8">
                    <input class="form-control" name="faqq7" placeholder="Enter FAQ Question 7" value="{{ old('faqq7',(isset($keyword)) ? $keyword->faqq7:"")}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Answer 7</label>
                <div class="col-md-8">
                    <textarea class="form-control" name="faqa7" placeholder="Enter FAQ Answer 7">{{ old('faqa7',(isset($keyword)) ? $keyword->faqa7:"")}}</textarea>
                </div>
            </div>
            

            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Question 8</label>
                <div class="col-md-8">
                    <input class="form-control" name="faqq8" placeholder="Enter FAQ Question 8" value="{{ old('faqq8',(isset($keyword)) ? $keyword->faqq8:"")}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Answer 8</label>
                <div class="col-md-8">
                    <textarea class="form-control" name="faqa8" placeholder="Enter FAQ Answer 8">{{ old('faqa8',(isset($keyword)) ? $keyword->faqa8:"")}}</textarea>
                </div>
            </div>
            

            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Question 9</label>
                <div class="col-md-8">
                    <input class="form-control" name="faqq9" placeholder="Enter FAQ Question 9" value="{{ old('faqq9',(isset($keyword)) ? $keyword->faqq9:"")}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Answer 9</label>
                <div class="col-md-8">
                    <textarea class="form-control" name="faqa9" placeholder="Enter FAQ Answer 9">{{ old('faqa9',(isset($keyword)) ? $keyword->faqa9:"")}}</textarea>
                </div>
            </div>
            

            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Question 10</label>
                <div class="col-md-8">
                    <input class="form-control" name="faqq10" placeholder="Enter FAQ Question 10" value="{{ old('faqq10',(isset($keyword)) ? $keyword->faqq10:"")}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="top_description" class="col-md-2 control-label">FAQ Answer 10</label>
                <div class="col-md-8">
                    <textarea class="form-control" name="faqa10" placeholder="Enter FAQ Answer 10">{{ old('faqa10',(isset($keyword)) ? $keyword->faqa10:"")}}</textarea>
                </div>
            </div>
            



             <div class="form-group text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn"></i> Submit
                        </button>
                    </div>
                </div>	
            </form>
        </div>
       
    </div>
</div>

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
$('.summernote').summernote({
height: 500
});
</script>





<?php echo View::make('admin/footer'); ?>