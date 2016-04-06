      <div class="wrap">
         <!-- Header Start -->
         <header id="header">            
            <!-- Main Header Start -->
            <div class="main-header">
               <div class="container">                  

                  <!-- Logo Start -->
                  <div class="logo pull-left">
                     <h1>
                        <a href="<?php echo site_url('dashboard/home'); ?>">
                           <img src="<?php echo site_url(); ?>assets/img/logo_2.png" alt="nizhidaoma" width="250" height="70" >                           
                        </a>
                     </h1>
                  </div>
                  <!-- Logo End -->

                  <!-- Mobile Menu Start -->
                  <div class="mobile navbar-header">
                     <a class="navbar-toggle" data-toggle="collapse" href=".navbar-collapse">
                        <i class="fa fa-bars fa-2x"></i>
                     </a> 
                  </div>
                  <!-- Mobile Menu End -->
                     
                  <!-- Menu Start -->
                  <nav class="collapse navbar-collapse menu">                     
                     <ul class="nav navbar-nav sf-menu">
                        <li>
                           <a  href="<?php echo site_url("#"); ?>">
                           主页                           
                           </a>                           
                        </li>                                                                                                                    

                        <li>  
                           <a id="current" class="sf-with-ul" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                              按选择章节
                           </a>
                        </li>

                        <li>
                           <a href="javascript:void(0);">
                           语言选择
                           <span class="sf-sub-indicator">
                           <i class="icon-angle-down "></i>
                           </span>
                           </a>
                           <ul>
                              <li><a href="javascript:void(0);" class="sf-with-ul">普通话</a></li>
                              <li><a href="javascript:void(0);" class="sf-with-ul">客家话</a></li>
                              <li><a href="javascript:void(0);" class="sf-with-ul">粤语</a></li>
                           </ul>
                        </li>   
                              
                     </ul>                                           

                  </nav>
                  <!-- Menu End --> 
               </div>
            </div>
            <!-- Main Header End -->
         </header>
         <!-- Header End --> 
         

         <style type="text/css">
            .nav>li>a:focus, .nav>li>a:hover{
               text-decoration:none;
               background-color: #0F2E4D;
            }
         
         </style>
         
         <div class="container"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                   

                <div class="collapse" id="collapseExample">
                  <div class="well">
                    <!-- Reply Section Start -->
                    <div class="reply">
                       <h3 class="title"><i class="icon-book"></i>按圣经的书卷、章、节搜索:</h3>
                       <form class="reply" id="reply">
                          <fieldset>
                             <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">  
                                   <label>目录: <span>*</span></label>                            
                                   <select class="form-control">
                                     <option>马太福音</option>
                                     <option>马可福音</option>
                                     <option>路加福音</option>
                                     <option>撒母耳记下</option>
                                     <option>约翰福音</option>
                                   </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                              
                                <label>章: <span>*</span></label>
                                   <select class="form-control">
                                     <option>2</option>
                                     <option>3</option>
                                     <option>4</option>
                                     <option>5</option>
                                     <option>6</option>
                                   </select>
                                </div>                          
                             </div>                        
                          </fieldset>
                          <br>   
                          <button class="btn-normal btn-color" type="submit">搜索</button>
                          <div class="clearfix">
                          </div>
                       </form>
                    </div>
                    <!-- Reply Section End -->
                  </div>
                </div>  
            </div>
         </div> 