<script>
   /*
      VIEWPORT BUG FIX
      iOS viewport scaling bug fix, by @mathias, @cheeaun and @jdalton
   */
   (function(doc){var addEvent='addEventListener',type='gesturestart',qsa='querySelectorAll',scales=[1,1],meta=qsa in doc?doc[qsa]('meta[name=viewport]'):[];function fix(){meta.content='width=device-width,minimum-scale='+scales[0]+',maximum-scale='+scales[1];doc.removeEventListener(type,fix,true);}if((meta=meta[meta.length-1])&&addEvent in doc){fix();scales=[.25,1.6];doc[addEvent](type,fix,true);}}(document));
</script>

<!-- Content Start -->
<div id="main">   


   <!-- Main Content start-->
   <div class="content">
      <div class="container">
         <div class="row">
            <div class="sidebar col-lg-3 col-md-3 col-sm-4 col-xs-12">
               <!-- Search Widget Start -->
               <div class="widget search-form">
                  <div class="input-group">
                     <input type="text" placeholder="输入关键字"   onfocus="if(this.value=='输入关键字...')this.value='';" onblur="if(this.value=='')this.value='输入关键字...';" class="search-input form-control">
                     <span class="input-group-btn">
                     <button type="submit" class="subscribe-btn btn"><i class="icon-search"></i></button>
                     </span>
                  </div>
                  <!-- /input-group -->
               </div>
               <!-- Search Widget End -->
               
               <div class="widget category">
                  <h3 class="title">主题</h3>
                  <ul class="category-list slide">
                     <li><a href="#">耶稣的诞生</a></li>
                     <li><a href="#">耶稣早期的事工</a></li>
                     <li><a href="#">耶稣所行的神迹</a></li>
                     <li><a href="#">耶稣呼召门徒</a></li>
                     <li><a href="#">耶稣的医治</a></li>
                     <li><a href="#">耶稣的教导</a></li>
                     <li><a href="#">耶稣的比喻</a></li>
                     <li><a href="#">耶稣的荣耀</a></li>
                     <li><a href="#">耶稣在耶路撒冷的最后一周（主后33年）</a></li>
                     <li><a href="#">耶稣的预言</a></li>
                     <li><a href="#">耶稣的受难</a></li>
                  </ul>
               </div>
               <!-- Category Widget End -->
               <div class="blog-divider"></div>
               <!-- Testimonials Widget Start -->
               <div class="row">
                  <div class="testimonials widget">                     
                     <div class="clearfix"></div>
                     <div id="testimonials-carousel" class="testimonials-carousel slide">
                        <div class="carousel-inner">
                           <div class="item active">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="testimonial item">
                                    <p>
                                       不要积攒财宝在地上，要积攒财宝在天上！
                                    </p>
                                    <div class="testimonials-arrow">
                                    </div>
                                    <div class="author">
                                       <span class="color">张善姗</span>
                                       《 耶稣论财富 》
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="testimonial item">
                                    <p>
                                       我们是世上盐，要起到调和的作用；我们是世界的光，当照在人前，是不能隐藏的。求主坚固我们的信心！帮助我们能在神所赐的真道上作光作盐，使彼此受造就。荣耀归给主！以马内利
                                    </p>
                                    <div class="testimonials-arrow">
                                    </div>
                                    <div class="author">
                                       <span class="color">余洪</span>
                                       《 登山宝训--八福及光和盐 》                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="testimonial item">
                                    <p>
                                       原来教会里也有假的信徒，我要常常鉴察自己的生命，不做田里的稗子。
                                    </p>
                                    <div class="testimonials-arrow">
                                    </div>
                                    <div class="author">
                                       <span class="color">孟浩</span>   
                                        《 麦子与椑子的比喻 》
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="testimonial item">
                                    <p>
                                       的确，人面对死亡是无奈的。但耶稣是生命的主，能帮助我们胜过死亡，让我们有永生的盼望，这是多么大的安慰啊
                                    </p>
                                    <div class="testimonials-arrow">
                                    </div>
                                    <div class="author">                                       
                                    <span class="color">李宁宁</span>
                                    《 复活的拉撒路 》
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="testimonial item">
                                    <p>
                                       感谢公义的主，最后会把义人跟恶人分别出来。愿这个故事激励我们坚信到底！
                                    </p>
                                    <div class="testimonials-arrow">
                                    </div>
                                    <div class="author">
                                    <span class="color">王励</span>
                                     《 麦子与椑子的比喻 》
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Category Widget Start -->
               
            </div>
            <!-- Sidebar End -->                
            <div class="posts-block col-lg-9 col-md-9 col-sm-8 col-xs-12">
               <article class="post hentry">                  
                  <div class="post-content">
                     <div class="img-content">
                        <img src="http://www.nizhidaoma114.com/images/scaled/34/c300x200/img.jpg" alt="">
                     </div>
                     <p>
                        <div class="post-content-wrap">
                           <header class="post-header">                             
                              <h3 class="content-title">耶稣论财富</h3>
                              <small>马太福音 6:19-34</small>
                              <br>
                              <p>
                                 现在有很多专家教人如何理财，你知道耶稣给人提供的理财之道是什么吗？ 
                              </p>
                              <br>
                              <div>
                                 <audio preload="auto" controls>                                    
                                    <source src="<?php echo site_url()?>assets/mp3/CMN_SLPDYK_0060.mp3">                                    
                                 </audio>
                            
                                 <script>
                                    $( function() {
                                        $( 'audio' ).audioPlayer();              
                                    });
                                 </script>
                                 
                              </div>   
                              <br> 
                              <div class="blog-entry-meta">
                                 <div class="blog-entry-meta-author">                                    
                                    <ul class="social">
                                       <li class="facebook"><a href="#"><i class="fa fa-tencent-weibo"></i></a></li>
                                       <li class="twitter"><a href="#"><i class="fa fa-qq"></i></a></li>
                                       <li class="dribbble"><a href="#"><i class="fa fa-weixin"></i></a></li>
                                       <li class="linkedin"><a href="#"><i class="fa fa-weibo"></i></a></li>
                                    </ul>
                                 </div>                                 
                                 <div class="blog-entry-meta-comments pull-right">
                                    <ul class="social">
                                       <li class="facebook"><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                       <li class="twitter"><a href="#"><i class="fa fa-download"></i></a></li>
                                       <li class="dribbble"><a href="#"><i class="fa fa-code"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                             <div class="">                                      
                                                                         
                             </div>
                           </header>                           
                           <div class="row">

                              <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">
                                 <div class="accordionMod panel-group" >                                    
                                    <div class="accordion-item ">
                                       <h4 class="accordion-toggle" >查看评论</h4>

                                       <section class="accordion-inner panel-body ">
                                          <!-- Start About Author -->            
                                          <div class="about-author">
                                             <h3 class="title">其他人的评论：</h3>
                                             <div class="author-content">
                                                <div class="data">
                                                   <h4><a href="#">张善姗</a></h4>
                                                   <p>
                                                      不要积攒财宝在地上，要积攒财宝在天上！
                                                   </p>
                                                </div>
                                                <!-- End data -->
                                             </div>
                                             <br>
                                             <div class="author-content">
                                                <div class="data">
                                                   <h4><a href="#">余洪</a></h4>
                                                   <p>
                                                      我们是世上盐，要起到调和的作用；我们是世界的光，当照在人前，是不能隐藏的。求主坚固我们的信心！帮助我们能在神所赐的真道上作光作盐，使彼此受造就。荣耀归给主！以马内利
                                                      《 登山宝训--八福及光和盐 》
                                                   </p>
                                                </div>
                                                <!-- End data -->
                                             </div>
                                             <br>
                                             <div class="author-content">
                                                <div class="data">
                                                   <h4><a href="#">孟浩</a></h4>
                                                   <p>
                                                      原来教会里也有假的信徒，我要常常鉴察自己的生命，不做田里的稗子！
                                                   </p>
                                                </div>
                                                <!-- End data -->
                                             </div>                                             

                                          </div>
                                          <!-- End About Author -->

                                          <div class="divider"></div>
                                          <!-- Reply Section Start -->
                                          <div class="reply">
                                             <form class="reply" id="reply">
                                                <fieldset>                                                                 
                                                   <div class="row">
                                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <label>我的评论: <span>*</span></label>
                                                         <textarea class="form-control" rows="3" cols="40" required></textarea>
                                                      </div>
                                                   </div>
                                                </fieldset>
                                                <button class="btn-normal btn-color" type="submit">发送</button>
                                                <div class="clearfix">
                                                </div>
                                             </form>
                                          </div>
                                          <!-- Reply Section End -->
                                       </section>
                                    </div>
                                 </div>
                              </div>

                           </div>
                           <!-- End 5th Row-->                           
                        </div>

                        <div class="clearfix"></div>
                     </p>
                  </div>
               </article>
               <div class="blog-divider"></div>

               <article class="post hentry">                  
                  <div class="post-content">
                     <div class="img-content">
                        <img src="http://www.nizhidaoma114.com/images/scaled/29/c300x200/img.jpg" alt="">
                     </div>
                     <p>
                        <div class="post-content-wrap">
                           <header class="post-header">                             
                              <h3 class="content-title" >彼得岳母被医治</h3>
                              <small>马太福音 8:14-17马可福音 1:29-34路加福音 4:38-41</small>
                              <br>
                              <p>
                                 都说耶稣是心灵的安慰者，你知道耶稣面对一个重病的人能做些什么吗？ 
                              </p>
                              <br>
                              <div>
                                 <audio preload="auto" controls>                                    
                                    <source src="<?php echo site_url()?>assets/mp3/CMN_SLPDYK_0060.mp3">                                    
                                 </audio>
                            
                                 <script>
                                    $( function() {
                                        $( 'audio' ).audioPlayer();              
                                    });
                                 </script>
                                 
                              </div>   
                              <br> 
                              <div class="blog-entry-meta">
                                 <div class="blog-entry-meta-author">                                    
                                    <ul class="social">
                                       <li class="facebook"><a href="#"><i class="fa fa-tencent-weibo"></i></a></li>
                                       <li class="twitter"><a href="#"><i class="fa fa-qq"></i></a></li>
                                       <li class="dribbble"><a href="#"><i class="fa fa-weixin"></i></a></li>
                                       <li class="linkedin"><a href="#"><i class="fa fa-weibo"></i></a></li>
                                    </ul>
                                 </div>                                 
                                 <div class="blog-entry-meta-comments pull-right">
                                    <ul class="social">
                                       <li class="facebook"><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                       <li class="twitter"><a href="#"><i class="fa fa-download"></i></a></li>
                                       <li class="dribbble"><a href="#"><i class="fa fa-code"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                             <div class="">                                      
                                                                         
                             </div>
                           </header>                           
                           <div class="row">

                              <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">
                                 <div class="accordionMod panel-group">                                    
                                    <div class="accordion-item ">
                                       <h4 class="accordion-toggle" aria-expanded="true" >查看评论</h4>

                                       <section class="accordion-inner panel-body ">
                                          <!-- Start About Author -->            
                                          <div class="about-author">
                                             <h3 class="title">其他人的评论：</h3>
                                             <div class="author-content">
                                                <div class="data">
                                                   <h4><a href="#">张善姗</a></h4>
                                                   <p>
                                                      不要积攒财宝在地上，要积攒财宝在天上！
                                                   </p>
                                                </div>
                                                <!-- End data -->
                                             </div>
                                             <br>
                                             <div class="author-content">
                                                <div class="data">
                                                   <h4><a href="#">余洪</a></h4>
                                                   <p>
                                                      我们是世上盐，要起到调和的作用；我们是世界的光，当照在人前，是不能隐藏的。求主坚固我们的信心！帮助我们能在神所赐的真道上作光作盐，使彼此受造就。荣耀归给主！以马内利
                                                      《 登山宝训--八福及光和盐 》
                                                   </p>
                                                </div>
                                                <!-- End data -->
                                             </div>
                                             <br>
                                             <div class="author-content">
                                                <div class="data">
                                                   <h4><a href="#">孟浩</a></h4>
                                                   <p>
                                                      原来教会里也有假的信徒，我要常常鉴察自己的生命，不做田里的稗子！
                                                   </p>
                                                </div>
                                                <!-- End data -->
                                             </div>                                             

                                          </div>
                                          <!-- End About Author -->

                                          <div class="divider"></div>
                                          <!-- Reply Section Start -->
                                          <div class="reply">
                                             <form class="reply" id="reply">
                                                <fieldset>                                                                 
                                                   <div class="row">
                                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <label>我的评论: <span>*</span></label>
                                                         <textarea class="form-control" rows="3" cols="40" required></textarea>
                                                      </div>
                                                   </div>
                                                </fieldset>
                                                <button class="btn-normal btn-color" type="submit">发送</button>
                                                <div class="clearfix">
                                                </div>
                                             </form>
                                          </div>
                                          <!-- Reply Section End -->
                                       </section>
                                    </div>
                                                                      
                                 </div>
                              </div>

                           </div>
                           <!-- End 5th Row-->                           
                        </div>

                        <div class="clearfix"></div>
                     </p>
                  </div>
               </article>
               <div class="blog-divider"></div>
               <article class="post hentry">                  
                  <div class="post-content">
                     <div class="img-content">
                        <img src="http://www.nizhidaoma114.com/images/scaled/30/c300x200/img.jpg" alt="">
                     </div>
                     <p>
                        <div class="post-content-wrap">
                           <header class="post-header">                             
                              <h3 class="content-title">耶稣医治瘫子</h3>
                              <small>马太福音 9:1-8马可福音 2:1-12路加福音 5:17-26</small>
                              <br>
                              <p>
                                世上有很多绝望的人，你知道一个绝望的人该如何靠着耶稣重新开始吗？ 
                              </p>
                              <br>
                              <div>
                                 <audio preload="auto" controls>                                    
                                    <source src="<?php echo site_url()?>assets/mp3/CMN_SLPDYK_0060.mp3">                                    
                                 </audio>
                            
                                 <script>
                                    $( function() {
                                        $( 'audio' ).audioPlayer();              
                                    });
                                 </script>
                                 
                              </div>   
                              <br> 
                              <div class="blog-entry-meta">
                                 <div class="blog-entry-meta-author">                                    
                                    <ul class="social">
                                       <li class="facebook"><a href="#"><i class="fa fa-tencent-weibo"></i></a></li>
                                       <li class="twitter"><a href="#"><i class="fa fa-qq"></i></a></li>
                                       <li class="dribbble"><a href="#"><i class="fa fa-weixin"></i></a></li>
                                       <li class="linkedin"><a href="#"><i class="fa fa-weibo"></i></a></li>
                                    </ul>
                                 </div>                                 
                                 <div class="blog-entry-meta-comments pull-right">
                                    <ul class="social">
                                       <li class="facebook"><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                       <li class="twitter"><a href="#"><i class="fa fa-download"></i></a></li>
                                       <li class="dribbble"><a href="#"><i class="fa fa-code"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                             <div class="">                                      
                                                                         
                             </div>
                           </header>                           
                           <div class="row">

                              <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">
                                 <div class="accordionMod panel-group">                                    
                                    <div class="accordion-item ">
                                       <h4 class="accordion-toggle" aria-expanded="true">查看评论</h4>

                                       <section class="accordion-inner panel-body ">
                                          <!-- Start About Author -->            
                                          <div class="about-author">
                                             <h3 class="title">其他人的评论：</h3>
                                             <div class="author-content">
                                                <div class="data">
                                                   <h4><a href="#">张善姗</a></h4>
                                                   <p>
                                                      不要积攒财宝在地上，要积攒财宝在天上！
                                                   </p>
                                                </div>
                                                <!-- End data -->
                                             </div>
                                             <br>
                                             <div class="author-content">
                                                <div class="data">
                                                   <h4><a href="#">余洪</a></h4>
                                                   <p>
                                                      我们是世上盐，要起到调和的作用；我们是世界的光，当照在人前，是不能隐藏的。求主坚固我们的信心！帮助我们能在神所赐的真道上作光作盐，使彼此受造就。荣耀归给主！以马内利
                                                      《 登山宝训--八福及光和盐 》
                                                   </p>
                                                </div>
                                                <!-- End data -->
                                             </div>
                                             <br>
                                             <div class="author-content">
                                                <div class="data">
                                                   <h4><a href="#">孟浩</a></h4>
                                                   <p>
                                                      原来教会里也有假的信徒，我要常常鉴察自己的生命，不做田里的稗子！
                                                   </p>
                                                </div>
                                                <!-- End data -->
                                             </div>                                             

                                          </div>
                                          <!-- End About Author -->

                                          <div class="divider"></div>
                                          <!-- Reply Section Start -->
                                          <div class="reply">
                                             <form class="reply" id="reply">
                                                <fieldset>                                                                 
                                                   <div class="row">
                                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <label>我的评论: <span>*</span></label>
                                                         <textarea class="form-control" rows="3" cols="40" required></textarea>
                                                      </div>
                                                   </div>
                                                </fieldset>
                                                <button class="btn-normal btn-color" type="submit">发送</button>
                                                <div class="clearfix">
                                                </div>
                                             </form>
                                          </div>
                                          <!-- Reply Section End -->
                                       </section>
                                    </div>
                                                                      
                                 </div>
                              </div>

                           </div>
                           <!-- End 5th Row-->                           
                        </div>

                        <div class="clearfix"></div>
                     </p>
                  </div>
               </article>

               <div class="blog-divider"></div>
               <article class="post hentry">                  
                  <div class="post-content">
                     <div class="img-content">
                        <img src="http://www.nizhidaoma114.com/images/scaled/56/c300x200/img.jpg" alt="">
                     </div>
                     <p>
                        <div class="post-content-wrap">
                           <header class="post-header">                             
                              <h3 class="content-title">耶稣与撒马利亚妇人谈道</h3>
                              <small>约翰福音 4:5-42</small>
                              <br>
                              <p>
                                 一般人都不喜欢名声不好的女人，你知道耶稣会怎样对待这样的女人吗？ 
                              </p>
                              <br>
                              <div>
                                 <audio preload="auto" controls>                                    
                                    <source src="<?php echo site_url()?>assets/mp3/CMN_SLPDYK_0060.mp3">                                    
                                 </audio>
                            
                                 <script>
                                    $( function() {
                                        $( 'audio' ).audioPlayer();              
                                    });
                                 </script>
                                 
                              </div>   
                              <br> 
                              <div class="blog-entry-meta">
                                 <div class="blog-entry-meta-author">                                    
                                    <ul class="social">
                                       <li class="facebook"><a href="#"><i class="fa fa-tencent-weibo"></i></a></li>
                                       <li class="twitter"><a href="#"><i class="fa fa-qq"></i></a></li>
                                       <li class="dribbble"><a href="#"><i class="fa fa-weixin"></i></a></li>
                                       <li class="linkedin"><a href="#"><i class="fa fa-weibo"></i></a></li>
                                    </ul>
                                 </div>                                 
                                 <div class="blog-entry-meta-comments pull-right">
                                    <ul class="social">
                                       <li class="facebook"><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                       <li class="twitter"><a href="#"><i class="fa fa-download"></i></a></li>
                                       <li class="dribbble"><a href="#"><i class="fa fa-code"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                             <div class="">                                      
                                                                         
                             </div>
                           </header>                           
                           <div class="row">

                              <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">
                                 <div class="accordionMod panel-group">                                    
                                    <div class="accordion-item ">
                                       <h4 class="accordion-toggle" >查看评论</h4>

                                       <section class="accordion-inner panel-body ">
                                          <!-- Start About Author -->            
                                          <div class="about-author">
                                             <h3 class="title">其他人的评论：</h3>
                                             <div class="author-content">
                                                <div class="data">
                                                   <h4><a href="#">张善姗</a></h4>
                                                   <p>
                                                      不要积攒财宝在地上，要积攒财宝在天上！
                                                   </p>
                                                </div>
                                                <!-- End data -->
                                             </div>
                                             <br>                                                                                          

                                          </div>
                                          <!-- End About Author -->

                                          <div class="divider"></div>
                                          <!-- Reply Section Start -->
                                          <div class="reply">
                                             <form class="reply" id="reply">
                                                <fieldset>                                                                 
                                                   <div class="row">
                                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <label>我的评论: <span>*</span></label>
                                                         <textarea class="form-control" rows="3" cols="40" required></textarea>
                                                      </div>
                                                   </div>
                                                </fieldset>
                                                <button class="btn-normal btn-color" type="submit">发送</button>
                                                <div class="clearfix">
                                                </div>
                                             </form>
                                          </div>
                                          <!-- Reply Section End -->
                                       </section>
                                    </div>
                                                                      
                                 </div>
                              </div>

                           </div>
                           <!-- End 5th Row-->                           
                        </div>

                        <div class="clearfix"></div>
                     </p>
                  </div>
               </article>

               <div class="blog-divider"></div>
               <article class="post hentry">                  
                  <div class="post-content">
                     <div class="img-content">
                        <img src="http://www.nizhidaoma114.com/images/scaled/56/c300x200/img.jpg" alt="">
                     </div>
                     <p>
                        <div class="post-content-wrap">
                           <header class="post-header">                             
                              <h3 class="content-title">耶稣与撒马利亚妇人谈道</h3>
                              <small>约翰福音 4:5-42</small>
                              <br>
                              <p>
                                 一般人都不喜欢名声不好的女人，你知道耶稣会怎样对待这样的女人吗？ 
                              </p>
                              <br>
                              <div>
                                 <audio preload="auto" controls>                                    
                                    <source src="<?php echo site_url()?>assets/mp3/CMN_SLPDYK_0060.mp3">                                    
                                 </audio>
                            
                                 <script>
                                    $( function() {
                                        $( 'audio' ).audioPlayer();              
                                    });
                                 </script>
                                 
                              </div>   
                              <br> 
                              <div class="blog-entry-meta">
                                 <div class="blog-entry-meta-author">                                    
                                    <ul class="social">
                                       <li class="facebook"><a href="#"><i class="fa fa-tencent-weibo"></i></a></li>
                                       <li class="twitter"><a href="#"><i class="fa fa-qq"></i></a></li>
                                       <li class="dribbble"><a href="#"><i class="fa fa-weixin"></i></a></li>
                                       <li class="linkedin"><a href="#"><i class="fa fa-weibo"></i></a></li>
                                    </ul>
                                 </div>                                 
                                 <div class="blog-entry-meta-comments pull-right">
                                    <ul class="social">
                                       <li class="facebook"><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                       <li class="twitter"><a href="#"><i class="fa fa-download"></i></a></li>
                                       <li class="dribbble"><a href="#"><i class="fa fa-code"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                             <div class="">                                      
                                                                         
                             </div>
                           </header>                           
                           <div class="row">

                              <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">
                                 <div class="accordionMod panel-group">                                    
                                    <div class="accordion-item ">
                                       <h4 class="accordion-toggle" >查看评论</h4>

                                       <section class="accordion-inner panel-body ">
                                          <!-- Start About Author -->            
                                          <div class="about-author">
                                             <h3 class="title">其他人的评论：</h3>
                                             <div class="author-content">
                                                <div class="data">
                                                   <h4><a href="#">张善姗</a></h4>
                                                   <p>
                                                      不要积攒财宝在地上，要积攒财宝在天上！
                                                   </p>
                                                </div>
                                                <!-- End data -->
                                             </div>
                                             <br>                                                                                          

                                          </div>
                                          <!-- End About Author -->

                                          <div class="divider"></div>
                                          <!-- Reply Section Start -->
                                          <div class="reply">
                                             <form class="reply" id="reply">
                                                <fieldset>                                                                 
                                                   <div class="row">
                                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <label>我的评论: <span>*</span></label>
                                                         <textarea class="form-control" rows="3" cols="40" required></textarea>
                                                      </div>
                                                   </div>
                                                </fieldset>
                                                <button class="btn-normal btn-color" type="submit">发送</button>
                                                <div class="clearfix">
                                                </div>
                                             </form>
                                          </div>
                                          <!-- Reply Section End -->
                                       </section>
                                    </div>
                                                                      
                                 </div>
                              </div>

                           </div>
                           <!-- End 5th Row-->                           
                        </div>

                        <div class="clearfix"></div>
                     </p>
                  </div>
               </article>

               
               <div class="blog-divider"></div>
               <div class="pagination-centered">
                  <ul class="pagination">
                     <li class="disabled"><a href="#">«</a></li>
                     <li class="active"><a href="#">1</a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">4</a></li>
                     <li><a href="#">5</a></li>
                     <li><a href="#">»</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Main Content end-->
</div>
<style type="text/css">
   .blog-entry-meta i{
      margin-right:0px;
   }
</style>